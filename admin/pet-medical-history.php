<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Customer';
    require_once('./include/admin-head.php');
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
            <p>Pet Medical History</p>  
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
            <div class="hamburger-icon-medhist" id="hamburger-icon-medhist">
                <i class="fa-solid fa-bars"></i>
                <div class="dropdown-medhist" id="dropdown-medhist">
                    <a href="#"><i class="fa-solid fa-circle-chevron-down ms-2 me-4"></i>Add</a>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-around">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-headpet text-center">
                        <th scope="col">Age (weeks)</th>
                        <th scope="col">Date</th>
                        <th scope="col">History</th>
                        <th scope="col">Physical Examination</th>
                        <th scope="col">Diagnosis/Treatment Plan</th>
                        <th scope="col" width="5%">Action</th>
                    </tr>
                </thead>
                <tbody id="petHistoryTableBody">
                    <tr class="table-bodypet ">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="d-flex justify-content-center align-items-center">
                            <div class="crud-btn">
                                <a href="" class="edit-btn" data-bs-toggle="modal"data-bs-target="#modal">
                                    <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="delete-btn" data-bs-toggle="modal"data-bs-target="#deleteMedRecModal">
                                    <i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- This is for Pet vaccine part -->
        <div class="petmed-head m-0 d-flex">
            <h2 class="flex-grow-1 text-center">Vaccine</h2>
            <div class="hamburger-icon" id="hamburger-icon">
                <i class="fa-solid fa-bars"></i>
                <div class="dropdown-vaccine" id="dropdown-vaccine">
                    <a href="#"><i class="fa-solid fa-circle-chevron-down ms-2 me-4"></i>Add</a>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-headpet text-center">
                        <th scope="col">Age (weeks)</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Date Given</th>
                        <th scope="col">Vaccine</th>
                        <th scope="col">Next Date</th>
                        <th scope="col">Veterinarian</th>
                        <th scope="col" width="5%">Action</th>
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
                        <td class="d-flex justify-content-center align-items-center">
                            <div class="crud-btn">
                                <a href="" class="edit-btn" data-bs-toggle="modal"data-bs-target="#modal">
                                    <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="delete-btn" data-bs-toggle="modal"data-bs-target="#deleteVaccineModal">
                                    <i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <section>
        <div id="modal" class="modal fade" data-bs-backdr="static" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-cont">
                <h3 class="align-self-center mb-4">Personal Information</h3>
              <div class="selected-details">
                <div class="row">   

                  <div class="input-container  col-sm-3">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>

                  </div>

                  <div class="input-container col-sm-3">
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required>

                  </div>

                  <div class="details col-sm">
                    <label for="lastName">Selected Date and Time</label>
                    <div class="col-sm">
                      <p id="selectedDateTime"></p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-container col-6">
                      <label for="email">Email Address:</label>
                      <input type="email" id="email" name="email" required>

                    </div>
                  </div>

                  <div class="row">
                    <div class="input-container col-6">
                      <label for="contactNumber">Contact Number:</label>
                      <input type="tel" id="contactNumber" name="contactNumber" required>

                    </div>
                  </div>

                  <div class="pet-info-form background-color-container">
                  <h3 class="mb-4 text-center">Pet Information Form</h3>
                  <form>
                    <div class="form-row">
                      <div class="form-group col-sm-2  background-color">
                        <label for="petname"><h5>Pet Name</h5></label>
                        <input
                          type="text"
                          class="book-form-control"
                          id="petname"
                          placeholder="Enter pet name"
                        />
                      </div>
                      <div class="form-group col-sm-2 background-color">
                        <label for="pettype"> <h5>Pet Type</h5></label>
                        <input
                          type="text"
                          class="book-form-control"
                          id="pettype"
                          placeholder="Enter pet type"
                        />
                      </div>
                      <div class="form-group col-sm-2 background-color">
                        <label for="sex"> <h5>Sex</h5></label>
                        <input
                          type="text"
                          class="book-form-control background-color"
                          id="sex"
                          placeholder="Enter sex"
                        />
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="concerns"> <h5>Concerns</h5></label>
                        <textarea style="height: 200px;" class="form-concerns" id="concerns"></textarea>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-2 background-color">
                        <label for="breed"> <h5>Breed</h5></label>
                        <input
                          type="text"
                          class="book-form-control"
                          id="breed"
                          placeholder="Enter breed"
                        />
                      </div>
                      <div class="form-group col-sm-2">
                        <label for="services"> <h5>Select Services</h5></label>
                        <select class="book-form-control" id="services">
                          <option value="">Choose...</option>
                          <option value="grooming">
                            Grooming<span class="price">PHP 1,000</span>
                          </option>
                          <option value="boarding">
                            Boarding<span class="price">PHP 1,500</span>
                          </option>
                          <option value="training">
                            Training<span class="price">PHP 2,000</span>
                          </option>
                        </select>
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="vet"> <h5>Select vet</h5></label>
                        <select class="book-form-control" id="vet">
                          <option value="">Choose...</option>
                          <option value="vet1">Vet 1</option>
                          <option value="vet2">Vet 2</option>
                          <option value="vet3">Vet 3</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-2 background-color">
                        <label for="birthdate"> <h5>BirthDate</h5></label>
                        <input type="date" class="book-form-control" id="birthdate" />
                      </div>
                    </div>

                    <div class="select-ex-pet">
                      <button
                        type="submit"
                        class="btn"
                        style="background-color: #6075d1; float: right;"
                      >
                        Select Existing Pet
                      </button>
                    </div>
                  </form>
                </div>
                  <div id="petFormsContainer" class="petFormsContainer"></div>

                  <button id="resched-btn">Reschedule Appointment</button> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


        <section>
            <div class="modal fade" id="deleteMedRecModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                            this Medical Record?</h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id=""
                                style="background-color: #FF0000; border: none;">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="modal fade" id="deleteVaccineModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                            this Vaccine?</h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id=""
                                style="background-color: #FF0000; border: none;">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

    <script>
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