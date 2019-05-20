<?php

namespace App;

/**
 * Class App
 * @package App
 */
class Kernel
{
    const DB_NAME = 'blog';
    const DB_USER = '';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';

    private static $database;

    public static function getDatabase(){
          if (self::$database === null){
              self::$database = new DataBase(
                  self::DB_NAME,
                  self::DB_PASS,
                  self::DB_USER,
                  self::DB_HOST
              );
          }
          return self::$database;
    }

}