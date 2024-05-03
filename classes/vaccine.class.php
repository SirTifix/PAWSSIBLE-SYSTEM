<?php

require_once 'database.php';

class Vaccine
{

    public $vaccineID;
    public $vaccineName;
    public $vaccineType;
    public $vaccineAge;
    public $vaccineDosage;
    public $vaccineInterval;
    public $vaccinePrice;
    public $petType;
    public $created_at;
    public $updated_at;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add()
    {
        $sql = "INSERT INTO vaccine_list (vaccineName, vaccineType, vaccineAge, vaccineDosage, vaccineInterval, vaccinePrice, petType, created_at, updated_at) VALUES 
        (:vaccineName, :vaccineType, :vaccineAge, :vaccineDosage, :vaccineInterval, :vaccinePrice, :petType, :created_at, :updated_at);";
        $query = $this->db->connect()->prepare($sql);

        $query->bindParam(':vaccineName', $this->vaccineName);
        $query->bindParam(':vaccineType', $this->vaccineType);
        $query->bindParam(':vaccineAge', $this->vaccineAge);
        $query->bindParam(':vaccineDosage', $this->vaccineDosage);
        $query->bindParam(':vaccineInterval', $this->vaccineInterval);
        $query->bindParam(':vaccinePrice', $this->vaccinePrice);
        $query->bindParam(':petType', $this->petType);
        $query->bindParam(':created_at', $this->created_at);
        $query->bindParam(':updated_at', $this->updated_at);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function show()
    {
        $sql = "SELECT * FROM vaccine_list ORDER BY vaccineName ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function countAll()
    {
        $sql = "SELECT COUNT(*) AS record_count FROM vaccines;";
        $query = $this->db->connect()->prepare($sql);
        $recordCount = 0;
        if ($query->execute()) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $recordCount = $result['record_count'];
        }
        return $recordCount;
    }
    
}
