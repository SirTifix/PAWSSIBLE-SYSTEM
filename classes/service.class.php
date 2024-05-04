<?php

require_once 'database.php';

class Service
{
    //attributes

    public $serviceID;
    public $serviceName;
    public $serviceDescription;
    public $servicePrice;
    public $created_at;
    public $updated_at;
    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods
    function add()
    {
        $sql = "INSERT INTO service (serviceName, serviceDescription, servicePrice, created_at, updated_at) VALUES 
        (:serviceName, :serviceDescription, :servicePrice, :created_at, :updated_at);";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':serviceName', $this->serviceName);
        $query->bindParam(':serviceDescription', $this->serviceDescription);
        $query->bindParam(':servicePrice', $this->servicePrice);
        $query->bindParam(':created_at', $this->created_at);
        $query->bindParam(':updated_at', $this->updated_at);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function update()
    {
        $sql = "UPDATE service SET serviceName=:serviceName,  serviceDescription=:serviceDescription, servicePrice=:servicePrice, updated_at=:updated_at WHERE serviceID=:serviceID;";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':serviceName', $this->serviceName);
        $query->bindParam(':serviceDescription', $this->serviceDescription);
        $query->bindParam(':servicePrice', $this->servicePrice);
        $query->bindParam(':updated_at', $this->updated_at);
        $query->bindParam(':serviceID', $this->serviceID);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function delete($serviceID)
    {
        $sql = "DELETE FROM service WHERE serviceID = :serviceID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':serviceID', $serviceID);

        return $query->execute();
    }

    function fetch($serviceID)
    {
        $sql = "SELECT * FROM service WHERE serviceID = :serviceID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':serviceID', $serviceID);
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }


    function show()
    {
        $sql = "SELECT * FROM service ORDER BY serviceName ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }


}

?>