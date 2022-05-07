<?php

class DbConfig{

    private $user = '';
    private $password = '';
    private $dbName = '';
    private $host = '';

    public function getUser(){
        return $this->user;
    }
    public function setUser($user){
        if($user == ''){
            echo 'user no puede estar vacío';
        }
        else{
            $this->user = $user;
        }
    }
    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password;
    }
    public function getDbPassword(){
        return $this->password;
    }

    public function getDbName(){
        return $this->dbName;
    }

    public function setDbName($dbName){
        $this->dbName = $dbName;
    }
    public function getHost(){
        return $this->host;
    }

    public function setHost($host){
        $this->host = $host;
    }

    public function connect(){
        try{
            $dsn = "mysql:host=$this->host;dbname=$this->dbName";
            $connection = new PDO($dsn, $this->user, $this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conexión exitosa";
            return $connection;
        }catch(PDOException $exception){
            echo $exception->getMessage();
        }
    }
}