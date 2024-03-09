<?php
require_once 'database.php';

Class Booking
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
    protected $db;
    function __construct()
    {
        $this->db = new Database();
    }

    function add(){
        $sql = "INSERT INTO booking (firstName, lastName, emailAddress, contactNumber, numberPets, status, bookingDate, bookingTime) VALUES 
        (:firstname, :lastname, :emailAddress, :contactNumber, :numberPets, :status, :bookingDate, :bookingTime);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':emailAddress', $this->email);
        $query->bindParam(':contactNumber', $this->contactNumber);
        $query->bindParam(':numberPets', $this->numberPets);
        $query->bindParam(':status', $this->status);
        $query->bindParam(':bookingDate', $this->bookingDate);
        $query->bindParam(':bookingTime', $this->bookingTime);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function show()
    {
        $sql = "SELECT * FROM booking ORDER BY bookingDate ASC;";
        $query = $this->db->connect()->prepare($sql);
        $data = null;
        if ($query->execute()) {
            $data = $query->fetchAll();
        }
        return $data;
    }
}
?>