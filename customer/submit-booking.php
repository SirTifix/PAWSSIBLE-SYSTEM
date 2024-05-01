<?php
session_start();
require_once ('../classes/booking.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking = new Booking();

    $firstname = $_POST['firstName'];
    $middlename = $_POST['middleName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $numberPets = $_POST['pets'];
    $_SESSION['noofpets'] = $_POST['pets'];
    $status = 'Pending';
    $selectedDate = $_POST['selectedDate'];
    $selectedTime = $_POST['selectedTime'];
    $booking->firstname = $firstname;
    $booking->middlename = $middlename;
    $booking->lastname = $lastname;
    $booking->email = $email;
    $booking->contactNumber = $contactNumber;
    $booking->numberPets = $numberPets;
    $booking->status = $status;
    $booking->bookingDate = $selectedDate;
    $booking->bookingTime = $selectedTime;
    
    // Add booking with personal information
    $savedBookingId = $booking->add(); 
    
    echo "<script>window.location.href = './booking2.php?bookingID={$savedBookingId}';</script>";
    // Return success response with booking ID*/
    echo json_encode(array('success' => true, 'bookingID' => $savedBookingId));
} else {
    // Return failure response for invalid request method
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>

