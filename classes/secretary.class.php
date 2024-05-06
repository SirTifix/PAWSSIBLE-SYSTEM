<?php

require_once 'database.php';

class Secretary
{
    //attributes

    public $secretaryID;
    public $secretaryFirstname;
    public $secretaryMiddlename;
    public $secretaryLastname;
    public $secretaryPhone;
    public $secretaryEmail;
    public $secretaryUsername;
    public $secretaryPassword;
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
        $sql = "INSERT INTO secretary (secretaryFirstname, secretaryMiddlename, secretaryLastname, secretaryPhone, secretaryEmail, secretaryUsername, secretaryPassword) VALUES 
        (:secretaryFirstname, :secretaryMiddlename, :secretaryLastname, :secretaryPhone, :secretaryEmail, :secretaryUsername, :secretaryPassword);";

        $hashedPassword = password_hash($this->secretaryPassword, PASSWORD_DEFAULT);

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':secretaryFirstname', $this->secretaryFirstname);
        $query->bindParam(':secretaryMiddlename', $this->secretaryMiddlename);
        $query->bindParam(':secretaryLastname', $this->secretaryLastname);
        $query->bindParam(':secretaryPhone', $this->secretaryPhone);
        $query->bindParam(':secretaryEmail', $this->secretaryEmail);
        $query->bindParam(':secretaryUsername', $this->secretaryUsername);
        $query->bindParam(':secretaryPassword', $hashedPassword);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }


    function update()
    {
        $sql = "UPDATE secretary SET secretaryFirstname=:secretaryFirstname, secretaryMiddlename=:secretaryMiddlename, secretaryLastname=:secretaryLastname, secretaryPhone=:secretaryPhone, secretaryEmail=:secretaryEmail, secretaryUsername=:secretaryUsername, secretaryPassword=:secretaryPassword, updated_at = :updated_at WHERE secretaryID=:secretaryID;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':secretaryFirstname', $this->secretaryFirstname);
        $query->bindParam(':secretaryMiddlename', $this->secretaryMiddlename);
        $query->bindParam(':secretaryLastname', $this->secretaryLastname);
        $query->bindParam(':secretaryPhone', $this->secretaryPhone);
        $query->bindParam(':secretaryEmail', $this->secretaryEmail);
        $query->bindParam(':secretaryUsername', $this->secretaryUsername);
        $query->bindParam(':secretaryPassword', $this->secretaryPassword);
        $query->bindParam(':updated_at', $this->updated_at);
        $query->bindParam(':secretaryID', $this->secretaryID);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function updateCreds()
    {
        $sql = "UPDATE secretary SET secretaryEmail=:secretaryEmail, secretaryUsername=:secretaryUsername, secretaryPassword=:secretaryPassword WHERE secretaryID=:secretaryID;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':secretaryEmail', $this->secretaryEmail);
        $query->bindParam(':secretaryUsername', $this->secretaryUsername);
        $query->bindParam(':secretaryPassword', $this->secretaryPassword);
        $query->bindParam(':secretaryID', $this->secretaryID);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function delete($secretaryID)
    {
        $sql = "DELETE FROM secretary WHERE secretaryID = :secretaryID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':secretaryID', $secretaryID);

        return $query->execute();
    }

    function fetch($record_id)
    {
        $sql = "SELECT * FROM secretary WHERE secretaryID = :secretaryID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':secretaryID', $record_id);
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function show()
    {
        $sql = "SELECT * FROM secretary ORDER BY secretaryLastname ASC, secretaryFirstname ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function showSecretary()
    {
        $sql = "SELECT secretaryID, CONCAT(secretaryFirstname, ' ', secretaryLastname) AS fullName, created_at FROM secretary ORDER BY secretaryLastname ASC, secretaryFirstname ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function showSecretaryByID($secretaryID)
    {
        $sql = "SELECT secretaryID, CONCAT(secretaryFirstname, ' ', secretaryLastname) AS fullName, created_at FROM secretary WHERE secretaryID = :secretaryID ORDER BY secretaryLastname ASC, secretaryFirstname ASC;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':secretaryID', $secretaryID);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

}

?>