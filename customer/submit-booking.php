<?php
require_once ('../classes/booking.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking = new Booking();

    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $numberPets = $_POST['pets'];
    echo $_POST['pets'];
    session_start();

    $_SESSION['noofpets']= $_POST['pets'];
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
    
    // Add booking with personal information
    $savedBookingId = $booking->add(); 
    
    header('Location: ./booking2.php?bookingID=' . $savedBookingId);

    // Return success response with booking ID*/
    echo json_encode(array('success' => true, 'bookingID' => $savedBookingId));
} else {
    // Return failure response for invalid request method
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>

