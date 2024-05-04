<?php
session_start();
require_once '../classes/booking.class.php';
require_once('../classes/pet.class.php');

$customerID = $_SESSION['customerID'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking2 = new Booking();
    $pet = new Pet();
    $bookingIDs = [];
    if(isset($_SESSION['customerID'])) {
        

        for ($i = 0; $i < count($_POST['pet_index']); $i++) {
            $petIndex = $_POST['pet_index'][$i];
            $customerID = $_POST['customerID'][$petIndex];
            $petName = $_POST['petName'][$petIndex];
            $petType = $_POST['petType'][$petIndex];
            $sex = $_POST['sex'][$petIndex];
            $concerns = $_POST['concerns'][$petIndex];
            $petBreed = $_POST['petBreed'][$petIndex];
            $petBirthDate = $_POST['petBirthDate'][$petIndex];
            $petBirthDateFormatted = date('Y-m-d', strtotime($petBirthDate));
            $bookingID = $_POST['bookingID'][$petIndex];
            $serviceID = $_POST['services'][$petIndex];
            $vetID = $_POST['vet'][$petIndex];

            $savedBooking2 = $booking2->addPet($petName, $petType, $sex, $concerns, $petBreed, $petBirthDateFormatted, $bookingID, $serviceID, $vetID, $customerID);

            $pet->petName = $petName;
            $pet->petBirthdate= $petBirthDateFormatted;
            $pet->petAge = "";
            $pet->petBreed = $petBreed;
            $pet->petType = $petType;
            $pet->petGender = $sex;
            $pet->petWeight = "";
            $pet->petColor = "";
            $pet->customerID = $customerID;

            $savedPet = $pet->add();

            echo json_encode(array('success' => true, $petName => $savedBooking2));
            $bookingIDs[] = $savedBooking2;

            if ($i === 0) {
                $bookingIDIndex0 = $bookingID;
            }
        }
        
        echo "<script>window.location.href = './finished-booking.php?bookingID={$bookingIDIndex0}';</script>";
    } else {
        echo json_encode(array('success' => false, 'message' => 'Customer ID is not set in session.'));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>
