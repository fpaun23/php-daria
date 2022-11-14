<?php


require_once('db/PDOConnectionClass.php');
require_once('db/MysqliConnectionClass.php');


class CustomerControllerClass
{
    private $logger;
    protected $tableName = 'customer';
    protected $cuscon;

    public function __construct(string $tableName, MysqliConnectionClass $logger)
    {
        $this->tableName = $tableName;
        //$this->cuscon = new PDOConnectionClass();
        //$this->sqlcon=new MysqliConnectionClass();
        $this->logger=$logger;
    }

    public function getCustomer():array
    {
        return $this->logger->get($this->tableName);
    }
    public function insertCustomer(array $insertData):array
    {
        return $this->logger->insert($this->tableName, $insertData);
    }
    public function updateCustomer(array $updateData):bool
    {
        return $this->logger->update($this->tableName, $updateData);
    }
    public function deleteCustomer(int $customerId):bool
    {
        return $this->logger->delete($this->tableName, $customerId);
    }
}
