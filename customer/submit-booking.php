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
    
    header('Location: ./booking2.php');
    // Add booking with personal information
    /*$savedBookingId = $booking->add(); // Move this line up

    // Assuming pet data is sent as arrays in $_POST
    for ($i = 0; $i < $numberPets; $i++) {
        // Check if pet information is not empty
        if (!empty($_POST['petName'][$i])) {
            // Retrieve pet data for each index $i
            $petName = $_POST['petName'][$i];
            $petType = $_POST['petType'][$i] ?? null;
            $sex = $_POST['sex'][$i] ?? null;
            $petBreed = $_POST['petBreed'][$i] ?? null;
            $petBirthDate = $_POST['petBirthDate'][$i] ?? null;
            $serviceID = $_POST['services'][$i] ?? null;
            $vetID = $_POST['vet'][$i] ?? null;

            // Add pet with the associated booking ID
            $booking->addPet($petName, $petType, $sex, $petBreed, $petBirthDate, $savedBookingId, $serviceID, $vetID);
        }
    }

    // Return success response with booking ID
    echo json_encode(array('success' => true, 'bookingID' => $savedBookingId));*/

} else {
    // Return failure response for invalid request method
    echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
}
?>


</form>
