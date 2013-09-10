<?php

class AI {

   public static function PositionAi () {
       $position = array("head","body", "feet");

       return $position[rand(0,2)];
    }
}