<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kirill
 * Date: 05.09.13
 * Time: 13:28
 * To change this template use File | Settings | File Templates.
 */

class App_Models_Personage extends App_Core_Model {

    private $characterParams;

    public function __construct(){
        $this->characterParams = array('name' => 'testCharacter',
                                       'health'=>10,
                                       'defence'=>10,
                                       'attack'=>10,
                                       'experience'=>0
        );
    }

    public function getCharacterParams(){

         return $this->characterParams;
    }
}