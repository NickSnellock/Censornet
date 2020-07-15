<?php
namespace NickSnellock\Services;

use PDO;

class Database
{
   private PDO $dbh;

    public function __construct()
    {
        $this->dbh =  new PDO(
            "pgsql:dbname=censornet;host=censornet_db_1",
            'postgres',
            'postgres'
        );
    }

    public function getPdo(): PDO
    {
        return $this->dbh;
    }
}