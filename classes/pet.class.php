<?php

require_once 'database.php';

Class Pet{
    //attributes

    public $customerID;
    public $petID;
    public $petName;
    public $petBirthdate;
    public $petAge;
    public $petBreed;
    public $petType;
    public $sex;
    public $vet;
    public $service;
    public $petGender;
    public $petWeight;
    public $petColor;
    public $updated_at;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add($customerId) {
        $sql = "INSERT INTO pet (petName, petBirthdate, petBreed, petType, petGender, sex, customerID, service, vet) VALUES 
        (:petName, :petBirthdate,  :petBreed, :petType, :petGender, :sex, :customerId, :service, :vet);";
    
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':petName', $this->petName);
        $query->bindParam(':petBirthdate', $this->petBirthdate);
        $query->bindParam(':petBreed', $this->petBreed);
        $query->bindParam(':petType', $this->petType);
        $query->bindParam(':sex', $this->sex);
        $query->bindParam(':service', $this->service);
        $query->bindParam(':petColor', $this->vet);
        $query->bindParam(':customerId', $customerId);
    
        if($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function update(){
        $sql = "UPDATE pet SET petName=:petName,  petBirthdate=:petBirthdate, petAge=:petAge, petBreed=:petBreed, petType=:petType, petGender=:petGender, petWeight=:petWeight, petColor=:petColor WHERE petID=:petID;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':petName', $this->petName);
        $query->bindParam(':petBirthdate', $this->petBirthdate);
        $query->bindParam(':petAge', $this->petAge);
        $query->bindParam(':petBreed', $this->petBreed);
        $query->bindParam(':petType', $this->petType);
        $query->bindParam(':petGender', $this->petGender);
        $query->bindParam(':petWeight', $this->petWeight);
        $query->bindParam(':petColor', $this->petColor);
        $query->bindParam(':petID', $this->petID);
        if ($query->execute()){
            return true;
        }
         else {
            return false;
        }
    }

    function delete($petID)
    {
        $sql = "DELETE FROM pet WHERE petID = :petID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':petID', $petID);

        return $query->execute();
    }

    function fetch($record_id)
    {
        $sql = "SELECT * FROM pet WHERE petID = :petID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':petID', $record_id);
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function show()
    {
        $sql = "SELECT * FROM pet ORDER BY petName ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }
    public function fetchByCustomerId($customer_id) {
        $sql = "SELECT * FROM pet WHERE customerID = :customerID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':customerID', $customer_id);
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC); 
        }
        return $data;
    }
}

?>