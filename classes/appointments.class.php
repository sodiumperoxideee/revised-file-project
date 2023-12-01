<?php

require_once 'database.php';

class Appointment{

    public $appointment_id;
    public $user_id;
    public $service_id;
    public $vetID;
    public $date;
    public $time;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }


    function add(){
        $sql = "INSERT INTO appointments (user_id, service_id, vetID, date, time) VALUES 
        (:user_id, :service_id, :vetID, :date, :time);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':user_id', $this->user_id);
        $query->bindParam(':service_id', $this->service_id);
        $query->bindParam(':vetID', $this->vetID);
        $query->bindParam(':date', $this->date);
        $query->bindParam(':time', $this->time);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM appointments WHERE appointment_id = :appointment_id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':appointment_id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show(){
        $sql = "SELECT * FROM appointments ORDER BY appointment_id ASC, lastname ASC;";
        $query=$this->db->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

}
?>