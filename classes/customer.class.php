<?php

require_once 'database.php';

Class Customer{
    //attributes

    public $customerID;
    public $customerFirstname;
    public $customerLastname;
    public $customerDOB;
    public $customerCity;
    public $customerAddress;
    public $customerEmail;
    public $customerState;
    public $customerPostal;
    public $customerPhone;
    public $updated_at;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO customer_record (customerFirstname, customerLastname, customerDOB, customerCity, customerAddress, customerEmail, customerState, customerPostal, customerPhone) VALUES 
        (:customerFirstname, :customerLastname, :customerDOB, :customerCity, :customerAddress, :customerEmail, :customerState, :customerPostal, :customerPhone);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':customerFirstname', $this->customerFirstname);
        $query->bindParam(':customerLastname', $this->customerLastname);
        $query->bindParam(':customerDOB', $this->customerDOB);
        $query->bindParam(':customerCity', $this->customerCity);
        $query->bindParam(':customerAddress', $this->customerAddress);
        $query->bindParam(':customerEmail', $this->customerEmail);
        $query->bindParam(':customerState', $this->customerState);
        $query->bindParam(':customerPostal', $this->customerPostal);
        $query->bindParam(':customerPhone', $this->customerPhone);
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function update(){
        $sql = "UPDATE customer_record SET customerFirstname=:customerFirstname,  customerLastname=:customerLastname, customerDOB=:customerDOB, customerCity=:customerCity, customerAddress=:customerAddress, customerEmail=:customerEmail, customerState=:customerState, customerPostal=:customerPostal, customerPhone=:customerPhone WHERE customerID=:customerID;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':customerFirstname', $this->customerFirstname);
        $query->bindParam(':customerLastname', $this->customerLastname);
        $query->bindParam(':customerDOB', $this->customerDOB);
        $query->bindParam(':customerCity', $this->customerCity);
        $query->bindParam(':customerAddress', $this->customerAddress);
        $query->bindParam(':customerEmail', $this->customerEmail);
        $query->bindParam(':customerState', $this->customerState);
        $query->bindParam(':customerPostal', $this->customerPostal);
        $query->bindParam(':customerPhone', $this->customerPhone);
        $query->bindParam(':customerID', $this->customerID);
        if ($query->execute()){
            return true;
        }
         else {
            return false;
        }
    }

    function delete($customerID)
    {
        $sql = "DELETE FROM customer_record WHERE customerID = :customerID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':customerID', $customerID);

        return $query->execute();
    }

    function fetch($record_id)
    {
        $sql = "SELECT * FROM customer_record WHERE customerID = :customerID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':customerID', $record_id);
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }

    function show()
    {
        $sql = "SELECT * FROM customer_record ORDER BY customerLastname ASC, customerFirstname ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }
}

?>