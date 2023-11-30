<?php

// Include the database configuration file
require_once("database.php");

// Class definition for signupConfig
class signupConfig{

    // Properties
    private $id;
    private $firstName;
    private $lastName;
    private $age;
    protected $dbCnx; // Database connection

    // Constructor with default values
    public function __construct($id=0, $firstName="", $lastName="", $age=0){

        // Initialize object properties
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

        // Establish a PDO database connection using constants from the 'database.php' file
        $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER,DB_PW,[ PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    // Setter methods
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

    // Getter methods
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

    // Method to insert data into the 'users' table
    public function insertData(){
        try {
            $stm = $this->dbCnx->prepare("INSERT INTO users(firstName,lastName,age) values(?,?,?)");
            $stm->execute([$this->firstName, $this->lastName, $this->age]);
            echo"<script> alert('Data saved successfully'); document.location='index.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // Method to fetch all records from the 'users' table
    public function fetchAll(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM users");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // Method to fetch a single record from the 'users' table based on the ID
    public function fetchOne(){
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM users WHERE id=?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // Method to update a record in the 'users' table
    public function update(){
        try {
            $stm = $this->dbCnx->prepare("UPDATE users SET firstName=? , lastName=? , age=? WHERE id = ? ");
            $stm->execute([$this->firstName, $this->lastName, $this->age, $this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // Method to delete a record from the 'users' table based on the ID
    public function delete(){
        try {
            $stm = $this->dbCnx->prepare("DELETE FROM users WHERE id=?");
            $stm->execute([$this->id]);
            echo "<script>alert('Data deleted successfully'); document.location='index.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}

// End of class definition

?>
