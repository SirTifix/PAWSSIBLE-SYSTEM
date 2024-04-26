<?php
    require_once('../classes/booking.class.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $booking = new Booking();

        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $contactNumber = $_POST['contactNumber'];
        $numberPets = $_POST['pets'];
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

        // Add booking with personal information
        $lastInsertedBookingId = $booking->add();

        // Check if booking was successfully added
        if ($lastInsertedBookingId) {
            // Loop through pet data and add each pet
            for ($i = 0; $i < $numberPets; $i++) {
                // Assuming pet data is sent as arrays in $_POST
                $petName = $_POST['petName'][$i];
                $petType = $_POST['petType'][$i];
                $sex = $_POST['sex'][$i];
                $petBreed = $_POST['petBreed'][$i];
                $petBirthDate = $_POST['petBirthDate'][$i];
                $serviceID = $_POST['services'][$i]; // Assuming service ID is sent for each pet
                $vetID = $_POST['vet'][$i]; // Assuming vet ID is sent for each pet

                // Add pet with the associated booking ID
                $booking->addPet($petName, $petType, $sex, $petBreed, $petBirthDate, $lastInsertedBookingId, $serviceID, $vetID);
            }

            // Return success response with booking ID
            echo json_encode(array('success' => true, 'bookingID' => $lastInsertedBookingId));
        } else {
            // Return failure response if booking could not be added
            echo json_encode(array('success' => false));
        }
    } else {
        // Return failure response for invalid request method
        echo json_encode(array('success' => false, 'message' => 'Invalid request method.'));
    }
?>
<div class="pet-info-form background-color-container">
    <h2 class="mb-4">Pet Information Form</h2>
    <form action="" method="POST">
    <div class="form-row">
        <div class="form-group col-sm-2  background-color">
        <label for="petname"><h5>Pet Name</h5></label>
        <input
            type="text"
            class="form-control"
            id="petname"
            name="petname[]"
            placeholder="Enter pet name"
        />
        </div>
        <div class="form-group col-sm-2 background-color">
        <label for="pettype"> <h5>Pet Type</h5></label>
        <input
            type="text"
            class="form-control"
            id="pettype"
            name="pettype[]"
            placeholder="Enter pet type"
        />
        </div>
        <div class="form-group col-sm-2 background-color">
        <label for="sex"> <h5>Sex</h5></label>
        <input
            type="text"
            class="form-control background-color"
            id="sex"
            name="sex[]"
            placeholder="Enter sex"
        />
        </div>

        <div class="form-group col-sm-2">
        <label for="concerns"> <h5>Concerns</h5></label>
        <textarea style="height: 200px;" class="form-concerns" name="concerns[]" id="concerns"></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-sm-2 background-color">
        <label for="breed"> <h5>Breed</h5></label>
        <input
            type="text"
            class="form-control"
            id="breed"
            name="petBreed[]"
            placeholder="Enter breed"
        />
        </div>
        <div class="form-group col-sm-2 background-color">
        <label for="services"> <h5>Select Services</h5></label>
        <select class="form-control" id="services" name="services[]">
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
            </option><option value="Vaccination">
            Vaccination<span class="price">PHP 300</span>
            </option>
        </select>
        </div>

        <div class="form-group col-sm-2 background-color">
        <label for="vet"> <h5>Select vet</h5></label>
        <select class="form-control" id="vet" name="vet[]">
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
        <label for="birthdate"> <h5>BirthDate</h5></label>
        <input type="date" class="form-control" id="birthdate" name ="petBirthDate[]"/>
        </div>
    </div>

    <div class="select-ex-pet">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#profileModal" style="background-color: #6075d1; float: right;">
        Select Existing Pet
        </button>



        <!-- Profile Modal -->
        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
            <div class="modal-body">

    
                <div class="content p-4 w-100">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Pet No.</th>
                    <th>Pet Name</th>
                    <th>Species</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>4412</td>
                    <td>Max</td>
                    <td>Dog</td>
                    <td> <button type="button" class="Select-button btn btn-primary aria-expanded="false">
                    Select
                    </button>
                    </td>
                    </tr>
                    <tr>
                    <td>4413</td>
                    <td>Max</td>
                    <td>Dog</td>
                    <td> <button type="button" class="Select-button btn btn-primary aria-expanded="false">
                    Select
                    </button>
                    </td>
                    </tr>
                    <tr>
                    <td>4414</td>
                    <td>Kebies</td>
                    <td>Cat</td>
                    <td> <button type="button" class="Select-button btn btn-primary aria-expanded="false">
                    Select
                    </button>
                    </td>

                    </tr>
                </tbody>
                </table>
                </div>
                </div>

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </form>
</div>