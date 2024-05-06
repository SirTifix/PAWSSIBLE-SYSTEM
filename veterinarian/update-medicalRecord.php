<?php
  session_start();

  if (!isset($_SESSION['user']) || $_SESSION['user'] != 'veterinarian') {
    header('location: index.php');
  }

  require_once ('../classes/medical-history.class.php');
require_once ('../classes/pet.class.php');
require_once('../classes/account.class.php');
$petClass = new Pet();
$vetClass = new Account();
$recordClass = new MedicalHistory();  

  $petID = $_GET['petId'];
  $vetID = $_SESSION['vetID'];
  $vetData = $vetClass->fetchVet($vetID); 
  $pet = $petClass->fetch($petID);
$medRecords = $recordClass->showRecord1($petID);
$vacRecords = $recordClass->showRecord2($petID);
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Customer';
    require_once('./include/vet-head.php');
?>
<body>
    <?php
        require_once('./include/vet-header.php')
    ?>
    <main>
    <?php
        require_once('./include/vet-sidepanel.php')
    ?>

    <section class="veterinarian-con">
      <div class="d-flex justify-content-between align-items-center">
        <div class="veterinarian-head">
          <p>Update Medical History</p>
        </div>
      </div>
    </section>

    <section class="pet-medhist-con">
        <div class="pet-medhist-content">
        <div class="petmed-head">
            <h2 class="text-center">Pet Information</h2>
        </div>
        <div class="petmed-body d-flex justify-content-around">

<div class="form-body p-1">
    <div class="d-flex mt-3">
        <label for="petName" class="form-label-medhist fw-bold">Pet Name:</label>
        <input type="text" class="form-control-medhist" id="petName" name="petName" value="<?php echo $pet['petName']; ?>" readonly>
        <?php
            if(isset($_POST['petName']) && !validate_field($_POST['petName'])){
        ?>
                <p class="text-danger my-1">Pet name is required</p>
        <?php
            }
        ?>
    </div>
    <div class="d-flex">
        <label for="petBirthdate" class="form-label-medhist fw-bold">Birth Date:</label>
        <input type="text" class="form-control-medhist" id="petBirthdate" name="petBirthdate" value="<?php echo $pet['petBirthdate']; ?>" readonly>
        <?php
            if(isset($_POST['petBirthdate']) && !validate_field($_POST['petBirthdate'])){
        ?>
                <p class="text-danger my-1">Pet birthdate is required</p>
        <?php
            }
        ?>
    </div>
    <div class="d-flex">
        <label for="petAge" class="form-label-medhist fw-bold">Pet Age:</label>
        <input type="text" class="form-control-medhist" id="petAge" name="petAge" value="<?php echo $pet['petAge']; ?>" readonly>
        <?php
            if(isset($_POST['petAge']) && !validate_field($_POST['petAge'])){
        ?>
                <p class="text-danger my-1">Pet age is required</p>
        <?php
            }
        ?>
    </div>
    <div class="d-flex">
        <label for="petBreed" class="form-label-medhist fw-bold">Breed:</label>
        <input type="text" class="form-control-medhist" id="petBreed" name="petBreed" value="<?php echo $pet['petBreed']; ?>" readonly>
        <?php
            if(isset($_POST['petBreed']) && !validate_field($_POST['petBreed'])){
        ?>
                <p class="text-danger my-1">Pet breed is required</p>
        <?php
            }
        ?>
    </div>
    <div class="d-flex">
        <label for="petType" class="form-label-medhist fw-bold">Pet Type:</label>
        <input type="text" class="form-control-medhist" id="petType" name="petType" value="<?php echo $pet['petType']; ?>" readonly>
        <?php
            if(isset($_POST['petType']) && !validate_field($_POST['petType'])){
        ?>
                <p class="text-danger my-1">Pet type is required</p>
        <?php
            }
        ?>
    </div>
    <div class="d-flex">
        <label for="petGender" class="form-label-medhist fw-bold">Gender:</label>
        <input type="text" class="form-control-medhist" id="petGender" name="petGender" value="<?php echo $pet['petGender']; ?>" readonly>
        <?php
            if(isset($_POST['petGender']) && !validate_field($_POST['petGender'])){
        ?>
                <p class="text-danger my-1">Pet gender is required</p>
        <?php
            }
        ?>
    </div>
    <div class="d-flex">
        <label for="petWeight" class="form-label-medhist fw-bold">Weight:</label>
        <input type="text" class="form-control-medhist" id="petWeight" name="petWeight" value="<?php echo $pet['petWeight']; ?>" readonly>
        <?php
            if(isset($_POST['petWeight']) && !validate_field($_POST['petWeight'])){
        ?>
                <p class="text-danger my-1">Pet weight is required</p>
        <?php
            }
        ?>
    </div>
    <div class="d-flex">
        <label for="petColor" class="form-label-medhist fw-bold">Color:</label>
        <input type="text" class="form-control-medhist" id="petColor" name="petColor" value="<?php echo $pet['petColor']; ?>" readonly>
        <?php
            if(isset($_POST['petColor']) && !validate_field($_POST['petColor'])){
        ?>
                <p class="text-danger my-1">Pet color is required</p>
        <?php
            }
        ?>
    </div>
</div>

<div class="position-relative mt-5">
    <input type="file" id="fileInput" style="display: none;" accept="image/*">
    <img src="./assets/img/upload-photo.png" alt="Profile Picture" class="profile-pic" id="profilePic">
</div>
</div>

<!-- This is for Pet medical history part -->
<div class="petmed-head d-flex">
    <h2 class="flex-grow-1 text-center">Medical History</h2>
    <div class="hamburger-icon-medhist" id="hamburger-icon-medhist">
        <i class="fa-solid fa-bars"></i>
        <div class="dropdown-medhist" id="dropdown-medhist">
            <a href="" data-bs-toggle="modal"data-bs-target="#addMedRecModal">
                <i class="fa-solid fa-circle-chevron-down ms-2 me-4"></i>Add</a>
        </div>
    </div>
</div>

<div class="d-flex justify-content-around">
    <table class="table table-bordered">
        <thead>
            <tr class="table-headpet text-center">
                <th scope="col">Age (weeks)</th>
                <th scope="col">Date</th>
                <th scope="col">Veterinarian</th>
                <th scope="col">History</th>
                <th scope="col">Physical Examination</th>
                <th scope="col">Diagnosis/Treatment Plan</th>
                <th scope="col" width="5%">Action</th>
            </tr>
        </thead>
        <tbody id="petHistoryTableBody">
        <?php if ($medRecords): ?>
            <tr class="table-bodypet ">
                        <td><?php echo $medRecords['ageWeeks']; ?></td>
                        <td><?php echo $medRecords['recordDate'] ?></td>
                        <td><?php echo $medRecords['veterinarian'] ?></td>
                        <td><?php echo $medRecords['recordHistory'] ?></td>
                        <td><?php echo $medRecords['recordExamination'] ?></td>
                        <td><?php echo $medRecords['recordTreatment'] ?></td>
                <td class="d-flex justify-content-center align-items-center">
                    <div class="crud-btn">
                        <a href="" class="delete-btn" data-bs-toggle="modal"data-bs-target="#deleteMedRecModal<?php echo $medRecords['recordID']?>">
                            <i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                    </div>

                    <div class="modal fade" id="deleteMedRecModal<?php echo $medRecords['recordID']?>" tabindex="-1" aria-labelledby="deleteDModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                                this Medical Record?</h4>
                            <div class="modal-footer justify-content-between" style="border: none;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" id="confirmDelete" onclick="deleteMedRecord(<?php echo $medRecords['recordID']?>)" data-customer-id=""
                                    style="background-color: #FF0000; border: none;">Delete</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- This is for Pet vaccine part -->
<div class="petmed-head m-0 d-flex">
    <h2 class="flex-grow-1 text-center">Vaccine</h2>
    <div class="hamburger-icon" id="hamburger-icon">
        <i class="fa-solid fa-bars"></i>
        <div class="dropdown-vaccine" id="dropdown-vaccine">
            <a href="#" data-bs-toggle="modal"data-bs-target="#addVaccineModal">
                <i class="fa-solid fa-circle-chevron-down ms-2 me-4"></i>Add</a>
        </div>
    </div>
</div>

<div class="d-flex justify-content-around">
    <table class="table table-bordered">
        <thead>
            <tr class="table-headpet text-center">
                <th scope="col">Age (weeks)</th>
                <th scope="col">Veterinarian</th>
                <th scope="col">Vaccine</th>
                <th scope="col">Vaccine Category</th>
                <th scope="col">Date Given</th>
                <th scope="col">Due Date</th>
                <th scope="col" width="5%">Action</th>
            </tr>
        </thead>
        <tbody id="petHistoryTableBody">
        <?php if ($vacRecords): ?>
            <tr class="table-bodypet">
                        <td><?php echo $vacRecords['ageVaccine'] ?></td>
                        <td><?php echo $vacRecords['veterinarian'] ?></td>
                        <td><?php echo $vacRecords['vaccine'] ?></td>
                        <td><?php echo $vacRecords['category'] ?></td>
                        <td><?php echo $vacRecords['dateGiven'] ?></td>
                        <td><?php echo $vacRecords['next_date'] ?></td> 
                <td class="d-flex justify-content-center align-items-center">
                    <div class="crud-btn">
                        <a href="" class="delete-btn" data-bs-toggle="modal" data-bs-target="#deleteVaccineModal<?php echo $vacRecords['vaccineRecordID']?>">
                            <i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                    </div>

                    <div class="modal fade" id="deleteVaccineModal<?php echo $vacRecords['vaccineRecordID']?>" tabindex="-1" aria-labelledby="deleteDModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                                    this Vaccine?</h4>
                                <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" id="confirmDelete" onclick="deleteVacRecord(<?php echo $vacRecords['vaccineRecordID']?>)" data-customer-id=""
                                        style="background-color: #FF0000; border: none;">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<section class="">
    <div class="d-flex justify-content-end">
        <a href="customer.php" class="top-back btn-secondary">Back</a>
    </div>
</section>

<!-- Medical Record Add and Update Modal -->
<section>
    <div class="modal fade" id="addMedRecModal" tabindex="-1" aria-labelledby="addDModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center" 
                style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                    <h2 class="modal-title">Medical History</h2>
                    </button>
                </div>
                <div>
                    <form action="add-medical-history.php" method="post">
                        <div class="row p-3">
                            <div class="col-6">
                            <input type="hidden" class="form-control-medHis" id="petId" name="petId" value="<?php echo $petID; ?>" required>
                                <div class="d-flex mt-3">
                                    <label for="age" class="form-label-medHis fw-bold">Age(weeks):</label>
                                    <input type="text" class="form-control-medHis" id="age" name="age" required>
                                </div>

                                <div class="d-flex">
                                    <label for="Date" class="form-label-medHis fw-bold">Date:</label>
                                    <input type="Date" class="form-control-medHis" id="Date" name="Date" required>
                                </div>
                                
                                <div class="d-flex">
                                    <label for="veterinarian" class="form-label-medHis fw-bold">Veterinarian:</label>
                                    <select class="form-control" id="veterinarian" name="veterinarian" required>
                                        <option value="">Choose...</option>
                                        <?php
                                        require_once '../classes/veterinarian.class.php';
                                        $vet = new Veterinarian();
                                        $vets = $vet->show();
                                        foreach ($vets as $vet) {
                                            echo '<option value="' . $vet['vetFirstname'] . ' ' . $vet['vetLastname'] . '">Dr. ' . $vet['vetFirstname'] . ' ' . $vet['vetLastname'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="d-flex">
                                    <label for="history" class="form-label-medHis fw-bold">History:</label>
                                    <textarea class="form-control-medHis" id="history" name="history" rows="6" required></textarea>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="d-flex mt-3">
                                    <label for="physicalExam" class="form-label-medHis fw-bold">Physical Examination:</label>
                                    <textarea class="form-control-medHis" id="physicalExam" name="physicalExam" rows="6" required></textarea>
                                </div>

                                <div class="d-flex">
                                    <label for="diagnosis" class="form-label-medHis fw-bold">Diagnosis/ Treatment Plan:</label>
                                    <textarea class="form-control-medHis" id="diagnosis" name="diagnosis" rows="6" required></textarea>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer justify-content-between" style="border: none;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modal fade" id="updateMedRecModal" tabindex="-1" aria-labelledby="updateDModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center" 
                style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                    <h2 class="modal-title">Medical History</h2>
                    </button>
                </div>
                <div>
                    <form action="" method="post">
                        <div class="row p-3">
                            <div class="col-6">
                                <div class="d-flex mt-3">
                                    <label for="age" class="form-label-medHis fw-bold">Age(weeks):</label>
                                    <input type="text" class="form-control-medHis" id="age" name="age" required>
                                </div>

                                <div class="d-flex">
                                    <label for="Date" class="form-label-medHis fw-bold">Date:</label>
                                    <input type="Date" class="form-control-medHis" id="Date" name="Date" required>
                                </div>
                                
                                <div class="d-flex">
                                    <label for="veterinarian" class="form-label-medHis fw-bold">Veterinarian:</label>
                                    <input type="text" class="form-control-medHis" id="veterinarian" name="veterinarian" required>
                                </div>

                                <div class="d-flex">
                                    <label for="history" class="form-label-medHis fw-bold">History:</label>
                                    <textarea class="form-control-medHis" id="history" name="history" rows="6" required></textarea>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="d-flex mt-3">
                                    <label for="physicalExam" class="form-label-medHis fw-bold">Physical Examination:</label>
                                    <textarea class="form-control-medHis" id="physicalExam" name="physicalExam" rows="6" required></textarea>
                                </div>

                                <div class="d-flex">
                                    <label for="diagnosis" class="form-label-medHis fw-bold">Diagnosis/ Treatment Plan:</label>
                                    <textarea class="form-control-medHis" id="diagnosis" name="diagnosis" rows="6" required></textarea>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer justify-content-between" style="border: none;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="">Save</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vaccine Add and Update Modal -->
<section>
    <div class="modal fade" id="addVaccineModal" tabindex="-1" aria-labelledby="addDModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center" 
                style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                    <h2 class="modal-title">Vaccine</h2>
                    </button>
                </div>
                <div>
                    <form action="add-vaccine-record.php" method="post">
                        <div class="mt-4 mx-5">
                        <input type="hidden" class="form-control-medHis" id="petId" name="petId" value="<?php echo $petID; ?>" required>
                                <div class="d-flex">
                                    <label for="age" class="form-label-vaccine fw-bold p-2">Age(weeks):</label>
                                    <input type="text" class="form-control-vaccine p-2" id="age" name="age" required>
                                </div>
                                
                                <div class="d-flex">
                                    <label for="veterinarian" class="form-label-vaccine fw-bold">Veterinarian:</label>
                                    <select class="form-control" id="veterinarian" name="veterinarian" required>
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

                                <div class="d-flex">
                                    <label for="vaccine" class="form-label-vaccine fw-bold">Vaccine:</label>
                                    <select class="form-select form-control-vaccine" id="vaccine" name="vaccine" required>
                                        <option value="">Select Vaccine</option>
                                        <?php
                                                                    require_once '../classes/vaccine.class.php';
                                                                    $vet = new Vaccine();
                                                                    $vets = $vet->show();
                                                                    foreach ($vets as $vet) {
                                                                        echo '<option value="' . $vet['vaccineName'] . '">' . $vet['vaccineName'] . '</option>';
                                                                    }
                                                                    ?>
                                    </select>
                                </div>

                                <div class="d-flex">
                                    <label for="vaccineCateg" class="form-label-vaccine fw-bold">Vaccine Category:</label>
                                    <select class="form-select form-control-vaccine" id="vaccineCateg" name="vaccineCateg" required>
                                        <option value="">Select Vaccine Category</option>
                                        <option value="Primary Series">Primary Series</option>
                                        <option value="Annual Boosters">Annual Boosters</option>
                                        <option value="Deworming">Deworming</option>
                                    </select>
                                </div>

                                <div class="d-flex">
                                    <label for="date" class="form-label-vaccine fw-bold">Date Given:</label>
                                    <input type="date" class="form-control-vaccine" id="date" name="date" required>
                                </div>

                                <div class="d-flex">
                                    <label for="dueDate" class="form-label-vaccine fw-bold">Due Date:</label>
                                    <div class="form-control-vaccine" id="dueDate">Due date automatically will be display after select the date given</div>
                                </div>

                        </div>
                </div>
                <div class="modal-footer justify-content-between" style="border: none;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="">Add</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modal fade" id="updateVaccineModal" tabindex="-1" aria-labelledby="updateDModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center" 
                style="background-color: #303962; color: #fff; border-bottom: none; padding: 1rem;">
                    <h2 class="modal-title">Vaccine</h2>
                    </button>
                </div>
                <div>
                    <form action="" method="post">
                        <div class="mt-4 mx-5">
                                <div class="d-flex">
                                    <label for="age" class="form-label-vaccine fw-bold p-2">Age(weeks):</label>
                                    <input type="text" class="form-control-vaccine p-2" id="age" name="age" required>
                                </div>
                                
                                <div class="d-flex">
                                    <label for="veterinarian" class="form-label-vaccine fw-bold">Veterinarian:</label>
                                    <input type="text" class="form-control-vaccine" id="veterinarian" name="veterinarian" required>
                                </div>

                                <div class="d-flex">
                                    <label for="vaccine" class="form-label-vaccine fw-bold">Vaccine:</label>
                                    <select class="form-select form-control-vaccine" id="vaccine" name="vaccine" required>
                                        <option value="">Select Vaccine</option>
                                        <option value="vaccine1">Vaccine 1</option>
                                        <option value="vaccine2">Vaccine 2</option>
                                        <option value="vaccine3">Vaccine 3</option>
                                    </select>
                                </div>

                                <div class="d-flex">
                                    <label for="vaccineCateg" class="form-label-vaccine fw-bold">Vaccine Category:</label>
                                    <select class="form-select form-control-vaccine" id="vaccineCateg" name="vaccineCateg" required>
                                        <option value="">Select Vaccine Category</option>
                                        <option value="vaccine1">Primary Series</option>
                                        <option value="vaccine2">Annual Boosters</option>
                                        <option value="vaccine3">Deworming</option>
                                    </select>
                                </div>

                                <div class="d-flex">
                                    <label for="date" class="form-label-vaccine fw-bold">Date Given:</label>
                                    <input type="date" class="form-control-vaccine" id="date" name="date" required>
                                </div>

                                <div class="d-flex">
                                    <label for="dueDate" class="form-label-vaccine fw-bold">Due Date:</label>
                                    <div class="form-control-vaccine" id="dueDate">Due date automatically will be display after select the date given</div>
                                </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between" style="border: none;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" style="background-color: #303962; border: none;" onclick="">Add</button>
                </div>
            </div>
        </div>
    </div>
</section>

</section>


    <script>
        function deleteMedRecord(vaccineID) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert('Medical record deleted successfully!');
                            window.location.reload();
                        } else {
                            alert('Failed to delete record.');
                        }
                    }
                };
                xhr.open('POST', 'delete-med-record.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('recordID=' + vaccineID);
            }

            function deleteVacRecord(vaccineID) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            alert('Vaccine record deleted successfully!');
                            window.location.reload();
                        } else {
                            alert('Failed to delete record.');
                        }
                    }
                };
                xhr.open('POST', 'delete-vaccine-record.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhr.send('vaccineRecordID=' + vaccineID);
            }

        document.getElementById("hamburger-icon-medhist").addEventListener("click", function() {
        this.classList.toggle("active");
        });

        window.addEventListener("click", function(event) {
            if (!event.target.closest("#hamburger-icon-medhist")) {
                var hamburgerIconMedHist = document.getElementById("hamburger-icon-medhist");
                if (hamburgerIconMedHist.classList.contains("active")) {
                    hamburgerIconMedHist.classList.remove("active");
                }
            }
        });

        document.getElementById("hamburger-icon").addEventListener("click", function() {
        this.classList.toggle("active");
        });

        window.addEventListener("click", function(event) {
            if (!event.target.closest("#hamburger-icon")) {
                var hamburgerIcon = document.getElementById("hamburger-icon");
                if (hamburgerIcon.classList.contains("active")) {
                    hamburgerIcon.classList.remove("active");
                }
            }
        });
    </script>


<?php
        require_once('./include/js.php')
    ?>

</body>
</html>