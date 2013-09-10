<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kirill
 * Date: 05.09.13
 * Time: 13:28
 * To change this template use File | Settings | File Templates.
 */

class App_Models_Personage extends App_Core_Model {

    private $name;
    private $health;
    private $attack;
    private $deffence;
    private $experience;

    public function __construct(){
        $this->name='kir';
        $this->attack= 10;
        $this->health= 10;
        $this->deffence= 10;
        $this->experience = 100;
    }


    public function playerInfo(){
        return array(
            'name' => $this->name,
            'health'=> $this->health,
            'attack'=> $this->attack,
            'deffence' => $this->deffence,
            'experience' => $this->experience
        );
    }

}