<?php

require_once 'database.php';

class Customer
{
    //attributes

    public $customerID;
    public $customerFirstname;
    public $customerMiddlename;
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

    function add()
    {
        $sql = "INSERT INTO customer_record (customerFirstname, bookingID, customerMiddlename, customerLastname, customerDOB, customerCity, customerAddress, customerEmail, customerState, customerPostal, customerPhone) VALUES 
        (:customerFirstname, :bookingID, :customerMiddlename, :customerLastname, :customerDOB, :customerCity, :customerAddress, :customerEmail, :customerState, :customerPostal, :customerPhone);";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':bookingID', $this->bookingID);
        $query->bindParam(':customerFirstname', $this->customerFirstname);
        $query->bindParam(':customerMiddlename', $this->customerMiddlename);
        $query->bindParam(':customerLastname', $this->customerLastname);
        $query->bindParam(':customerDOB', $this->customerDOB);
        $query->bindParam(':customerCity', $this->customerCity);
        $query->bindParam(':customerAddress', $this->customerAddress);
        $query->bindParam(':customerEmail', $this->customerEmail);
        $query->bindParam(':customerState', $this->customerState);
        $query->bindParam(':customerPostal', $this->customerPostal);
        $query->bindParam(':customerPhone', $this->customerPhone);

        if ($query->execute()) {
            $lastInsertedCustomerId = $this->db->connect()->query("SELECT MAX(customerID) FROM customer_record")->fetchColumn();
            return $lastInsertedCustomerId;
        } else {
            return false;
        }
    }


    function update()
    {
        $sql = "UPDATE customer_record SET customerFirstname=:customerFirstname, customerMiddlename=:customerMiddlename, customerLastname=:customerLastname, customerDOB=:customerDOB, customerCity=:customerCity, customerAddress=:customerAddress, customerEmail=:customerEmail, customerState=:customerState, customerPostal=:customerPostal, customerPhone=:customerPhone WHERE customerID=:customerID;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':customerFirstname', $this->customerFirstname);
        $query->bindParam(':customerMiddlename', $this->customerMiddlename);
        $query->bindParam(':customerLastname', $this->customerLastname);
        $query->bindParam(':customerDOB', $this->customerDOB);
        $query->bindParam(':customerCity', $this->customerCity);
        $query->bindParam(':customerAddress', $this->customerAddress);
        $query->bindParam(':customerEmail', $this->customerEmail);
        $query->bindParam(':customerState', $this->customerState);
        $query->bindParam(':customerPostal', $this->customerPostal);
        $query->bindParam(':customerPhone', $this->customerPhone);
        $query->bindParam(':customerID', $this->customerID);
        if ($query->execute()) {
            return true;
        } else {
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
    function countAll()
    {
        $sql = "SELECT COUNT(*) AS record_count FROM customer_record;";
        $query = $this->db->connect()->prepare($sql);
        $recordCount = 0;
        if ($query->execute()) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $recordCount = $result['record_count'];
        }
        return $recordCount;
    }
    function showCustomer()
    {
        $sql = "SELECT customerID, CONCAT(vetFirstname, ' ', vetLastname) AS fullName, created_at FROM veterinarian ORDER BY vetLastname ASC, vetFirstname ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function showWeekly()
    {
        $oneWeekAgo = date('Y-m-d H:i:s', strtotime('-1 week'));

        $sql = "SELECT * FROM customer_record WHERE created_at >= :oneWeekAgo ORDER BY created_at ASC;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':oneWeekAgo', $oneWeekAgo);

        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }


    public function deleteCustomerAndPets($customerID)
    {
        $petQuery = $this->db->connect()->prepare("DELETE FROM pet WHERE customerID = :customerID");
        $petQuery->bindParam(':customerID', $customerID);
        if (!$petQuery->execute()) {
            return false;
        }

        $customerQuery = $this->db->connect()->prepare("DELETE FROM customer_record WHERE customerID = :customerID");
        $customerQuery->bindParam(':customerID', $customerID);
        if ($customerQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
