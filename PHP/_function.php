<?php

function makeErrorApiKey($code, $rep, $debug, $headers, $apiKeyHeader, $trace_mess)
{
    $debug->writeTrace($trace_mess);
    $debug->endTrace();

    http_response_code (403);
    $rep->status = 'error';
    $rep->error = $code;
    $rep->msg = 'not allowed';

    if ($debug->isActive()){
        $rep->debug = new \stdClass();
        $rep->debug->headers = $headers;
        $rep->debug->headers_found = $apiKeyHeader;
    }
}

/**
 * @param array $config
 * @param callable|string $if_matches
 * @return mixed|null
 */
function _traiteEndpoint(array $config, $if_matches)
{
    if (array_key_exists('endpoints', $config))
    {
        $queryString = $_SERVER['QUERY_STRING'];
        foreach($config['endpoints'] as $conf)
        {
            $ret = preg_match_all($conf['re'], $queryString, $matches, PREG_SET_ORDER);
            if($ret){
                if (is_callable($if_matches)){
                    return $if_matches($conf, $matches);
                }
                if (array_key_exists($if_matches, $conf)){
                    if (is_callable($conf[$if_matches])){
                        return $conf[$if_matches]($matches);
                    }
                    return $conf[$if_matches];
                }
                break;
            }
        }
    }
    return null;
}

function getInfoCnx($config)
{
    $infoCnx = new \stdClass();
    $infoCnx->username = $config['username'] ?? '';
    $infoCnx->password = $config['password'] ?? '';

    if (!empty($config['host'])){
        $infoCnx->host=$config['host'];
    }
    if (!empty($config['port'])){
        $infoCnx->port=$config['port'];
    }
    if (!empty($config['wsdl'])){
        $infoCnx->wsdl_file=$config['wsdl'];
    }

    _traiteEndpoint($config, function ($conf, $matches) use ($infoCnx) {
        foreach(['host', 'port', 'username', 'password'] as $key)
        {
            if (array_key_exists($key, $conf)){
                $infoCnx->$key = $conf[$key];
            }
        }
        return null;
    });
    return json_decode(json_encode($infoCnx), true);
}



function getIDAction($config)
{
    $fromEndpoint = _traiteEndpoint($config, 'idaction');
    return $fromEndpoint ?? $config['idaction'] ?? '';
}

function getClientClass($config)
{
    $fromEndpoint = _traiteEndpoint($config, 'typeaction');
    $typeaction = $fromEndpoint ?? $config['typeaction'] ?? 'decl';

    switch ($typeaction)
    {
        case 'aff':
            return NOUT\AffichageFiche::class;
        case 'ping':
            return NOUT\Ping::class;
        default:
        case 'decl':
            return NOUT\DeclenchementAutoClient::class;
    }
}

function getParams($config, $client, $mode_debug, $debug)
{
    $fromEndpoint = _traiteEndpoint($config, function($conf, $matches) use ($client, $mode_debug, $debug) {
        if (array_key_exists('params', $conf)) {
            if (is_callable($conf['params'])){
                return $conf['params']($matches, $client, $mode_debug, $debug);
            }
            return $conf['params'];
        }
        return null;
    });
    if (!is_null($fromEndpoint)){
        return $fromEndpoint;
    }

    if (array_key_exists('params', $config))
    {
        if (is_callable($config['params'])){
            return $config['params']($client, $mode_debug, $debug);
        }
        return $config['params'];
    }
    return [];
}

function transformeRetour($config, $ret)
{
    $fromEndpoint = _traiteEndpoint($config, function($conf, $matches) use ($ret) {
        if (array_key_exists('transforme_retour', $conf)) {
            return $conf['transforme_retour']($matches, $ret);
        }
        return null;
    });
    if (!is_null($fromEndpoint)){
        return $fromEndpoint;
    }

    if (array_key_exists('transforme_retour', $config) && is_callable($config['transforme_retour']))
    {
        return $config['transforme_retour']($ret);
    }

    return $ret;
}

function envoiRetour($config, $ret)
{
    $fromEndpoint = _traiteEndpoint($config, function($conf, $matches) use ($ret) {
        if (array_key_exists('envoi_retour', $conf)) {
            $conf['envoi_retour']($matches, $ret);
            return true;
        }
        return null;
    });
    if (!is_null($fromEndpoint)){
        return null;
    }

    if (array_key_exists('envoi_retour', $config) && is_callable($config['ret']))
    {
        $config['envoi_retour']($ret);
        return null;
    }

    http_response_code (200);
    header('Content-Type: application/json');
    echo json_encode($ret);
    return null;
}
function onCnxException($config, $rep, \Exception $e, $key)
{
    $fromEndpoint = _traiteEndpoint($config, function($conf, $matches) use ($e, $rep, $key) {
        if (array_key_exists($key, $conf)) {
            return $conf[$key]($matches, $rep, $e);
        }
        return null;
    });

    if (!is_null($fromEndpoint) && $fromEndpoint){
        return null; //on sort c'est le endpoint qui fait la sortie
    }
    if (is_null($fromEndpoint))
    {
        if (array_key_exists($key, $config) && is_callable($config[$key]))
        {
            if ($config[$key]($rep, $e)){ // c'est le callable qui fait la sortie
                return null;
            };
        }

        $rep->status = 'error';
        $rep->error = $e->getCode();
        $rep->msg = $e->getMessage();
    }

    http_response_code (500);
    header('Content-Type: application/json');
    echo json_encode($rep);
    return null;
}

//vérifie l'api key
function _verifyApiKey($apiKeyConfigured, $debug)
{
    if (empty($apiKeyConfigured)){
        return true;
    }

    $rep = new \stdClass();
    $headers = getallheaders();

    $apiKeyHeader = array_filter($headers, function ($key){
        return strcasecmp('x-api-key', $key)==0;
    }, ARRAY_FILTER_USE_KEY);

    if (count($apiKeyHeader)==0){
        makeErrorApiKey(1, $rep, $debug, $headers, $apiKeyHeader, 'no header x-api-key' );
        echo json_encode($rep);
        return false;
    }

    $key = current($apiKeyHeader);
    if (empty($key)){
        makeErrorApiKey(2, $rep, $debug, $headers, $apiKeyHeader, 'header x-api-key is empty' );
        echo json_encode($rep);
        return false;
    }

    if (strcmp($apiKeyConfigured, $key)!=0){
        makeErrorApiKey(2, $rep, $debug, $headers, $apiKeyHeader, "header x-api-key $key is invalid" );
        echo json_encode($rep);
        return false;
    }

    //tout va bien
    return true;
}


function executeSecurity($config, $debug)
{
    $fromEndpoint = _traiteEndpoint($config, function($conf, $matches) use ($debug) {
        if (array_key_exists('apikey', $conf)) {
            if (is_callable($conf['apikey'])){
                return $conf['apikey']($matches, $debug);
            }

            return _verifyApiKey($conf['apikey'], $debug);
        }
        return null;
    });

    if (!is_null($fromEndpoint)){
        return $fromEndpoint;
    }

    if (!array_key_exists('apikey', $config)){
        return true;
    }

    if (is_callable($config['apikey'])){
        return $config['apikey']($debug);
    }

    if (empty($config['apikey'])){
        return true;
    }

    return _verifyApiKey($config['apikey'], $debug);
}