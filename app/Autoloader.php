<?php
namespace App;

/**
 * Class Autoloader
 */
class Autoloader
{
    /**
     * Autoloader constructor.
     * @param $className
     */
    static function autoLoad($className)
    {
        if(strpos($className, __NAMESPACE__.'\\') === 0){
            $className = str_replace(__NAMESPACE__, '', $className);
            $className = str_replace('\\', '/', $className);
            require __DIR__. $className. '.php';
        }
    }


    static function register(){
        spl_autoload_register([ __CLASS__, 'autoLoad']);
    }
}