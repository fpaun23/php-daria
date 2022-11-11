<?php

class PDOConnectionClass
{

    private $host_name;
    private $dbname;
    private $username;
    private $password;
    protected $conn;

    public function connect()
    {
        $this->host_name = "localhost";
        $this->dbname = "mydatabase2";
        $this->username = "root";
        $this->password = "";

        try {
            $this->conn = new PDO("mysql:host=$this->host_name;dbname=$this->dbname", $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'connection succesfully';
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function getCustomer(string $tableName):array
    {
        $query ="SELECT * FROM . $tableName";
        $result =$this->conn->query($query);
        return $result->fetchAll();
    }

    public function update(string $tableName, array $updateData):bool
    {
        $query="UPDATE $tableName SET `email`='$updateData[0]' WHERE `id_cus`=$updateData[1]";
        $result=$this->conn->query($query);
        return(bool) $result->rowCount();
    }

    public function insert(string $tableName, array $insertData):bool
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
