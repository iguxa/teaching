<?php
abstract class Question {
    protected $prompt;
    protected $marker;

    public function __construct($prompt, Marker $marker)
    {
        $this->marker = $marker;
        $this->prompt = $prompt;
    }
    public function mark($response)
    {
        return $this->marker->mark($response);
    }
}

class TextQuestion extends Question {
    //текстовые запросы
};
class AVQuestion extends Question {
    //агдио и видео запросы
};

abstract class Marker {
    protected $test;

    public function  __construct($test)
    {
        $this->test  = $test;
    }
    abstract public function mark($response);
}

class MarkLogicMarker extends Marker {
    private $engine;

    public function __construct($test)
    {
        parent::__construct($test);
        //$this->engine = new MarkParse($test);
    }

    public function mark($response)
    {
        //return$this->engine->evaluate($response);
        return true;
    }

}
class MatchMarker extends Marker {
    public function mark($response)
    {
        return ($this->test == $response);
    }
}
class RegexMarker extends Marker {
    public function mark($response)
    {
        // TODO: Implement mark() method.
        return (preg_match($this->test,$response));
    }

}

$markers
    =
    array ( new RegexMarker ( " /П . ть / " ) ,
        new MatchMarker ( "Пять " ) ,
new MarkLogicMarker ( ' $ input equal s " Пять " ' )
) ;

echo '<pre>';
foreach ( $markers as $marker ) {
    print get_class ( $marker ) . " \ n " ;
    $question = new TextQuestion ( " Сколько лучей у Кремлевской звезды ? " , $marker
    ) ;
    foreach ( array ( "Пять " , "Четыре " ) as $response ) {
        print "правильно : $response : " ;
        if ( $question->mark( $response) )
print " Правильно ! \n " ;
else {
    print " не правильно: $response : " ;

}
    }
}
