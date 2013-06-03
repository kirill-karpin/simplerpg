<?php
require_once('./App/Run.php');
require_once('./App/CharacterModel.php');
require_once('./App/CharactersFactory.php');
require_once('./App/Messages.php');
require_once('./App/Combat.php');
require_once('./App/AI.php');
require_once('./App/DB.php');
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
