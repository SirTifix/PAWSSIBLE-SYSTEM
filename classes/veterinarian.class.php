<?php

require_once 'database.php';

class Veterinarian
{
    //attributes

    public $vetID;
    public $vetFirstname;
    public $vetLastname;
    public $vetMiddlename;
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
        $sql = "INSERT INTO veterinarian (vetFirstname, vetLastname, vetMiddlename vetPhone, vetEmail, vetUsername, vetPassword, created_at) VALUES 
        (:vetFirstname, :vetLastname, vetMiddlename, :vetPhone, :vetEmail, :vetUsername, :vetPassword, :created_at);";

        $hashedPassword = password_hash($this->vetPassword, PASSWORD_DEFAULT);
        $currentDateTime = date('Y-m-d H:i:s');

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetFirstname', $this->vetFirstname);
        $query->bindParam(':vetLastname', $this->vetLastname);
        $query->bindParam(':vetMiddlename', $this->vetMiddlename);
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


    function update($vetID, $vetFirstname, $vetLastname, $vetMiddlename, $vetEmail, $vetUsername, $vetPhone, $vetPassword)
    {
        $sql = "UPDATE veterinarian SET vetFirstname=:vetFirstname, vetLastname=:vetLastname, vetMiddlename=:vetMiddlename, vetPhone=:vetPhone, vetEmail=:vetEmail, vetUsername=:vetUsername, vetPassword=:vetPassword WHERE vetID=:vetID;";
        $hashedPassword = password_hash($this->vetPassword, PASSWORD_DEFAULT);
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetID', $vetID);
        $query->bindParam(':vetFirstname', $vetFirstname);
        $query->bindParam(':vetLastname', $vetLastname);
        $query->bindParam(':vetMiddlename', $vetMiddlename);
        $query->bindParam(':vetPhone', $vetPhone);
        $query->bindParam(':vetEmail', $vetEmail);
        $query->bindParam(':vetUsername', $vetUsername);
        $query->bindParam(':vetPassword', $hashedPassword);

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