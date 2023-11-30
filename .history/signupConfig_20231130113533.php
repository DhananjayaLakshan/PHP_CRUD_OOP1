<?php

require_once("database.php");

class signupConfig{

    private $id;
    private $firstName;
    private $lastName;
    private $age;
    protected $dbCnx;

    public function __construct($id=0, $firstName="", $lastName="", $age=0){

        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PW,[ PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setFistName($firstName){
        $this->firstName = $firstName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getId(){
        return $this->id;
    }

    public function getFistName(){
        return $this->firstName;
    }

    public function getLastName(){
        return $this->lastName;
    }






}