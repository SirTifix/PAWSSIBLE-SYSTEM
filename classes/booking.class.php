<?php
require_once 'database.php';

class Booking
{

    public $bookingID;

    public $firstname;
    public $lastname;
    public $email;
    public $contactNumber;
    public $numberPets;
    public $status;
    public $bookingDate;
    public $bookingTime;

    public $petName;
    public $petType;
    public $sex;
    public $petBreed;
    public $petBirthDate;
    protected $db;
    function __construct()
    {
        $this->db = new Database();
    }

    private function generateRandomID()
    {
        return rand(1000, 9999);
    }

    function acceptBooking()
    {
        $sql = "UPDATE booking SET status ='Accepted' WHERE bookingID = :bookingID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':bookingID', $this->bookingID);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    private function isUniqueID($bookingID)
    {
        $query = "SELECT COUNT(*) AS count FROM booking WHERE bookingID = :bookingID";
        $stmt = $this->db->connect()->prepare($query);
        $stmt->bindParam(':bookingID', $bookingID);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] == 0;
    }

    public function generateUniqueBookingID()
    {
        $maxAttempts = 10;
        $attempt = 0;
        do {
            $bookingID = $this->generateRandomID();
            $attempt++;
        } while (!$this->isUniqueID($bookingID) && $attempt < $maxAttempts);

        if ($attempt == $maxAttempts) {
            throw new Exception("Failed to generate a unique booking ID. Please try again later.");
        }

        return $bookingID;
    }

    function add()
    {
        try {
            $bookingID = $this->generateUniqueBookingID();
            $status = "Pending";

            $sql = "INSERT INTO booking (bookingID, firstName, lastName, emailAddress, contactNumber, status, bookingDate, bookingTime) VALUES 
            (:bookingID, :firstname, :lastname, :emailAddress, :contactNumber, :status, :bookingDate, :bookingTime);";

            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':bookingID', $bookingID);
            $query->bindParam(':firstname', $this->firstname);
            $query->bindParam(':lastname', $this->lastname);
            $query->bindParam(':emailAddress', $this->email);
            $query->bindParam(':contactNumber', $this->contactNumber);
            $query->bindParam(':status', $status);
            $query->bindParam(':bookingDate', $this->bookingDate);
            $query->bindParam(':bookingTime', $this->bookingTime);

            if ($query->execute()) {
                return $bookingID;
            } else {
                throw new Exception("Error inserting booking data");
            }
        } catch (Exception $e) {
            error_log("Error in add(): " . $e->getMessage());
            return false;
        }
    }


    function addPet($petName, $petType, $sex, $petBreed, $petBirthDate, $lastInsertedBookingId, $service, $vet)
    {
        try {
            $sqlPet = "INSERT INTO booking_pet (petName, petType, sex, petBreed, petBirthDate, bookingID, service, vet) VALUES 
                (:petName, :petType, :sex, :petBreed, :petBirthDate, :bookingID, :serviceID, :vetID);";
            $queryPet = $this->db->connect()->prepare($sqlPet);

            $queryPet->bindParam(':petName', $petName);
            $queryPet->bindParam(':petType', $petType);
            $queryPet->bindParam(':sex', $sex);
            $queryPet->bindParam(':petBreed', $petBreed);
            $queryPet->bindParam(':petBirthDate', $petBirthDate);
            $queryPet->bindParam(':bookingID', $bookingID);
            $queryPet->bindParam(':service', $service);
            $queryPet->bindParam(':vet', $vet);

            if (!$queryPet->execute()) {
                throw new Exception("Error inserting pet data");
            }
        } catch (Exception $e) {
            throw new Exception("Error adding pet: " . $e->getMessage());
        }
    }

    function showPending()
    {
        $sql = "SELECT bookingID, CONCAT(firstName, ' ', lastName) AS fullName, status, bookingDate, bookingTime FROM booking WHERE status ='Pending' ORDER BY bookingID ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }
    function showAccepted()
    {
        $sql = "SELECT bookingID, CONCAT(firstName, ' ', lastName) AS fullName, status, bookingDate, bookingTime FROM booking WHERE status ='Accepted' ORDER BY bookingID ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show()
    {
        $sql = "SELECT * FROM booking WHERE bookingID = :bookingID;";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':bookingID', $this->bookingID);
        if ($query->execute()) {
            $data = $query->fetch(PDO::FETCH_ASSOC);
        } else {
            $data = null;
        }
        return $data;
    }

    function showPet()
    {
        $sql = "SELECT petName, petType FROM booking_pet WHERE bookingID = :bookingID";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':bookingID', $this->bookingID);
        if ($query->execute()) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $data = array();
        }
        return $data;
    }

}
?>