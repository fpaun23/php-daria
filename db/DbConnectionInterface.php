<?php

interface DbConnectionInterface
{
    public function connect();
    public function get(string $tableName):array;
    public function update(string $tableName, array $updateData):bool;
    public function insert(string $tableName, array $insertData):array;
    public function delete($tableName, int $recordId):bool;
}
