<?php

require_once 'database.php';

Class Pet{
    //attributes

    public $pet_id;
    public $petname;
    public $type;
    public $breed;
    public $age;
    public $gender;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){ 
        $sql = "INSERT INTO pet (petname, type, breed, age, gender) VALUES 
        (:petname, :type, :breed, :age, :gender);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':petname', $this->petname);
        $query->bindParam(':type', $this->type);
        $query->bindParam(':breed', $this->breed);
        $query->bindParam(':age', $this->age);
        $query->bindParam(':gender', $this->gender);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE pet SET petname=:petname, type=:type, breed=:breed, age=:age, gender=:gender WHERE pet_id = :pet_id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':petname', $this->petname);
        $query->bindParam(':type', $this->type);
        $query->bindParam(':breed', $this->breed);
        $query->bindParam(':age', $this->age);
        $query->bindParam(':gender', $this->gender);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM pet WHERE pet_id = :pet_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':pet_id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show(){
        $sql = "SELECT * FROM pet ORDER BY petname ASC;";
        $query=$this->db->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    
}

?>