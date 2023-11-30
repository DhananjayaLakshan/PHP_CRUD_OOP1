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
    
    public function getAge(){
        return $this->age;
    }



    public function insertData(){
        try {
            
            $stm = $this->dbCnx->prepare("INSERT INTO users(firstName,lastName,age) values(?,?,?)");
            $stm->execute([$this->firstName, $this->lastName, $this->age]);
            echo"<script> alert('data saved successfully'); document.location='allData.php'</script>";

            
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function fetchAll(){
        try {
            
            $stm = $this->dbCnx->prepare("SELECT * FROM users");
            $stm->execute();
            return $stm->fetchAll();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function fetchOne(){
        try {
            $stm = $this->dbCnx->prepare("SELECT FROM users WHERE id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(){
        try {
            
            $stm = $this->dbCnx->prepare("UPDATE users SET firstName=? , lastName=? , age=? WHERE id = ? ");
            $stm->execute([$this->firstName, $this->lastName, $this->age, $this->id]);

        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(){
        try {
            $stm = $this->dbCnx->prepare("DELETE FROM users WHERE id=?");
            $stm->execute($this->id);
            echo"<script> alert('data deleted successfully'); document.location='allData.php'</script>";


        } catch (Exception $e) {
            return $e->getMessage();
        }
    }












}