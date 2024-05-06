<?php

require_once 'database.php';

class MedicalHistory
{

    public $ageVaccine;
    public $dateGiven;
    public $vaccine;
    public $next_date;
    public $category;
    public $recordID;
    public $petId;
    public $ageWeeks;
    public $recordDate;
    public $veterinarian;
    public $recordHistory;
    public $recordExamination;
    public $recordTreatment;
    public $vaccinePrice;
    public $created_at;
    public $updated_at;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function add()
    {
        $sql = "INSERT INTO medicalrecord (petId, ageWeeks, recordDate, veterinarian, recordHistory, recordExamination, recordTreatment) VALUES 
        (:petId, :ageWeeks, :recordDate, :veterinarian, :recordHistory, :recordExamination, :recordTreatment);";
        $query = $this->db->connect()->prepare($sql);

        $query->bindParam(':petId', $this->petId);
        $query->bindParam(':ageWeeks', $this->ageWeeks);
        $query->bindParam(':recordDate', $this->recordDate);
        $query->bindParam(':veterinarian', $this->veterinarian);
        $query->bindParam(':recordHistory', $this->recordHistory);
        $query->bindParam(':recordExamination', $this->recordExamination);
        $query->bindParam(':recordTreatment', $this->recordTreatment);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function addVaccRecord()
    {
        $sql = "INSERT INTO vaccines (petId, ageVaccine, dateGiven, vaccine, veterinarian, next_date, category) VALUES 
        (:petId, :ageVaccine, :dateGiven, :vaccine, :veterinarian, :next_date, :category);";
        $query = $this->db->connect()->prepare($sql);

        $query->bindParam(':petId', $this->petId);
        $query->bindParam(':ageVaccine', $this->ageVaccine);
        $query->bindParam(':dateGiven', $this->dateGiven);
        $query->bindParam(':vaccine', $this->vaccine);
        $query->bindParam(':next_date', $this->next_date);
        $query->bindParam(':veterinarian', $this->veterinarian);
        $query->bindParam(':category', $this->category);

        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function showByID($recordID)
    {
        $sql = "SELECT * FROM medicalrecord WHERE recordID = :recordID ORDER BY recordDate ASC;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vaccineID', $vaccineID);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    function show()
    {
        $sql = "SELECT * FROM medicalrecord ORDER BY recordDate ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }
    function showRecord1($petId)
    {
        $sql = "SELECT * FROM medicalrecord WHERE petId = :petId ORDER BY created_at ASC;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':petId', $petId);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }
    function showVaccRecord()
    {
        $sql = "SELECT * FROM vaccines ORDER BY created_at ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }
    function showRecord2($petId)
    {
        $sql = "SELECT * FROM vaccines WHERE petId = :petId ORDER BY created_at ASC;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':petId', $petId);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetch();
        }
        return $data;
    }
    function deleteMedRecord($recordID)
    {
        $sql = "DELETE FROM medicalrecord WHERE recordID = :recordID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':recordID', $recordID);

        return $query->execute();
    }
    function deleteVacRecord($vaccineRecordID)
    {
        $sql = "DELETE FROM vaccines WHERE vaccineRecordID = :vaccineRecordID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':vaccineRecordID', $vaccineRecordID);

        return $query->execute();
    }
}
