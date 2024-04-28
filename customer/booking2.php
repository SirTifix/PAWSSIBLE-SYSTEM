<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="website icon" type="png" href="./assets/img/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/booking-style.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/customer-profile.css">
  <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<?php 
session_start();
?>
<h2 class="mb-4">Pet Information Form <?php echo $_SESSION['noofpets'].' pets';?> </h2>
<?php for ($i = 0; $i < $_SESSION['noofpets']; $i++) {?>
<div class="pet-info-form background-color-container">
    
    <form action="submit-booking2.php" method="post" >
        <div class="form-row">
        <input type="hidden" name="pet_index[]" value="<?php echo $i; ?>">
        <input type="hidden" name="bookingID[]" value="<?php echo isset($_GET['bookingID']) ? $_GET['bookingID'] : ''; ?>">
            <div class="form-group col-sm-2  background-color">
                <label for="petName">
                    <h5>Pet Name</h5>
                </label>
                <input type="text" class="form-control" id="petname_<?php echo $i; ?>" name="petName[]" 
                    placeholder="Enter pet name" />
            </div>
            <div class="form-group col-sm-2 background-color">
                <label for="petType_<?php echo $i; ?>">
                    <h5>Pet Type</h5>
                </label>
                <input type="text" class="form-control" id="pettype_<?php echo $i; ?>" name="petType[]"
                    placeholder="Enter pet type" />
            </div>
            <div class="form-group col-sm-2 background-color">
                <label for="sex_<?php echo $i; ?>">
                    <h5>Sex</h5>
                </label>
                <select class="form-control" id="services_<?php echo $i; ?>" name="sex[]">
                    <option value="">Choose...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group col-sm-2">
                <label for="concerns_<?php echo $i; ?>">
                    <h5>Concerns</h5>
                </label>
                <textarea style="height: 100%;" class="form-concerns" name="concerns[]"
                    id="concerns_<?php echo $i; ?>"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-2 background-color">
                <label for="breed_<?php echo $i; ?>">
                    <h5>Breed</h5>
                </label>
                <input type="text" class="form-control" id="breed_<?php echo $i; ?>" name="petBreed[]"
                    placeholder="Enter breed" />
            </div>
            <div class="form-group col-sm-2 background-color">
                <label for="services_<?php echo $i; ?>">
                    <h5>Select Services</h5>
                </label>
                <select class="form-control" id="services_<?php echo $i; ?>" name="services[]">
                    <option value="">Choose...</option>
                    <?php
                    require_once '../classes/service.class.php';
                    $service = new Service();
                    $services = $service->show();
                    foreach ($services as $service) {
                        echo '<option value="' . $service['serviceID'] . '">' . $service['serviceName'] . ' - &#8369;' . $service['servicePrice'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group col-sm-2 background-color">
                <label for="vet_<?php echo $i; ?>">
                    <h5>Select vet</h5>
                </label>
                <select class="form-control" id="vet_<?php echo $i; ?>" name="vet[]">
                    <option value="">Choose...</option>
                    <?php
                    require_once '../classes/veterinarian.class.php';
                    $vet = new Veterinarian();
                    $vets = $vet->show();
                    foreach ($vets as $vet) {
                        echo '<option value="' . $vet['vetID'] . '">Dr. ' . $vet['vetFirstname'] . ' ' . $vet['vetLastname'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-2 background-color">
                <label for="birthdate_<?php echo $i; ?>">
                    <h5>BirthDate</h5>
                </label>
                <input type="date" class="form-control" id="birthdate_<?php echo $i; ?>" name="petBirthDate[]" />
            </div>
        </div>

        <div class="select-ex-pet">
            <button type="button" class="btn btn-primary select-button" data-bs-toggle="modal" data-bs-target="#profileModal"
                style="background-color: #6075d1; float: right;">
                Select Existing Pet
            </button>

            <!-- Profile Modal -->
            <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel"
                aria-hidden="true">
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
                                            <td> <button type="button"
                                                    class="Select-button btn btn-primary aria-expanded=" false">
                                                    Select
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4413</td>
                                            <td>Max</td>
                                            <td>Dog</td>
                                            <td> <button type="button"
                                                    class="Select-button btn btn-primary aria-expanded=" false">
                                                    Select
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4414</td>
                                            <td>Kebies</td>
                                            <td>Cat</td>
                                            <td> <button type="button"
                                                    class="Select-button btn btn-primary aria-expanded=" false">
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

<?php } ?>

<div>
    <button type="submit" value="Submit" class="btn btn-primary btn-lg" style="background-color:#2A2F4F; float:right; margin: 2em 1em">
            Finish Booking
    </button>
</div>

<script src="./assets/script/fetch.js"></script>
<script>
    $(document).ready(function () {
      $('#anotherModal').on('show.bs.modal', function (e) {
        $('.modal').modal('hide');
      });
    });


    document.getElementById('finishBookingBtn').addEventListener('click', function () {
      location.reload();
    });
  </script>
  

</body>
</html>

