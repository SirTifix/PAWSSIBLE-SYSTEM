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
          <p>Pet Medical History</p>
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
                <input type="text" class="form-control-medhist" id="petName" name="petName">
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
                <input type="text" class="form-control-medhist" id="petBirthdate" name="petBirthdate">
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
                <input type="text" class="form-control-medhist" id="petAge" name="petAge">
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
                <input type="text" class="form-control-medhist" id="petBreed" name="petBreed">
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
                <input type="text" class="form-control-medhist" id="petType" name="petType">
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
                <input type="text" class="form-control-medhist" id="petGender" name="petGender">
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
                <input type="text" class="form-control-medhist" id="petWeight" name="petWeight">
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
                <input type="text" class="form-control-medhist" id="petColor" name="petColor">
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
                    </tr>
                </thead>
                <tbody id="petHistoryTableBody">
                    <tr class="table-bodypet ">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- This is for Pet vaccine part -->
        <div class="petmed-head m-0 d-flex">
            <h2 class="flex-grow-1 text-center">Vaccine</h2>
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
                    </tr>
                </thead>
                <tbody id="petHistoryTableBody">
                    <tr class="table-bodypet">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="m-4 d-flex justify-content-around align-items-center">
        <div style="margin-left: 200px;">
            <a href="update-medicalRecord.php" class="transfer-btn btn-secondary">Update Medical Record</a>
        </div>
        <div style="margin-left: 30%;">
            <a href="customer_information.php" class="top-back btn-secondary">Back</a>
        </div>
    </section>

<?php
        require_once('./include/js.php')
    ?>

</body>
</html>