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
                                        <label for="middleName">Middle Name:</label>
                                        <input type="text" id="middleName" name="middleName" required>
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
                                            <div class="col-sm">
                                                <p id="selectedDateTime"><i class="calendar-icon fa-regular fa-calendar"></i></p>
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


                                    <div class="pet-info-form background-color-container container bg-light mt-4 p-4">
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
                                                <div class="form-group col-sm-2">
                                                    <label for="services">
                                                        <h5>Select Services</h5>
                                                    </label>
                                                    <select class="book-form-control" id="services">
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

                                                <div class="form-group col-sm-2">
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
                                                    <input type="date" class="book-form-control" id="birthdate" />
                                                </div>
                                            </div>

                                            <button type="button" id="submitBtn" class="btn btn-primary"
                                                data-toggle="modal" data-target="#confirmationModal"
                                                style="background-color:#2A2F4F" class="float-right">
                                                Reschedule Appointment
                                            </button>


                                            <!-- Confirmation Modal -->
                                            <div class="confirmation-modal">
                                                <div class="modal fade" id="confirmationModal" tabindex="-1"
                                                    role="dialog" aria-labelledby="confirmationModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg"
                                                        role="document">
                                                        <div class="modal-content text-center">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mx-auto"
                                                                    id="confirmationModalLabel">Your Appointment  Rescheduling Request Has Been Sent!
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
</body>

</html>