<?php

namespace App\entity;

use App\Kernel;

/**
 * Class Article
 * @package App\Entity
 */
class Article
{
    /**get last articles
     * @return array
     */
    public static function getLast(){
        $sql = 'SELECT * FROM articles';
        $datas = Kernel::getDatabase()->query($sql, __CLASS__);

         return $datas;
    }
    public function __get($name)
    {
        $mth = 'get'. ucfirst($name);
        $this->$name  = $this->$mth;

        return $this->$name;
    }

    public function getUrl(){
        return 'index.php?p=article&id=' .$this->id;
    }
    public function getExtrait(){
        $html = "<p>$this->titre</p>";
        $html .= '<p>' . $this->contenu . ' ... </p>';
        $html .= '<p> <a href="' .$this->getUrl() .'">voir la suite </a></p>';

        return $html;
    }
}