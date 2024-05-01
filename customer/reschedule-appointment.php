<?php
require_once '../classes/booking.class.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['bookingID']) && isset($_POST['selectedDate']) && isset($_POST['selectedTime']) && isset($_POST['reason'])) {
        $bookingID = $_SESSION['bookingID'];
        $newDate = $_POST['selectedDate'];
        $newTime = $_POST['selectedTime'];
        $reason = $_POST['reason'];

        $booking = new Booking();

        $result = $booking->rescheduleAppointment($bookingID, $newDate, $newTime, $reason);

        if ($result) {
            echo "<script>window.location.href = 'resched-req-sent.php?bookingID=$bookingID';</script>";
        } else {
            echo "Failed to reschedule appointment.";
        }
    } else {
        echo "Missing required fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
