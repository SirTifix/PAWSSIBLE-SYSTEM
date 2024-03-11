<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Appointment';
require_once('./include/admin-head.php');
require_once('../classes/booking.class.php');
?>

<body>
    <?php
    require_once('./include/admin-header.php')
        ?>

    <main>
        <?php
        require_once('./include/admin-sidepanel.php')
            ?>

        <section class="veterinarian-con">
            <div class="veterinarian-head">
                <p>Pending Appointments</p>
            </div>
        </section>

        <section class="appointment-con mt-5 pt-3">
            <div class="table-appointment">
                <div class="row justify-content-end align-items-center m-0">
                    <div class="col-auto my-1">
                        <div class="search-con">
                            <input type="text" id="searchInput" class="search-input" placeholder="Search here...">
                        </div>
                    </div>
                    <div class="col-auto my-1">
                        <a href="./appointment.php" class="appointment-btn" id="appointmentLink"><i
                                class="far fa-calendar-check"></i>Appointment</a>
                    </div>
                    <div class="col-auto my-1">
                        <div class="d-flex align-items-center">
                            <a href="./pending-appointment.php" class="appointment-btn appointment-active"
                                id="pendingLink"><i class="far fa-clock"></i>Pending</a>
                        </div>
                    </div>
                </div>



                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Book No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Status</th>
                            <th scope="col" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="appointmentTableBody">
                        <?php
                        $booking = new Booking();
                        $appointments = $booking->showPending();

                        foreach ($appointments as $appointment) {
                            echo "<tr data-booking-id='" . $appointment['bookingID'] . "'>";
                            echo "<td>" . $appointment['bookingID'] . "</td>";
                            echo "<td>" . $appointment['fullName'] . "</td>";
                            echo "<td>" . $appointment['bookingDate'] . "</td>";
                            echo "<td>" . $appointment['bookingTime'] . "</td>";
                            echo "<td>" . $appointment['status'] . "</td>";
                            echo '<td class="d-flex justify-content-center align-items-center">';
                            echo '<div class="crud-btn">';
                            echo '<a href="" class="check-btn" data-bs-toggle="modal" data-bs-target="#acceptModal"> <i class="fa-regular fa-circle-check m-1" aria-hidden="true"></i></a>';
                            echo '</div>';
                            echo '<div class="crud-btn">';
                            echo '<a href="" class="delete-btn" data-bs-toggle="modal" data-bs-target="#deleteDModal">';
                            echo '<i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>';
                            echo '</div>';
                            echo '<div class="crud-btn">';
                            echo '<a href="" class="" data-bs-toggle="modal" data-bs-target="#modal">';
                            echo '<i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>';
                            echo '</div>';
                            echo '</td>';
                            echo "</tr>";
                        }
                        ?>

                    </tbody>

                </table>


            </div>
        </section>

        <section>
            <div class="modal fade" id="deleteDModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                            this Appointment?</h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id=""
                                style="background-color: #FF0000; border: none;">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <section>
                <div class="modal fade" id="acceptModal" tabindex="-1" aria-labelledby="acceptModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <h4 class="modal-title m-4 text-center" id="acceptModal">Are you sure you want to accept
                                this booking?</h4>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    style="background-color: #FF0000;">Cancel</button>
                                <button type="button" class="btn btn-primary" id="confirmAccept" data-vet-id=""
                                    style="background-color: #03AC13; border: none;">Accept</button>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div id="modal" class="modal fade" data-bs-backdrop="static" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <h2 class="text-center">Review Pending Appointment</h2> <br>
                            <h3 class="text-center">Personal Details</h3>
                            <div class="selected-details">
                                <p id="selectedDateTime"></p>
                                <div class="input-container">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" id="firstName" class="input-appointment" name="firstName"
                                        required>
                                    <span class="underline"></span>
                                </div>
                                <div class="input-container">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" id="lastName" class="input-appointment" name="lastName" required>
                                    <span class="underline"></span>
                                </div>
                                <div class="input-container">
                                    <label for="email">Email Address:</label>
                                    <input type="email" id="email" class="input-appointment" name="email" required>
                                    <span class="underline"></span>
                                </div>
                                <div class="input-container">
                                    <label for="contactNumber">Contact Number:</label>
                                    <input type="tel" id="contactNumber" class="input-appointment" name="contactNumber"
                                        required>
                                    <span class="underline"></span>
                                </div>
                                <div class="input-container">
                                    <h3 class="text-center">Pet Details</h3>
                                    <div id="petFormsContainer" class="petFormsContainer"></div>
                                </div>
                                <div id="petFormsContainer" class="petFormsContainer"></div>
                                <button id="backBtn">Back</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>

    </main>
    <?php
    require_once('./include/js.php')
        ?>

    <script>
        document.getElementById('backBtn').addEventListener('click', function () {
            window.location.href = './pending-appointment.php';
        });

        document.querySelectorAll('tr[data-booking-id]').forEach(item => {
            item.addEventListener('click', function () {
                var bookingID = this.getAttribute('data-booking-id');
                populateModal(bookingID);
            });
        });

        document.getElementById('confirmAccept').addEventListener('click', function () {
            var bookingID = window.selectedBookingID;

            $.ajax({
                url: 'accept-booking.php',
                method: 'POST',
                data: { bookingID: bookingID },
                success: function (response) {
                    console.log(response);
                    $('#acceptModal').modal('hide');
                    location.reload();
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        function populateModal(bookingID) {
            $.ajax({
                url: 'fetch-booking.php',
                method: 'POST',
                data: { bookingID: bookingID },
                success: function (bookingData) {
                    $('#firstName').val(bookingData.firstName);
                    $('#lastName').val(bookingData.lastName);
                    $('#email').val(bookingData.emailAddress);
                    $('#contactNumber').val(bookingData.contactNumber);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });

            $.ajax({
                url: 'fetch-pet.php',
                method: 'POST',
                data: { bookingID: bookingID },
                success: function (petData) {
                    $('#petFormsContainer').empty();
                    var petCounter = 1;
                    petData.forEach(function (pet, index) {
                        var petFormHtml = `
                    <div class="input-container">
                        <p style="font-size: 20px; font-weight: bold;">Pet ${petCounter}</p>
                        <label for="petName${index}">Name:</label>
                        <input type="text" class="input-appointment" id="petName${index}" name="petName${index}" value="${pet.petName}" required><br><br>
                    </div>
                    <div class="input-container">
                        <label for="petType${index}">Type:</label>
                        <input type="text" class="input-appointment" id="petType${index}" name="petType${index}" value="${pet.petType}" required><br><br>
                    </div>
                `;
                        $('#petFormsContainer').append(petFormHtml);
                        petCounter++;
                    });
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>

</body>

</html>