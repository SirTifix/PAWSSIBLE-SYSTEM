<?php
session_start();
require_once ('../classes/booking.class.php');
require_once ('../classes/customer.class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking = new Booking();
    $customer = new Customer();
    $generateBookingID = $booking->generateUniqueBookingID();

    $firstname = $_POST['firstName'];
    $middlename = $_POST['middleName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $numberPets = $_POST['pets'];
    $_SESSION['noofpets'] = $_POST['pets'];
    $status = 'Approved';
    $selectedDate = $_POST['selectedDate'];
    $selectedTime = $_POST['selectedTime'];

    $booking->bookingID = $generateBookingID;
    $booking->firstname = $firstname;
    $booking->middleName = $middlename;
    $booking->lastname = $lastname;
    $booking->email = $email;
    $booking->contactNumber = $contactNumber;
    $booking->numberPets = $numberPets;
    $booking->status = $status;
    $booking->bookingDate = $selectedDate;
    $booking->bookingTime = $selectedTime;

    $customer->customerFirstname = $firstname;
    $customer->bookingID = $generateBookingID;
    $customer->customerMiddlename = $middlename;
    $customer->customerLastname = $lastname;
    $customer->customerEmail = $email;
    $customer->customerPhone = $contactNumber;
    $customer->customerDOB = "";
    $customer->customerCity = "";
    $customer->customerAddress = "";
    $customer->customerState = "";
    $customer->customerPostal = "";

    $savedCustomerId = $customer->add();

    $booking->customerID = $savedCustomerId;
    
    $savedBookingId = $booking->add();
    
    echo "<script>window.location.href = './appointment-booking2.php?bookingID={$generateBookingID}&customerID={$savedCustomerId}';</script>";
    // Return success response with booking ID*/
    echo json_encode(array('success' => true, 'bookingID' => $savedBookingId));
} else {
    // Return failure response for invalid request method
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>

