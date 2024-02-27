<?php

require_once 'database.php';

Class Pet{
    //attributes

    public $petID;
    public $petName;
    public $petBirthdate;
    public $petAge;
    public $petBreed;
    public $petType;
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

    function add(){
        $sql = "INSERT INTO pet (petName, petBirthdate, petAge, petBreed, petType, petGender, petWeight, petColor) VALUES 
        (:petName, :petBirthdate, :petAge, :petBreed, :petType, :petGender, :petWeight, :petColor);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':petName', $this->petName);
        $query->bindParam(':petBirthdate', $this->petBirthdate);
        $query->bindParam(':petAge', $this->petAge);
        $query->bindParam(':petBreed', $this->petBreed);
        $query->bindParam(':petType', $this->petType);
        $query->bindParam(':petGender', $this->petGender);
        $query->bindParam(':petWeight', $this->petWeight);
        $query->bindParam(':petColor', $this->petColor);
        if($query->execute()){
            return true;
        }
        else{
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
}

?>