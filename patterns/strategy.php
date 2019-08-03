<?php
/**
 * Created by PhpStorm.
 * User: tsybykov
 * Date: 24.04.19
 * Time: 14:34
 */


abstract class CostStrategy{
    abstract function cost(Lesson $lesson);
    abstract function chargeType();
}

abstract class Lesson{
    private $duration;
    private  $cosStrategy;

    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->cosStrategy = $strategy;
    }
    public function cost()
    {
        return $this->cosStrategy->cost($this);
    }
    public function chargeType()
    {
        return $this->cosStrategy->chargeType();
    }
    public function getDuration()
    {
        return $this->duration;
    }
}

class TimedCostStrategy extends CostStrategy{
    public function cost(Lesson $lesson)
    {
        return $lesson->getDuration()*5;
    }
    public function chargeType()
    {
        return 'Почасовая оплата';
    }
}

class FixedCostStrategy extends CostStrategy{
    public function cost(Lesson $lesson)
    {
        return 30;
    }
    public function chargeType()
    {
        return 'Фиксировнная ставка';
    }
}





class Lecture extends Lesson{

}
class Seminar extends Lesson{

}
$lessons[] = new Seminar(4,new TimedCostStrategy());
$lessons[] = new Lecture(4,new FixedCostStrategy());
foreach ($lessons as $lesson){
var_dump( $lesson->cost());
var_dump( $lesson->chargeType());
};
