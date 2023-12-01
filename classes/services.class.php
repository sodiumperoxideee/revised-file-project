<?php

require_once 'database.php';

Class Services{
    //attributes

    public $service_id;
    public $service_name;
    public $description;
    public $price;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO services (service_name, description, price) VALUES 
        (:service_name, :description, :price);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':service_name', $this->service_name);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':price', $this->price);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE services SET service_name=:service_name, description=:description, price=:price WHERE service_id=:service_id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':service_name', $this->service_name);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':price', $this->price);
        $query->bindParam(':service_id', $this->service_id);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM services WHERE service_id = :service_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':service_id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show(){
        $sql = "SELECT * FROM services ORDER BY service_name ASC;";
        $query=$this->db->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

}

?>