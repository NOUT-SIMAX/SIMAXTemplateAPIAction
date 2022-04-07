<?php


namespace NOUT;

class DebugTrace
{
    protected $_fic;
    protected $_active=false;
    protected $_host='127.0.0.1';
    protected $_port=8052;
    protected $_filename = '';
    protected $_uniqueid;

    public function __construct($active=false)
    {
          $this->_active = $active;
          $this->_uniqueid = uniqid('req-');

          $time = new \DateTime();
          $this->_filename = './trace_debug_'.( $time->format('Ymd')).'.txt';
    }

    /**
     * @param string $host
     * @param int $port
     * @return DebugTrace
     */
    public function setHostAndPort($host, $port)
    {
        $this->_host = $host;
        $this->_port = $port;

        $this->writeTrace('noutonline: '.$this->_host.':'.$this->_port);
        return $this;
    }

	public function isActive()
    {
	    return $this->_active;
    }

    public function startTrace()
    {
        if (!$this->_active){
            return ;
        }

        $this->_fic = fopen($this->_filename,"a");
        $this->writeTrace('------------------- debut debug -----------------');
        $this->writeTrace('input: ' .file_get_contents('php://input'));
    }

    public function endTrace()
    {
        if (!$this->_active || !isset($this->_fic)){
            return ;
        }

        $this->writeTrace('#################### fin debug ###################');
        fclose($this->_fic);
        $this->_fic = null;
    }

    public function writeTrace($trace)
    {
        if (!$this->_active || !isset($this->_fic)){
            return ;
        }

        fwrite($this->_fic, $this->_uniqueid);
        fwrite($this->_fic, date('Y-m-d H:i:s'));
        fwrite($this->_fic, "\t");
        fwrite($this->_fic, $trace);
        fwrite($this->_fic, "\r\n");
    }
}
