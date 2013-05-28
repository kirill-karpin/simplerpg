<?php

class Messages {

    public static function combatMessage($character, $event, $info){
        // Сообщения боя.

        switch ($event){

            case 'block':
                echo $character->getName() . " blocked hit.\n";
                break;
            case 'attack':
                echo $character->getName() . " deal " . $info. " damage.\n";
                break;
            case 'win':
                echo $character->getName() . " is win.\n";
                break;
            case 'lose':
                echo $character->getName() . " is lose.\n";
                break;
            case 'dead':
                echo $character->getName() . " is dead.\n";
                break;

        }

    }

}