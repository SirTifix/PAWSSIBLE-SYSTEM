<?php

require_once 'database.php';

class Veterinarian
{
    //attributes

    public $vetID;
    public $vetFirstname;
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
        $sql = "INSERT INTO veterinarian (vetFirstname, vetLastname, vetPhone, vetEmail, vetUsername, vetPassword, created_at) VALUES 
        (:vetFirstname, :vetLastname, :vetPhone, :vetEmail, :vetUsername, :vetPassword, :created_at);";

        $hashedPassword = password_hash($this->vetPassword, PASSWORD_DEFAULT);
        $currentDateTime = date('Y-m-d H:i:s');

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetFirstname', $this->vetFirstname);
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
        $sql = "UPDATE veterinarian SET vetFirstname=:vetFirstname, vetLastname=:vetLastname, vetPhone=:vetPhone, vetEmail=:vetEmail, vetUsername=:vetUsername, vetPassword=:vetPassword WHERE vetID=:vetID;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetFirstname', $this->vetFirstname);
        $query->bindParam(':vetLastname', $this->vetLastname);
        $query->bindParam(':vetPhone', $this->vetPhone);
        $query->bindParam(':vetEmail', $this->vetEmail);
        $query->bindParam(':vetUsername', $this->vetUsername);
        $query->bindParam(':vetPassword', $this->vetPassword);
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
    function populateCombobox()
    {
        $sql = "SELECT vetID, CONCAT(vetFirstname, ' ', vetLastname) AS fullName FROM veterinarian ORDER BY vetLastname ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }
}

?>