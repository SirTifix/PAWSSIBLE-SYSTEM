<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Pawssible Solutions Veterinary';
require_once ('./tools/functions.php');
require_once ('./include/customer-header.php');
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review-appointment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../customer/assets/css/style.css">
    <link rel="stylesheet" href="../customer/assets/css/customer-profile.css">
    <link rel="stylesheet" href="../customer/assets/css/review-calendar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <div class="px-5">
        <div class="review-appointment container-fluid" style="position:relative;">
            <a class="Go-back" href="./appointment.php">
                <button type="button" class="btn" style="background-color:#8493D9; color:#FFFF"> Go back</button>
            </a>
            <div class="Pet-mail text-center"> Pet Mail</div>
            <div class="Review-appointment-form px-3">
                <div class="modal-cont">
                    <div class="Review-appointment-form">
                        <h3 class="text-center Title-form">Review Appointment Form</h3>
                        <div class="form-appointment-review">
                            <h4>Personal Information</h4>


                            <div class="selected-details">
                                <div class="row">

                                    <div class="input-container  col-sm-3">
                                        <label for="firstName">First Name:</label>
                                        <input type="text" id="firstName" name="firstName" required>
                                    </div>

                                    <div class="input-container col-sm-3">
                                        <label for="middleName">Middle Name (Optional):</label>
                                        <input type="text" id="middleName" name="middleName">
                                    </div>

                                    <div class="input-container col-sm-3">
                                        <label for="lastName">Last Name:</label>
                                        <input type="text" id="lastName" name="lastName" required>
                                    </div>

                                    <div class="row">
                                        <div class="input-container col-6">
                                            <label for="email">Email Address:</label>
                                            <input type="email" id="email" name="email" required>
                                        </div>

                                        <div class="details col-sm">
                                            <label for="lastName">Selected Date and Time</label>
                                            
                                            <div class="d-flex">
                                                <p id="selectedDateTime"></p>
                                                
                                                <button id="openCalendarModalBtn"
                                                    class="Calendar-review-button">
                                                    <i class="calendar-icon fa-regular fa-calendar"></i>
                                                </button>

                                            </div>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="input-container col-6">
                                            <label for="contactNumber">Contact Number:</label>
                                            <input type="tel" id="contactNumber" name="contactNumber" required>

                                        </div>

                                        <div class="form-group col-sm-2">
                                            <label for="concerns">
                                                <h5>Reason for Rescheduling</h5>
                                            </label>
                                            <textarea style="height: 120px;" class="form-concerns"
                                                id="concerns"></textarea>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="input-container col-6">
                                            <label for="pets">Number of Pets:</label>
                                            <select id="pets" name="pets">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="pet-info-form background-color-container container mt-4 p-4">
                                        <h2 class="mb-4">Pet Information Form</h2>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-sm-2  background-color">
                                                    <label for="petname">
                                                        <h5>Pet Name</h5>
                                                    </label>
                                                    <input type="text" class="book-form-control" id="petname"
                                                        placeholder="Enter pet name" />
                                                </div>
                                                <div class="form-group col-sm-2 background-color">
                                                    <label for="pettype">
                                                        <h5>Pet Type</h5>
                                                    </label>
                                                    <input type="text" class="book-form-control" id="pettype"
                                                        placeholder="Enter pet type" />
                                                </div>
                                                <div class="form-group col-sm-2 background-color">
                                                    <label for="sex">
                                                        <h5>Sex</h5>
                                                    </label>
                                                    <input type="text" class="book-form-control background-color" id="sex"
                                                        placeholder="Enter sex" />
                                                </div>

                                                <div class="form-group col-sm-2">
                                                    <label for="concerns">
                                                        <h5>Concerns</h5>
                                                    </label>
                                                    <textarea style="height: 200px;" class="form-concerns"
                                                        id="concerns"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-sm-2 background-color">
                                                    <label for="breed">
                                                        <h5>Breed</h5>
                                                    </label>
                                                    <input type="text" class="book-form-control" id="breed"
                                                        placeholder="Enter breed" />
                                                </div>
                                                <div class="form-group col-sm-2 background-color">
                                                    <label for="services">
                                                        <h5>Select Services</h5>
                                                    </label>
                                                    <select class="book-form-control " id="services">
                                                        <option value="">Choose...</option>
                                                        <option value="Spay/Neuter">
                                                            Spay/Neuter<span class="price">PHP 1,000</span>
                                                        </option>
                                                        <option value="Eye Extraction">
                                                            Eye Extraction<span class="price">PHP 4,500</span>
                                                        </option>
                                                        <option value="Imputation">
                                                            Imputation<span class="price">PHP 2,500</span>
                                                        </option>
                                                        <option value="Caesarian">
                                                            Caesarian<span class="price">PHP 1,000</span>
                                                        </option>
                                                        <option value="Vaccination">
                                                            Vaccination<span class="price">PHP 300</span>
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-sm-2 background-color">
                                                    <label for="vet">
                                                        <h5>Select vet</h5>
                                                    </label>
                                                    <select class="book-form-control" id="vet">
                                                        <option value="">Choose...</option>
                                                        <option value="vet1">Dr.Jasmin abayon</option>
                                                        <option value="vet2">Dr.Erwin roy jalao</option>
                                                        <option value="vet3">Dr.Portia quintas</option>
                                                        <option value="vet3">Dr.Roi-lee cataluna</option>
                                                        <option value="vet3">Dr.France jalao</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-sm-2 background-color">
                                                    <label for="birthdate">
                                                        <h5>BirthDate</h5>
                                                    </label>
                                                    <input type="date" class="book-form-control form-control" id="birthdate" />
                                                </div>
                                            </div>

                                            <button type="button" id="submitBtn" class="btn btn-primary"
                                                data-toggle="modal" data-target="#confirmModal"
                                                style="background-color:#2A2F4F" class="float-right">
                                                Reschedule Appointment
                                            </button>

                                            <!-- Confirmation Modal -->
                                            <div class="confirmation-modal">
                                                <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="confirmationModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg"
                                                        role="document">
                                                        <div class="modal-content text-center">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mx-auto"
                                                                    id="confirmationModalLabel">Your Appointment
                                                                    Rescheduling Request Has Been Sent!
                                                                </h5>
                                                                </button>
                                                            </div>

                                                            <div
                                                                class="modal-body align-items-center justify-content-center d-flex flex-column">
                                                                <i class="fas fa-check-circle text-success confirmation-circle mb-3"
                                                                    style="font-size: 80px;"></i>
                                                                <p class="booking-number mb-2" style="font-size: 14px;">
                                                                    Your booking number:</p>
                                                                <p class="mb-4">0001</p>
                                                            </div>

                                                            <div class="modal-footer justify-content-center">
                                                                <button type="button" class="btn btn-secondary"
                                                                    id="finishBookingBtn" data-dismiss="modal"
                                                                    style="color: #8F9CA7; background-color: #EAEFF6; border-radius: 0%; border-style: none;">Finish
                                                                    Booking</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div id="calendarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Calendar content goes here -->
                    <div style="
                position: absolute;
                bottom: 90vh;
                left: 6vh;
                color: #2a2f4f;">
                        <h2><strong> AVAILABLE DATE </strong></h2>
                    </div>
                    <div style="
                position: absolute;
                bottom: 90vh;
                left: 77vh;
                color: #2a2f4f;">
                        <h2><strong> AVAILABLE TIME </strong></h2>
                    </div>
                    <div class="review-calendar container">
                        <div class="calendar-container cont-box">
                            <div class="calendar cont-content">
                                <div class="calendar-header">
                                    <button id="prevMonthBtn">&lt;</button>
                                    <h2 id="currentMonthYear"></h2>
                                    <button id="nextMonthBtn">&gt;</button>
                                </div>
                                <div class="days-container">
                                    <div style="color: #5263ab" class="days-of-week">
                                        <span>
                                            <h5>Sun</h5>
                                        </span>
                                        <span>
                                            <h5>Mon</h5>
                                        </span>
                                        <span>
                                            <h5>Tue</h5>
                                        </span>
                                        <span>
                                            <h5>Wed</h5>
                                        </span>
                                        <span>
                                            <h5>Thu</h5>
                                        </span>
                                        <span>
                                            <h5>Fri</h5>
                                        </span>
                                        <span>
                                            <h5>Sat</h5>
                                        </span>
                                    </div>
                                    <div class="separator"></div>
                                    <!-- Separator between days and dates -->
                                    <div class="calendar-body" id="calendarBody"></div>
                                </div>
                            </div>
                        </div>

                        <div class="time-container cont-box">
                            <div class="time-slots-container cont-content">
                                <h3 class="time-slot-heading">Time</h3>
                                <h6 class="style-date" style="text-align: center; color: #5263ab">
                                    Select Time Slot
                                </h6>
                                <div class="separator"></div>
                                <div class="time-slots">
                                    <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
                                        data-time="08:00 AM - 09:00 AM">
                                        <div> 08:00 AM</div>
                                        <div> 09:00 AM</div>
                                    </div>

                                    <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
                                        data-time="09:00 AM 10:00 AM">
                                        <div>09:00 AM</div>
                                        <div>10:00 AM</div>
                                    </div>

                                    <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
                                        data-time="10:00 AM 11:00 AM">
                                        <div>10:00 AM</div>
                                        <div>11:00 AM</div>
                                    </div>

                                    <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
                                        data-time="11:00 AM 12:00 PM">
                                        <div>11:00 AM</div>
                                        <div>12:00 PM</div>
                                    </div>

                                    <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
                                        data-time="12:00 AM 01:00 PM">
                                        <div>12:00 PM</div>
                                        <div>01:00 PM</div>
                                    </div>

                                    <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
                                        data-time="01:00 AM 02:00 PM">
                                        <div>01:00 AM</div>
                                        <div>02:00 AM</div>
                                    </div>

                                    <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
                                        data-time="02:00 AM 03:00 PM">
                                        <div>02:00 AM</div>
                                        <div>03:00 AM</div>
                                    </div>

                                    <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
                                        data-time="03:00 AM 04:00 PM">
                                        <div>03:00 AM</div>
                                        <div>04:00 AM</div>
                                    </div>

                                    <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
                                        data-time="04:00 AM 05:00 PM">
                                        <div>04:00 AM</div>
                                        <div>05:00 AM</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmselectdt" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">
                        Confirm Selection
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to select this date and time?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        No
                    </button>
                    <button type="button" class="btn btn-primary" id="confirmSelectionBtn">
                        Yes
                    </button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="./assets/script/review-appointment.js"></script>

    <script>
        $(document).ready(function () {
            // Function to open the calendar modal
            $("#openCalendarModalBtn").click(function () {
                $("#calendarModal").modal('show');
            });

            document.getElementById('finishBookingBtn').addEventListener('click', function () {
                location.reload();
            });

            // Function to handle reschedule appointment button click
            $("#submitBtn").click(function () {
                // Perform any necessary actions here, such as submitting the form data
                // For demonstration purposes, let's just log a message
                console.log("Reschedule appointment button clicked");

                // Show the confirmation modal
                $("#confirmModal").modal('show');
            });

            // Function to handle confirmation of reschedule appointment
            $("#confirmSelectionBtn").click(function () {
                // Perform any necessary actions upon confirmation
                // For demonstration purposes, let's reload the page
                location.reload();
            });
        });
    </script>
</body>
</html>