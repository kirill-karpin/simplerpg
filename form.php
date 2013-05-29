<?php   
include './app/bootstrap.php';

//$mob = CharactersFactory::createOrk();
//$player = CharactersFactory::createPlayer('kirill');
//$t=$mob->arrayDumpCharacter();
//$p=$player->arrayDumpCharacter();
//$log = "1231223" + rand(1000, 10000);
//$arr=array(
//    'ch1' => $t,
//    'ch2' => $p,
//    'log' => $log
//);
////echo json_encode($arr);


$routes = explode('/', $_SERVER['REQUEST_URI']);
var_dump($routes);


