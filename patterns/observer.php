<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


interface Observable {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

class Login implements Observable{
    private $observers = [];
    private $storage;
    private $status;

    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS = 2;
    const LOGIN_ACCESS = 3;

    public function __construct()
    {
        $this->observers = [];
        $this->status = rand(0,1);
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $this->observers = array_filter($this->observers,function ($a) use ($observer)
        {
            return (!($a === $observer));
        });
    }

    public function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }

    public function handleLogin($user,$pass,$ip)
    {
        $isvalid = false;
        switch ( rand(1,3) ){
            case 1:
                $this->setStatus(self::LOGIN_ACCESS,$user,$ip);
                $isvalid = true;
                break;
            case 2:
                $this->setStatus(self::LOGIN_WRONG_PASS,$user,$ip);
                $isvalid = false;
                break;
            case 3:
                $this->setStatus(self::LOGIN_USER_UNKNOWN,$user,$ip);
                $isvalid = false;
                break;
        };
        $this->notify();
        return $isvalid;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status,$a = null,$b = null)
    {
        $this->status = $status;
    }

}

interface Observer {
    public function update(Observable $observable);
}
abstract class LoginObserver implements Observer {
    private $login;

    public function __construct(Login $login)
    {
        $this->login = $login;
        $login->attach($this);
    }
    public function update(Observable $observable)
    {
        if($observable === $this->login){
            $this->doUpdate($observable);
        }
    }
    abstract public function doUpdate(Login $login);
}

class SecurityMonitor extends LoginObserver{
    public function doUpdate(Login $observable)
    {
        $status = $observable->getStatus();

        if($status[0] == Login::LOGIN_WRONG_PASS){
            //send post to system admin
            print __CLASS__.':Отправка почты системному администратору';
        }
    }

}
class GeneralLogger extends LoginObserver{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        //register connect in logs
        print __CLASS__.':Регистрация в системном журнале';
    }

}

class PartnershipTool extends LoginObserver{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        //проверка ip
        //отправка cookie
    }

}


$login = new Login();
//var_dump($login->attach(new SecurityMonitor()));
new SecurityMonitor($login);
new GeneralLogger($login);
new PartnershipTool($login);
