<?php
class DB {

    protected static $_instance;


    static function connectDB (){
        $connect = new PDO("sqlite:SimpleRpgDb.s3db");
        return $connect;
    }

    static function getInfoPlayer ($playerName){
        $db = DB::connectDB();
        $sql = 'SELECT id, name, attack, defence, health FROM players WHERE name="'.$playerName.'";';
        $st = $db->query($sql);
        $result = $st->fetch(PDO::FETCH_ASSOC);
        return $result;

    }

    static function getInfoMob ($mobName){
       $db = DB::connectDB();
       $sql = 'SELECT id, name, attack, defence, health FROM mobs WHERE name="'.$mobName.'";';
       $st = $db->query($sql);
       $result = $st->fetch(PDO::FETCH_ASSOC);
       return $result;

    }

    static function setPlayerParam ($name, $param, $value){
        $db = DB::connectDB();
        $sql = 'UPDATE players
        SET '. $param. ' = '. $value .'
        WHERE name = "' .$name. '"';
        $db->exec($sql);

    }

    static function setMobsParam ($name, $param, $value){
        $db = DB::connectDB();
        $sql = 'UPDATE mobs
        SET '. $param. ' = "'. $value .'"
        WHERE name = "' .$name. '"';
        $db->exec($sql);

    }


     static function createPlayersTable (){

         $db = DB::connectDB();
         $sql = 'CREATE TABLE players (
        id INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT,
        name TEXT  UNIQUE NULL,
        health INTEGER  NULL,
        defence INTEGER  NULL,
        attack INTEGER  NULL,
        combatID INTEGER NULL)';


        $db->exec($sql);
    }

    static function createCombatsTable (){
        $db = DB::connectDB();
        $sql = 'CREATE TABLE combatTable (
        id INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT,
        combat INTEGER  NULL,
        mebmer INTEGER  NULL,
        membertype TEXT NULL)';

        $db->exec($sql);
    }


    static  function createMobsTable(){

        $sql = 'CREATE TABLE mobs (
        id INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT,
        name TEXT  UNIQUE NULL,
        health INTEGER  NULL,
        defence INTEGER  NULL,
        attack INTEGER  NULL,
        combatID INTEGER NULL)';

        $db = DB::connectDB();
        $db->exec($sql);
    }

    static function createPlayer ($playerName) {
        // создание персонажа доступно при регистрации
        $sql = 'INSERT INTO players
        (name, health, defence, attack)
        VALUES
        ("'.$playerName .'", 10, 5, 4)';
        $db = DB::connectDB();
        $db->exec($sql);
    }

    static function createMob ($mobName, $health, $defence,$attack) {
        // создание мобов дизайнерам, лол.
        $sql = 'INSERT INTO mobs
        (name, health, defence, attack)
        VALUES
        ("'.$mobName .'",'.$health.','.$defence.','.$attack .')';
        $db = DB::connectDB();
        $db->exec($sql);
    }

}