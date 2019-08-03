<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
abstract class Unit{
    protected $depth = 0;

    /**
     * @return int
     */
    public function getDepth(): int
    {
        return $this->depth;
    }

    /**
     * @param int $depth
     */
    public function setDepth(int $depth)
    {
        $this->depth = $depth;
    }

    public function accept(ArmyVisitor $visitor)
    {
        $method = 'visit'.get_class($this);
        $visitor->$method($this);
    }


    public function getComposite()
    {
        return null;
    }
    abstract function bombardStrength();

}
abstract class CompositeUnit extends Unit{
    protected $units = [];

    public function getComposite()
    {
        return $this;
    }
    public function units()
    {
        return $this->units;
    }
    public function addUnit(Unit $unit)
    {
        foreach ($this->units as $thisunit){
            if($unit === $thisunit){
                return;
            }
        }
        $unit->setDepth($this->depth+1);
        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit)
    {
        $this->units = array_diff($this->units,array($unit),function ($a,$b){
            return ($a === $b) ? 0 : 1;
        });
    }
    public function accept(ArmyVisitor $visitor)
    {
        parent::accept($visitor);
        foreach ($this->units as $thisunit) {
            $thisunit->accept($visitor);
        }
    }
}
abstract class ArmyVisitor {
    abstract public function visit(Unit $node);
    public function visitArcher(Archer $node)
    {
        $this->visit($node);
    }
    public function visitCavalary(Cavalary $node)
    {
        $this->visit($node);
    }
    public function visitLaserCannonUnit(LaserCannonUnit $node)
    {
        $this->visit($node);
    }
    public function visitTroopCarrierUnit(TroopCarrierUnit $node)
    {
        $this->visit($node);
    }
    public function visitArmy(Army $node)
    {
        $this->visit($node);
    }
}
class TextDumpArmyVisitor extends ArmyVisitor {
    private $text = '';
    public function visit(Unit $node)
    {
        $txt = '';
        $pad = 4*$node->getDepth();
        $txt .= sprintf("%{$pad}s","");
        $txt .= get_class($node).': ';
        $txt .= 'Огневая мощь: '.$node->bombardStrength()."<br>";
        $this->text .= $txt;
    }

    public function getText()
    {
        return $this->text;
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
    protected $units = [];
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

    /**
     * @return array
     */
    public function getUnits(): array
    {
        var_dump($this->units);

        return $this->units;
    }

}
$main_army = new Army();
$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannonUnit());
var_dump($main_army->getUnits());

$textdump  =new TextDumpArmyVisitor();
$main_army->accept($textdump);
print $textdump->getText();
