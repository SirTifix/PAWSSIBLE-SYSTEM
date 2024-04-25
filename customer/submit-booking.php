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

    // Add booking with personal information
    $lastInsertedBookingId = $booking->add();

    // Check if booking was successfully added
    if ($lastInsertedBookingId) {
        // Loop through pet data and add each pet
        for ($i = 0; $i < $numberPets; $i++) {
            // Assuming pet data is sent as arrays in $_POST
            $petName = $_POST['petName'][$i];
            $petType = $_POST['petType'][$i];
            $sex = $_POST['sex'][$i];
            $petBreed = $_POST['petBreed'][$i];
            $petBirthDate = $_POST['petBirthDate'][$i];
            $serviceID = $_POST['services'][$i]; // Assuming service ID is sent for each pet
            $vetID = $_POST['vet'][$i]; // Assuming vet ID is sent for each pet

            // Add pet with the associated booking ID
            $booking->addPet($petName, $petType, $sex, $petBreed, $petBirthDate, $lastInsertedBookingId, $serviceID, $vetID);
        }

        // Return success response with booking ID
        echo json_encode(array('success' => true, 'bookingID' => $lastInsertedBookingId));
    } else {
        // Return failure response if booking could not be added
        echo json_encode(array('success' => false));
    }
} else {
    // Return failure response for invalid request method
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>
