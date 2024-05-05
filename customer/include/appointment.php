<?php
session_start();
require_once 'C:\xampp\htdocs\PAWSSIBLE-SYSTEM\classes\booking.class.php';

$booking = new Booking();

if (isset($_SESSION['customerID'])) {
    $customerID = $_SESSION['customerID'];
    $bookingCustomer = $booking->showCustomerAppointment($_SESSION['customerID']);
    $petInfo = array();
    
    foreach ($bookingCustomer as $appointment) {
        $bookingID = $appointment['bookingID'];
        $petInfo[$bookingID] = $booking->populatePetInfo($bookingID);
    }
} else {
    $petInfo = array();
}

?>
<div class="Rounded-container-form container rounded mt-2">
    <div class="Pet-mail-table row">
        <div class="Pet-mail-table col-md-12">
            <div class="Pet-mail-table p-2 ">
                <div class="search-container d-flex">
                    <div class="search-wrapper d-flex align-items-center m-0">
                        <input type="text" class="search" placeholder="search appointment.....">
                        <i class="search-icon fas fa-search" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="white-container">
                    <div class=" d-flex justify-content-center align-items-center">
                        <div class="mail-btn">
                            <a class="crud-text"><i class="fa-solid fa fa-envelope-o m-1" aria-hidden="true"></i>Pet
                                Mail</a>
                        </div>
                    </div>

                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Booking Pet ID</th>
                                <th scope="col" style="padding-left:5em;">Pet Name</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="appointmentTableBody">
                            <?php foreach ($petInfo as $bookingID => $bookingPets): ?>
                                <?php foreach ($bookingPets['petNames'] as $pet): ?>
                                    <tr class="table-row">
                                        <td><?php echo $pet['bookingPetID']; ?></td>
                                        <td>
                                            <label class="custom-checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <?php echo $pet['petName']; ?>
                                        </td>
                                        <td><strong><?php echo $pet['bookingDate'][0]['bookingDate']; ?></strong></td>
                                        <td>
                                            <input type="hidden" name="bookingID" value="<?php echo $pet['bookingID']; ?>">
                                            <a href="./review-appointment.php?bookingID=<?php echo $pet['bookingID']; ?>">
                                                <button type="button" class="Review-button btn-sm">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Add any necessary CSS styles here */
</style>