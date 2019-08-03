<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Registry {
    private static $instance;
    private $request;

    private function __construct()
    {
    }

    public static function instance()
    {
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getRequest()
    {
        if(is_null($this->request)){
            $this->request = new Request();
        }
        return $this->request;
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }
}

class Request {
    private $reg = 'Request';
};

$req = Registry::instance();
$req->setRequest(new Request());

$req = Registry::instance();
var_dump($req->getRequest());