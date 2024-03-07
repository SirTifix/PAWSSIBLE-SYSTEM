<?php

require_once 'database.php';

class Account{

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

    function sign_in_customer(){
        $sql = "SELECT * FROM customer WHERE email = :email LIMIT 1;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
    
        if ($query->execute()) {
            $accountData = $query->fetch(PDO::FETCH_ASSOC);
    
            if ($accountData && password_verify($this->password, $accountData['password'])) {
                $this->id = $accountData['customerID'];
                return true;
            }
        }
    
        return false;
    }
    
    function sign_in_admin(){
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

    function sign_in_vet(){
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


    function sign_in_secretary(){
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

}

?>