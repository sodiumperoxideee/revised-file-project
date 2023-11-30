<?php

require_once 'database.php';

Class Vets{
    //attributes

    public $vetID;
    public $vetName;
    public $email;
    public $almaMater;
    public $degree;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO vets (vetName, email, almaMater, degree) VALUES 
        (:vetName, :email, :almaMater, :degree);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':vetName', $this->vetName);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':almaMater', $this->almaMater);
        $query->bindParam(':degree', $this->degree);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE vets SET vetName=:vetName, email=:email, almaMater=:almaMater, degree=:degree WHERE vetID = :vetID;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':vetName', $this->vetName);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':almaMater', $this->almaMater);
        $query->bindParam(':degree', $this->degree);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM vets WHERE vetID = :vetID;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':vetID', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show(){
        $sql = "SELECT * FROM vets ORDER BY vetName ASC;";
        $query=$this->db->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
}

?>