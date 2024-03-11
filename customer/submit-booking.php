<?php
require_once('../classes/booking.class.php');

if (isset($_POST['submitBtn'])) {
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

    $petNames = array();
    $petTypes = array();
    $petBreeds = array();
    $petBirthDates = array();
    $serviceIDs = array();
    $vetIDs = array();

    for ($i = 1; $i <= $numberPets; $i++) {
        $petNames[] = $_POST['petName' . $i];
        $petTypes[] = $_POST['petType' . $i];
        $petBreeds[] = $_POST['petBreed' . $i];
        $petBirthDates[] = $_POST['petBirthDate' . $i];
        $serviceIDs[] = $_POST['services' . $i];
        $vetIDs[] = $_POST['vet' . $i];
    }

    $booking->petName = $petNames;
    $booking->petType = $petTypes;
    $booking->petBreed = $petBreeds;
    $booking->petBirthDate = $petBirthDates;
    $booking->serviceID = $serviceIDs;
    $booking->vetID = $vetIDs;

    $lastInsertedBookingId = $booking->add();

    if ($lastInsertedBookingId) {
        header('Location: booking.php');
        exit;
    } else {
        echo "Error adding booking.";
    }
} else {
    echo "Invalid request method.";
}
?>
