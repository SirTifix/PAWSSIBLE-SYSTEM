<?php
require_once('../classes/booking.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking = new Booking();

    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $numberPets = $_POST['pets'];
    $status = 'Pending';
    $selectedDate = $_POST['selectedDate'];
    $selectedTime = $_POST['selectedTime'];

    $booking->firstname = $firstname;
    $booking->lastname = $lastname;
    $booking->email = $email;
    $booking->contactNumber = $contactNumber;
    $booking->status = $status;
    $booking->bookingDate = $selectedDate;
    $booking->bookingTime = $selectedTime;

    $petNames = isset($_POST['petName']) ? $_POST['petName'] : [];
    $petTypes = isset($_POST['petType']) ? $_POST['petType'] : [];
    $sex = isset($_POST['sex']) ? $_POST['sex'] : [];
    $petBreeds = isset($_POST['petBreed']) ? $_POST['petBreed'] : [];
    $petBirthDates = isset($_POST['petBirthDate']) ? $_POST['petBirthDate'] : [];
    $serviceIDs = isset($_POST['services']) ? $_POST['services'] : [];
    $vetIDs = isset($_POST['vet']) ? $_POST['vet'] : [];

    $booking->petName = $petNames;
    $booking->petType = $petTypes;
    $booking->sex = $sex;
    $booking->petBreed = $petBreeds;
    $booking->petBirthDate = $petBirthDates;
    $booking->serviceID = $serviceIDs;
    $booking->vetID = $vetIDs;

    $lastInsertedBookingId = $booking->add();

    if ($lastInsertedBookingId) {
        echo json_encode(array('success' => true, 'bookingID' => $lastInsertedBookingId));
    } else {
        echo json_encode(array('success' => false));
    }
} else {
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>
