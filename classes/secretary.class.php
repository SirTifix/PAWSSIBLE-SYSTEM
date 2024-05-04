<?php

require_once 'database.php';

class Secretary
{

    public $secretaryID;
    public $secretaryUsername;
    public $secretaryPassword;
    public $secretaryEmail;
    public $created_at;
    public $updated_at;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add()
    {
        $sql = "INSERT INTO secretary (secretaryUsername, secretaryPassword, secretaryEmail, created_at, updated_at) VALUES 
        (:secretaryUsername, :secretaryPassword, :secretaryEmail, :created_at, :updated_at);";

        $hashedPassword = password_hash($this->secretaryPassword, PASSWORD_DEFAULT);
        $currentDateTime = date('Y-m-d H:i:s');

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':secretaryUsername', $this->secretaryUsername);
        $query->bindParam(':secretaryPassword', $this->secretaryPassword);
        $query->bindParam(':secretaryEmail', $this->secretaryEmail);
        $query->bindParam(':created_at', $this->created_at);
        $query->bindParam(':updated_at', $this->updated_at);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
}
?>