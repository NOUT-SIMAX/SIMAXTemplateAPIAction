<?php

const DEBUG_MODE = false; //mode debug.
$mode_debug = DEBUG_MODE || file_exists('active_debug.txt');

if (!$mode_debug)
{
    error_reporting(0);
    ini_set("display_errors", 0);
}
else
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

//autoload
require_once __DIR__ . '/vendor/autoload.php';

require './_function.php';
require './config.php';


$debug = new NOUT\DebugTrace($mode_debug);
$debug->startTrace();

//vérification de l'apikey, c'est lié au point d'entree et pas au NOUTOnline
if (!executeSecurity($config, $debug)) {
    die; //les erreurs sont gérées dans la fonction
}

$rep = new \stdClass();
//récupération de l'id de l'action et des infos de connexion
$idaction = getIDAction($config);
$infoCnx = getInfoCnx($config);
//vérification de la configuration
if (    empty($infoCnx['username'])
    || !isset($infoCnx['password'])
    || empty($idaction)
){
    $debug->writeTrace('bad configuration');
    $debug->endTrace();

    http_response_code (403);
    $rep->status = 'error';
    $rep->error = '4';
    $rep->msg = 'not allowed';


    if ($mode_debug){
        $rep->debug = new \stdClass();
        $rep->debug->idaction = $idaction;
        $rep->debug->username = $infoCnx['username'] ?? null;
        $rep->debug->password = $infoCnx['password'] ?? null;
        $rep->debug->check_username = empty($infoCnx['username']);
        $rep->debug->check_password = !isset($infoCnx['password']);
        $rep->debug->check_idaction = empty($idaction);
    }
    header('Content-Type: application/json');
    echo json_encode($rep);
    die ;
}
//récupération du type d'action
$client_class = getClientClass($config);
$client = new $client_class($infoCnx);
$client->setDebugTrace($debug);
//récupération des paramètres
$params = getParams($config, $client, $mode_debug, $debug);

//connexion
try {
    $client->bConnecte();
}
catch (\Exception $e)
{
    $debug->endTrace();
    onCnxException($config, $rep, $e, 'on_cnx_exception');

    die;
}
//execution de l'action
try{
    $retExec = $client->execute($idaction, $params);
    $rep->status = 'ok';

    if (!empty($retExec)){ //transformation du retour
        $rep->result = transformeRetour($config, $retExec);
    }
}
catch (\Exception $e)
{
    $client->bDisconnect();
    $debug->endTrace();
    onCnxException($config, $rep, $e, 'on_action_exception');
    die;
}

//déconnexion
try {
    $client->bDisconnect();
}
catch (\Exception $e)
{
    //on fait rien sur la deconnection
}

$debug->endTrace();
//envoi du retour
envoiRetour($config, $rep);


