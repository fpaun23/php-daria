<?php

include_once('db/config.php');
include_once('db/DbConnectionInterface.php');

class MysqliConnectionClass implements DbConnectionInterface
{
    public function __construct()
    {
        $this->connect();
    }
    public function connect()
    {
        try {
            $mysql = new mysqli(Config::HOST, Config::USER, Config::PASSWORD, Config::DATABASE);
            return $mysql;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    public function get(string $tableName):array
    {
        $query ="SELECT * FROM " . $tableName;
        $result =$this->connect()->query($query);
        return $result->fetch_all();
    }
    public function update(string $tableName, array $updateData):bool
    {
        $query="UPDATE $tableName SET `email`='$updateData[0]' WHERE `id_cus`=$updateData[1]";
        $result=$this->connect()->query($query);
        return $result;
    }

    public function insert(string $tableName, array $insertData):array
    {
        $query="INSERT INTO $tableName (`email`) VALUES ('$insertData[0]')";
        $result=$this->connect()->query($query);
        return $result;
    }

    public function delete($tableName, int $recordId):bool
    {
        $query="DELETE FROM $tableName WHERE `id_cus`=$recordId";
        $result=$this->connect()->query($query);
        return $result;
    }
}
