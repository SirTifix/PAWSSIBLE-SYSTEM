<?php
require_once('../classes/booking.class.php');

if(isset($_POST['bookingID'])) {
    $booking = new Booking();
    
    $booking->bookingID = $_POST['bookingID'];
    
    $bookingData = $booking->show();
    
    if($bookingData) {
        header('Content-Type: application/json');
        echo json_encode($bookingData);
    } else {
        header('Content-Type: application/json');
        echo json_encode(array('error' => 'Failed to fetch booking data.'));
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Booking ID not provided.'));
}
?>
