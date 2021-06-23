<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {

        $sql = "select * from {$table}";

        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchALL(PDO::FETCH_CLASS);
        }catch (Exception $e) {
            die($e->getMessage());
        }

    }
    public function insert($tables,$parametros){

        $sql= "INSERT INTO `{$tables}`(`name`) VALUES ('{$parametros['name']}')";
        
        try{
         $stmt = $this->pdo->prepare($sql);
         $stmt->execute();
 
     }catch (Exception $e) {
         die($e->getMessage());
     }
 
     }
     public function delete($table, $id)
    {
        $sql = "delete from {$table} where id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
