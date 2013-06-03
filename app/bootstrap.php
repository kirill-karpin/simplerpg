<?php
ini_set('display_errors', 1);
require_once('AutoLoad.php');
spl_autoload_register(array('Autoload', 'loadClass'));



App_Core_Route::start();