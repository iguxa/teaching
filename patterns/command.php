<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

abstract class Command
{
    abstract public function execute(CommandContext $context);
}

class LoginCommand extends Command
{
    public function execute(CommandContext $context)
    {
        $manager = Registry::getAccessManager();
        $user = $context->get('username');
        $pass = $context->get('pass');
        $user_obj = $manager->login($user, $pass);
        if (is_null($user_obj)) {
            $context->setError($manager->getError());
            return false;
        }
        $context->addParam("user", $user_obj);
        return true;

    }

}

class CommandContext
{
    private $params = [];
    private $error = '';

    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    public function addParam($key, $val)
    {
        $this->params[$key] = $val;
    }

    public function get($key)
    {
        if (isset($this->params[$key])) {
            return $this->params[$key];
        }
        return null;
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }
}