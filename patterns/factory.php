<?php
/**
 * Created by PhpStorm.
 * User: tsybykov
 * Date: 24.04.19
 * Time: 14:34
 */

/*Interface CommsManager{
    public function getHeaderText();
    public function getAppEncoder();
    public function getTtdEncoder();
    public function getContactEncoder();
    public function getFooterText();
}
class BloggsCommsManager implements CommsManager{
    public function getHeaderText()
    {
        return "BloggsCal верзний колонтиул \n";
    }
    public function getAppEncoder()
    {
        return new BloggsAppEncoder();
    }
    public function getTtdEncoder()
    {
        // TODO: Implement getTtdEncoder() method.
        return new BloggsTdEncoder();
    }
    public function getContactEncoder()
    {
        // TODO: Implement getContactEncoder() method.
        return BloggerContactEncoder();
    }
    public function getFooterText()
    {
        // TODO: Implement getFooterText() method.
        return 'BloggsCal нижний колонтитул \n';
    }
}*/

/*interface AppEncoder{
    public function encode();
}

class BloggsApptEncoder implements AppEncoder{
    public function encode()
    {
        // TODO: Implement encode() method.
        return "Данный о встрече закодированы в формате BloggsCal \n";
    }
}
class MegaAppEncoder implements AppEncoder {
    public function encode()
    {
        // TODO: Implement encode() method.
        return "Данный о встрече закодированы в формате MegaCal \n";
    }
}
class CommsManager{
    const BLOGGS = 1;
    const MEGA = 2;
    private $mode = 1;

    public function __construct($mode)
    {
        $this->mode = $mode;
    }

    public function getHeadText()
    {
        switch ($this->mode){
            case (self::MEGA):
                return "MegaCal верхний колонтиул \n";
            default:
                return "Bloggs верхний колонтиул \n";
        }
    }

    public function getApptEncoder()
    {
        switch ($this->mode){
            case (self::MEGA):
                return new MegaAppEncoder();
            default:
                return new BloggsApptEncoder();
        }
    }
}
$comms = new CommsManager(CommsManager::BLOGGS);
$apptEncoder = $comms->getApptEncoder();
var_dump($apptEncoder);*/

interface ApptEncoder{
    public function encode();
}

interface CommsManager{
    public function getHeaderText();
    public function getApptEncder();
    public function getFooterText();
}

class BloggesApptEncoder implements ApptEncoder{
    public function encode()
    {
        return "Данный о встрече закодированы в формате BloggsCal \n";
    }
}

class BloggsCommsManager implements CommsManager{
    public function getHeaderText()
    {
        // TODO: Implement getHeaderText() method.
        return "BloggsCal врехний колонтитул \n";
    }
    public function getApptEncder() :BloggesApptEncoder
    {
        // TODO: Implement getApptEncder() method.
        return new BloggesApptEncoder();
    }
    public function getFooterText()
    {
        // TODO: Implement getFooterText() method.
        return "BloggsCal нижний колонтитул \n";
    }
}

$mgr = new BloggsCommsManager();
echo $mgr->getHeaderText().'<br>';
echo $mgr->getApptEncder()->encode().'<br>';
echo $mgr->getFooterText().'<br>';
