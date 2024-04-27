<?php
require_once ('../classes/booking.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking2 = new Booking();
    $bookingIDs = [];
    
    for ($i = 0; $i < count($_POST['pet_index']); $i++) {
        $petIndex = $_POST['pet_index'][$i];
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

        $savedBooking2 = $booking2->addPet($petName, $petType, $sex, $concerns, $petBreed, $petBirthDateFormatted, $bookingID, $serviceID, $vetID);

        echo json_encode(array('success' => true, $petName => $savedBooking2));
        $bookingIDs[] = $savedBooking2;

        if ($i === 0) {
            $bookingIDIndex0 = $bookingID;
        }
    }
    
    header('Location: ./finished-booking.php?bookingID=' . $bookingIDIndex0);
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>

