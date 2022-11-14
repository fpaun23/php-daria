<?php

include_once('db/config.php');
include_once('db/DbConnectionInterface.php');

global $result;
class PDOConnectionClass implements DbConnectionInterface
{
    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {
        try {
            $this->conn = new PDO('mysql:host=' .Config::HOST. '; dbname=' .Config::DATABASE, Config::USER, Config::PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'connection succesfully';
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function get(string $tableName):array
    {
        $query ="SELECT * FROM " . $tableName;
        $result =$this->conn->query($query);
        return $result->fetchAll();
    }

    public function update(string $tableName, array $updateData):bool
    {
        $query="UPDATE $tableName SET `email`='$updateData[0]' WHERE `id_cus`=$updateData[1]";
        $result=$this->conn->query($query);
        return(bool) $result->rowCount();
    }

    public function insert(string $tableName, array $insertData):array
    {
        $query="INSERT INTO $tableName (`email`) VALUES ('$insertData[0]')";
        $result=$this->conn->query($query);
        
        return $this->conn->lastInsertId();
    }

    public function delete($tableName, int $recordId):bool
    {
        $query="DELETE FROM $tableName WHERE `id_cus`=$recordId";
        $result=$this->conn->query($query);
        
        return(bool) $result->rowCount();
    }
}
