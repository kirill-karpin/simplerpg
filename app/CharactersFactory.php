<?php
// Constructor - $name, $attack, $defence, $health
class CharactersFactory {

    static function createTroll() {
        $arrayInfo = DB::getInfoMob('Troll');
        $troll = new CharacterModel($arrayInfo);
        return $troll;
    }

    static function createOrk() {
        $arrayInfo = DB::getInfoMob('Ork');
        $ork = new CharacterModel($arrayInfo);
        return $ork;
    }

    static function createPlayer($playerName) {
        $arrayInfo = DB::getInfoPlayer($playerName);
        $player = new CharacterModel($arrayInfo);
        return $player;
    }

}