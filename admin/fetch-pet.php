<?php
require_once('../classes/booking.class.php');

if(isset($_POST['bookingID'])) {
    $booking = new Booking();
    
    $booking->bookingID = $_POST['bookingID'];
    
    $result = $booking->showPet();
    
    if($result) {
        header('Content-Type: application/json');
        echo json_encode($result);
    } else {
        header('Content-Type: application/json');
        echo json_encode(array('error' => 'Failed to fetch pet data.'));
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Booking ID not provided.'));
}
?>
