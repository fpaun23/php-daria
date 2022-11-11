<?php

require_once('PDOConnectionClass.php');
//include_once('PDOConnectionClass.php');

class CustomerControllerClass
{
    protected $tableName='customer';
    protected $conn;

    public function __construct(string $tableName)
    {
        $this->tableName=$tableName;
        $this->conn=new PDOConnectionClass();
    }
    // public function config(string $cuscon)
    // {
    //     $cuscon=new PDOConnectionClass();
    //     $cuscon->connect();
    // }
    public function getCustomer(string $tableName):array
    {
        $cuscon=new PDOConnectionClass();
        $cuscon->connect();
        return $this->$cuscon->get($this->tableName);
    }
    public function insertCustomer(string $tableName, array $insertData):int
    {
        $cuscon=new PDOConnectionClass();
        $cuscon->connect();
        return $this->$cuscon->insert($this->tableName, $insertData);
    }
    public function updateCustomer(string $tableName, array $updateData):bool
    {
        $cuscon=new PDOConnectionClass();
        $cuscon->connect();
        return $this->$cuscon->update($this->tableName, $updateData);
    }
    public function deleteCustomer(string $tableName, int $customerId):bool
    {
        $cuscon=new PDOConnectionClass();
        $cuscon->connect();
        return $this->$cuscon->delete($this->tableName, $customerId);
    }
}
