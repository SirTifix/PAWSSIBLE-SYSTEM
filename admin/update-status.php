<?php
require_once('../classes/booking.class.php');

if (isset($_POST['bookingID'])) {
    $bookingClass = new Booking();

    $bookingID = htmlentities($_POST['bookingID']);
    $status = htmlentities($_POST['status']);

    if ($bookingClass->updateStatus($bookingID, $status)) {
        echo json_encode(array("success" => true, "message" => "Status updated successfully."));
    } else {
        echo json_encode(array("success" => false, "message" => "Failed to update status."));
    }
} else {
    echo json_encode(array("success" => false, "message" => "Invalid request method."));
}
?>
