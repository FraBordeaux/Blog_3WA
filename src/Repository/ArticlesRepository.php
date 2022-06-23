<?php

require_once dirname(__DIR__, 2) . "/lib/Repository/AbstractRepository.php";
require_once dirname(__DIR__, 2) . "/src/model/Articles.php";

class ArticlesRepository extends AbstractRepository
{


    /*
    * @return array[null]
    */

    public function findAll() : ?array

    {
        $query = "SELECT * FROM article; ";
        $class = "Article";
        return ($this->executeQuery($query, $class));
    }

}

