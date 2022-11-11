<?php

require_once('PDOConnectionClass.php');


class CustomerControllerClass
{
    public function __construct()
    {
        $this->tb=$tb='customer';
    }

    public function getCustomer(string $tableName):array
    {
        $query ="SELECT * FROM . $tableName";
        $result = $this->tb->$query($tableName);
        //$result->execute($tableName);
        return $result->fetchAll();
    }
}
