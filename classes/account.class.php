<?php

require_once 'database.php';

class Account{

    public $id;
    public $email;
    public $password;
    public $adminID;
    public $adminUsername;
    public $adminPassword;

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
                $this->id = $accountData['id'];
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

}

?>