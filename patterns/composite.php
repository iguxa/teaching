<?php
abstract class Unit{
    public function getComposite()
    {
        return null;
    }
    abstract function bombardStrength();

}
abstract class CompositeUnit extends Unit{
    private $units = [];

    public function getComposite()
    {
        return $this;
    }
    protected function units()
    {
        return $this->units;
    }
    public function addUnit(Unit $unit)
    {
        if(in_array($unit,$this->units,true)){
            return;
        }
        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $this->units = array_diff($this->units,array($unit),function ($a,$b){
            return ($a === $b) ? 0 : 1;
        });
    }
}
class UnitException extends Exception{};

class Archer extends Unit{
    public function bombardStrength()
    {
        return 4;
    }
}

class LaserCannonUnit extends Unit{
    public function bombardStrength()
    {
        return 44;
    }
}

class Army extends CompositeUnit {
    private $units = [];
    private $armies = [];

    public function addArmy(Army $army)
    {
        array_push($this->armies,$army);
    }

    public function bombardStrength()
    {
        $ret = 0;
        foreach ($this->units as $unit){
            $ret += $unit->bombardStrength();
        };
        return $ret;
    }
}