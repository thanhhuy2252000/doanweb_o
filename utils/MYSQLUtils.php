<?php

class MYSQLUtil
{
    private $servername;
    private $username;
    private $password;
    private $myDB;
    private static $conn;
    public function __construct()
    {
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->myDB="web";   
        $this->connectDB();

    }
    public function __destruct()
    {
        $this->servername="";
        $this->username="";
        $this->password="";
        $this->myDB="";
        self::$conn == NULL;
    }

    public function connectDB()
    {
        try {
            self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->myDB", $this->username, $this->password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        } 
    }
    public function disConnectDB(){
      
        self::$conn==NULL;
    }

   
    public function insertData($query, $param = array())
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
    }

    public function getAllData($query)
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getData($query, $param = array())
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteData($query, $param = array())
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        return $stmt->rowCount();
    }
    public function updateData($query, $param = array())
    {
        $stmt = self::$conn->prepare($query);
        $stmt->execute($param);
        return $stmt->rowCount();
    }

    //Product
    
    
    
   
}
