<?php

require_once 'database.php';

class Account
{

    public $customerID;
    public $id;
    public $email;
    public $password;
    public $adminID;
    public $adminUsername;
    public $adminPassword;
    public $secretaryID;
    public $secretaryUsername;
    public $secretaryPassword;
    public $vetUsername;
    public $vetPassword;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function getCustomerID()
    {
        $sql = "SELECT id FROM customer WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);

        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);
            $this->customerID = $accountData['id'];
            return true;
        }
    }

    function getCustomerData($email)
    {
        $sql = "SELECT * FROM customer WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $email);

        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);
            return $accountData;
        } else {
            return false;
        }
    }


    function sign_in_customer()
    {
        $sql = "SELECT * FROM customer WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);

        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);

            if ($accountData && password_verify($this->password, $accountData['password'])) {
                $this->id = $accountData['id'];
                $this->getCustomerID();
                return true;
            }
        }

        return false;
    }

    function sign_in_admin()
    {
        $sql = "SELECT * FROM admin WHERE adminUsername = :adminUsername LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':adminUsername', $this->adminUsername);

        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);

            if ($accountData && password_verify($this->adminPassword, $accountData['adminPassword'])) {
                $this->id = $accountData['adminID'];
                return true;
            }
        }

        return false;
    }
    function updateAdmin()
    {
        $sql = "UPDATE admin SET adminUsername=:adminUsername, adminEmail=:adminEmail, adminPassword=:adminPassword WHERE adminID=:adminID;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':adminUsername', $this->adminUsername);
        $query->bindParam(':adminEmail', $this->adminEmail);
        $query->bindParam(':adminPassword', $this->adminPassword);
        $query->bindParam(':adminID', $this->adminID);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function fetchAdmin($adminID)
    {
        $sql = "SELECT * FROM admin WHERE adminID = :adminID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':adminID', $adminID);
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function sign_in_vet()
    {
        $sql = "SELECT * FROM veterinarian WHERE vetUsername = :vetUsername LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetUsername', $this->vetUsername);

        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);

            if ($accountData && password_verify($this->vetPassword, $accountData['vetPassword'])) {
                $this->id = $accountData['vetID'];
                return true;
            }
        }

        return false;
    }
    function fetchVet($vetID)
    {
        $sql = "SELECT * FROM veterinarian WHERE vetID = :vetID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vetID', $vetID);
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function sign_in_secretary()
    {
        $sql = "SELECT * FROM secretary WHERE secretaryUsername = :secretaryUsername LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':secretaryUsername', $this->secretaryUsername);

        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);

            if ($accountData && password_verify($this->secretaryPassword, $accountData['secretaryPassword'])) {
                $this->id = $accountData['secretaryID'];
                return true;
            }
        }

        return false;
    }
    function fetchSec($secretaryID)
    {
        $sql = "SELECT * FROM secretary WHERE secretaryID = :secretaryID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':secretaryID', $secretaryID);
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

}

?>