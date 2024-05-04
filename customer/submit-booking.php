<?php
session_start();
require_once ('../classes/booking.class.php');
require_once ('../classes/customer.class.php');
require_once '../classes/customer-register.class.php';

$customer = new Register();
if (isset($_SESSION['customerID'])) {
    $customerID = $_SESSION['customerID'];

    $customerInfo = $customer->fetch($customerID);
} else {
    echo "No Customer Found";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $booking = new Booking();
    $customer = new Customer();

    $customerID = $_POST['customerID'];
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

    $booking->customerID = $customerID;
    $booking->firstname = $firstname;
    $booking->middleName = $middlename;
    $booking->lastname = $lastname;
    $booking->email = $email;
    $booking->contactNumber = $contactNumber;
    $booking->numberPets = $numberPets;
    $booking->status = $status;
    $booking->bookingDate = $selectedDate;
    $booking->bookingTime = $selectedTime;
    $savedBookingId = $booking->add();

    $customer->customerFirstname = $firstname;
    $customer->bookingID = $savedBookingId;
    $customer->customerMiddlename = $middlename;
    $customer->customerLastname = $lastname;
    $customer->customerEmail = $email;
    $customer->customerPhone = $contactNumber;
    $customer->customerDOB = "";
    $customer->customerCity = "";
    $customer->customerAddress = "";
    $customer->customerState = "";
    $customer->customerPostal = "";

    // Add booking with personal information
    $savedCustomerId = $customer->add();

    echo "<script>window.location.href = './booking2.php?bookingID={$savedBookingId}&customerID={$savedCustomerId}';</script>";
    // Return success response with booking ID*/
    echo json_encode(array('success' => true, 'bookingID' => $savedBookingId));
} else {
    // Return failure response for invalid request method
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>

