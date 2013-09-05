<?php

class AutoLoad {

    private static $_lastLoadedFilename;

    public static function loadClass($className){
        $pathParts = explode('_', $className);
        self::$_lastLoadedFilename = implode(DIRECTORY_SEPARATOR, $pathParts) . '.php';
        require_once(self::$_lastLoadedFilename);
    }

    public static function loadPackagesAndLog($className)
    {
        self::loadClass($className);
        printf("Class %s was loaded from %sn", $className, self::$_lastLoadedFilename);
    }

}