<?php
class CharacterModel {
    private $id;
    private $name;
    private $attack;
    private $defence;
    private $health;
    private $locationX;
    private $locationY;
    private $hitposition;
    private $blockposition;
    private $combatID;
    //private $isAlive;


    public function __construct($arrayInfo) {
        $this->id = $arrayInfo['id'];
        $this->name    = $arrayInfo['name'];
        $this->attack  = $arrayInfo['attack'];
        $this->defence = $arrayInfo['defence'];
        $this->health  = $arrayInfo['health'];
        $this->hitposition = 0;
        $this->blockposition = 0;
        $this->combatID = NULL;
        //$this->isAlive = true;

    }


    public function getHealth() {
        return $this->health;
    }

    public function getName() {
        return $this->name;
    }

    public function getDefence(){
        return $this->defence;
    }
    public function getAttack() {
        return $this->attack;
    }

    public function setHitPosition($hitPosition){
        $this->hitposition = $hitPosition;
    }

    public function setBlockPosition($blockPosition){
        $this->blockposition = $blockPosition;
    }

    public function getHitPosition (){
        return $this->hitposition;
    }

    public function getBlockPosition () {
        return $this->blockposition;

    }

    public function setCombatID($combatid){
        DB::setPlayerParam($this->name,'combatID', $combatid);
    }

    public function getCombatID(){
        $arr = DB::getInfoPlayer($this->name);
        $combatid = $arr['combatID'];
        return $combatid;
    }

    // Изменения местоположения
    public function setLocation ($moveX, $moveY) {


    }

    public function dumpCharacter() {
        echo "id ". $this->id . "<br/> \r\n";
        echo "Name " . $this->name . "<br/>\r\n";
        echo "Attack " . $this->attack . "<br/>\r\n";
        echo "Defence " . $this->defence . "<br/>\r\n";
        echo "Health " . $this->health . "<br/>\r\n";

    }

    public function arrayDumpCharacter(){
        $arr = array(
            'id' =>$this->id,
            'name'=> $this->name,
            'attack'=> $this->attack,
            'defence'=> $this->defence,
            'health'=> $this->health
        );
        return $arr;
    }

    public function setHealth($takedamage) {
        if ($this->getHealth() > 0) {
            $this->health=$this->health - $takedamage;
            DB::setPlayerParam($this->name, 'health', $this->health);

        } else {
            $this->health = 0;
            $this->isAlive = false;
            DB::setPlayerParam($this->name, 'health', $this->health);
            //DB::setPlayerParam($this->name, 'isAlive', $this->isAlive);
        }

    }
}