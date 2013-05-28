<?php
require_once('./app/Run.php');
require_once('./app/CharacterModel.php');
require_once('./app/CharactersFactory.php');
require_once('./app/Messages.php');
require_once('./app/Combat.php');
require_once('./app/AI.php');
require_once('./app/DB.php');
//Создаем таблицы Таблицы
    DB::createPlayersTable();
    DB::createMobsTable();
    DB::createCombatsTable();
//Начальные Записи
DB::createMob('Ork', 7, 2, 10);
DB::createMob('Troll', 3, 3, 10);
DB::createPlayer('kirill');
DB::createPlayer('anon delone');
DB::createPlayer('alone delone');
