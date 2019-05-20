<?php
/**
 * Created by PhpStorm.
 * User: Brahim
 * Date: 20/05/2019
 * Time: 20:22
 */

namespace App;
use \PDO;

/**
 * Class DataBase
 * @package App
 */
class DataBase
{
    private $dbName;
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $pdo;

    /**
     * DataBase constructor.
     * @param $dbName
     * @param string $dbPass
     * @param string $dbUser
     * @param string $dbHost
     */
    public function __construct($dbName, $dbPass = 'root', $dbUser = 'root', $dbHost = 'localhost')
    {
        $this->dbHost =  $dbHost;
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
    }

    /**
     * @return PDO
     */
    private function getPDO(){
        if ($this->pdo == null){
            $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo  =$pdo;
        }
            return $this->pdo;
    }

    /**
     * @param $statement
     * @param $class_name
     * @return array
     */
    public function query($statement , $class_name)
    {
        $req = $this->getPDO()->query($statement);
        $data  = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $data;
    }
}