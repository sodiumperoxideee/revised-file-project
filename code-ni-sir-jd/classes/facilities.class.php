<?php

require_once 'database.php';

Class Facilities{
    //attributes

    public $facilitiesID;
    public $facilitiesName;
    public $description;
    public $availability;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO facilities (facilitiesName, description, availability) VALUES 
        (:facilitiesName, :description, :availability);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':facilitiesName', $this->facilitiesName);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':availability', $this->availability);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE facilities SET facilitiesName=:facilitiesName, description=:description, availability=:availability WHERE facilitiesID=:facilitiesID;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':facilitiesName', $this->facilitiesName);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':availability', $this->availability);
        $query->bindParam(':facilitiesID', $this->facilitiesID);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM facilities WHERE facilitiesID = :facilitiesID;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':facilitiesID', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show(){
        $sql = "SELECT * FROM facilities ORDER BY facilitiesName ASC;";
        $query=$this->db->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

}

?>