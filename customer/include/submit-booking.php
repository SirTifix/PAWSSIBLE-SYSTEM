<?php

if (isset($_POST['submitBtn'])) {
    require_once '../classes/booking.class.php';
    
    
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $numberPets = $_POST['pets'];
    $status = 'Pending';
    $selectedDate = $_POST['selectedDate'];
    $selectedTime = $_POST['selectedTime'];

    $booking = new Booking();

    $booking->firstname = $firstname;
    $booking->lastname = $lastname;
    $booking->email = $email;
    $booking->numberPets = $numberPets;
    $booking->status = $status;
    $booking->bookingDate = $selectedDate;
    $booking->bookingTime = $selectedTime;

    if ($booking->add()) {
        echo "Booking added successfully.";
    } else {
        echo "Error adding booking.";
    }
} else {
    echo "Invalid request method.";
}

?>
