<?php

require_once 'database.php';

class Vaccine
{
    //attributes
    public $vaccineID;
    public $vaccine;
    public $vaccineType;
    public $ageVaccine;
    public $dosage;
    public $weeks;
    public $price;
    public $category;
    public $created_at;
    public $updated_at;

    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Methods

    public function add($vaccine, $vaccineType, $ageVaccine, $dosage, $weeks, $price, $category)
    {
        $sql = "INSERT INTO vaccines (vaccine, vaccineType, age, dosage, weeks, price, category, created_at, updated_at) 
            VALUES (:vaccine, :vaccineType, :age, :dosage, :weeks, :price, :category, NOW(), NOW())";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vaccine', $vaccine);
        $query->bindParam(':vaccineType', $vaccineType);
        $query->bindParam(':age', $ageVaccine);
        $query->bindParam(':dosage', $dosage);
        $query->bindParam(':weeks', $weeks);
        $query->bindParam(':price', $veterpriceinarian);
        $query->bindParam(':category', $category);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function update($vaccine, $vaccineType, $ageVaccine, $dosage, $weeks, $price, $category, $vaccineID)
    {
        $sql = "UPDATE vaccines SET vaccine=:vaccine, vaccineType=:vaccineType, age=:age, dosage=:dosage, weeks=:weeks, price=:price, category=:category, updated_at=NOW() WHERE vaccineID=:vaccineID";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vaccine', $vaccine);
        $query->bindParam(':vaccineType', $vaccineType);
        $query->bindParam(':age', $ageVaccine);
        $query->bindParam(':dosage', $dosage);
        $query->bindParam(':weeks', $weeks);
        $query->bindParam(':price', $price);
        $query->bindParam(':category', $category);
        $query->bindParam(':vaccineID', $vaccineID);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function delete($vaccineID)
    {
        $sql = "DELETE FROM vaccines WHERE vaccineID = :vaccineID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vaccineID', $vaccineID);

        return $query->execute();
    }

    public function fetch($vaccineID)
    {
        $sql = "SELECT * FROM vaccines WHERE vaccineID = :vaccineID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vaccineID', $vaccineID);

        if ($query->execute()) {
            $data = $query->fetch();
            return $data;
        } else {
            return false;
        }
    }

    public function showAll()
    {
        $sql = "SELECT * FROM vaccines";
        $query = $this->db->connect()->prepare($sql);

        if ($query->execute()) {
            $data = $query->fetchAll();
            return $data;
        } else {
            return false;
        }
    }
}

?>