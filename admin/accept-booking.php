<?php
require_once('../classes/booking.class.php');

if(isset($_POST['bookingID'])) {
    $booking = new Booking();
    
    $booking->bookingID = $_POST['bookingID'];
    
    $result = $booking->acceptBooking();
    
    if($result) {
        echo 'Booking accepted successfully.';
        
    } else {
        echo 'Failed to accept booking.';
    }
} else {
    echo 'Booking ID not provided.';
}
?>
