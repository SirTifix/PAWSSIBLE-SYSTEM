<?php

require_once 'database.php';

class Veterinarian
{
    //attributes

    public $vetID;
    public $vetFirstname;
    public $vetMiddlename;
    public $vetLastname;
    public $vetPhone;
    public $vetEmail;
    public $vetUsername;
    public $vetPassword;
    public $updated_at;
    public $created_at;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add()
    {
        $sql = "INSERT INTO veterinarian (vetFirstname, vetMiddlename, vetLastname, vetPhone, vetEmail, vetUsername, vetPassword, created_at) VALUES 
        (:vetFirstname, :vetMiddlename, :vetLastname, :vetPhone, :vetEmail, :vetUsername, :vetPassword, :created_at);";

        $hashedPassword = password_hash($this->vetPassword, PASSWORD_DEFAULT);
        $currentDateTime = date('Y-m-d H:i:s');

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetFirstname', $this->vetFirstname);
        $query->bindParam(':vetMiddlename', $this->vetMiddlename);
        $query->bindParam(':vetLastname', $this->vetLastname);
        $query->bindParam(':vetPhone', $this->vetPhone);
        $query->bindParam(':vetEmail', $this->vetEmail);
        $query->bindParam(':vetUsername', $this->vetUsername);
        $query->bindParam(':vetPassword', $hashedPassword);
        $query->bindParam(':created_at', $currentDateTime);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }


    function update()
    {
        $sql = "UPDATE veterinarian SET vetFirstname=:vetFirstname, vetMiddlename=:vetMiddlename, vetLastname=:vetLastname, vetPhone=:vetPhone, vetEmail=:vetEmail, vetUsername=:vetUsername, vetPassword=:vetPassword, updated_at = :updated_at WHERE vetID=:vetID;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetFirstname', $this->vetFirstname);
        $query->bindParam(':vetMiddlename', $this->vetMiddlename);
        $query->bindParam(':vetLastname', $this->vetLastname);
        $query->bindParam(':vetPhone', $this->vetPhone);
        $query->bindParam(':vetEmail', $this->vetEmail);
        $query->bindParam(':vetUsername', $this->vetUsername);
        $query->bindParam(':vetPassword', $this->vetPassword);
        $query->bindParam(':updated_at', $this->updated_at);
        $query->bindParam(':vetID', $this->vetID);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function delete($vetID)
    {
        $sql = "DELETE FROM veterinarian WHERE vetID = :vetID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetID', $vetID);

        return $query->execute();
    }

    function fetch($record_id)
    {
        $sql = "SELECT * FROM veterinarian WHERE vetID = :vetID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetID', $record_id);
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function show()
    {
        $sql = "SELECT * FROM veterinarian ORDER BY vetLastname ASC, vetFirstname ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function showVet()
    {
        $sql = "SELECT vetID, CONCAT(vetFirstname, ' ', vetLastname) AS fullName, created_at FROM veterinarian ORDER BY vetLastname ASC, vetFirstname ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function showVetByID($vetID)
    {
        $sql = "SELECT vetID, CONCAT(vetFirstname, ' ', vetLastname) AS fullName, created_at FROM veterinarian WHERE vetID = :vetID ORDER BY vetLastname ASC, vetFirstname ASC;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetID', $vetID);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function countVet($vetID)
    {
        $sql = "SELECT COUNT(*) AS record_count FROM booking_pet; WHERE vetID = :vetID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetID', $vetID);
        $recordCount = 0;
        if ($query->execute()) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $recordCount = $result['record_count'];
        }
        return $recordCount;
    }

}
