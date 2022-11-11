<?php

require_once('db/PDOConnectionClass.php');

class CustomerControllerClass
{
    protected $tableName = 'customer';
    protected $cuscon;

    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;
        $this->cuscon = new PDOConnectionClass();
    }

    public function getCustomer():array
    {
        return $this->cuscon->get($this->tableName);
    }
    public function insertCustomer(array $insertData):int
    {
        return $this->cuscon->insert($this->tableName, $insertData);
    }
    public function updateCustomer(array $updateData):bool
    {
        return $this->cuscon->update($this->tableName, $updateData);
    }
    public function deleteCustomer(int $customerId):bool
    {
        return $this->cuscon->delete($this->tableName, $customerId);
    }
}
