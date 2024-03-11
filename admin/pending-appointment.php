<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Appointment';
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
            <a href="./appointment.php" class="appointment-btn" id="appointmentLink"><i class="far fa-calendar-check"></i>Appointment</a>
        </div>
        <div class="col-auto my-1">
            <div class="d-flex align-items-center">
                <a href="./pending-appointment.php" class="appointment-btn appointment-active" id="pendingLink"><i class="far fa-clock"></i>Pending</a>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="d-flex justify-content-center align-items-center">
                    <div class="crud-btn">
                        <a href="" class="check-btn"><i class="fa-regular fa-circle-check m-1" aria-hidden="true"></i></a>
                    </div>
                    <div class="crud-btn">
                        <a href="" class="delete-btn" data-bs-toggle="modal"data-bs-target="#deleteDModal">
                        <i class="fa-solid fa-xmark" aria-hidden="true"></i></a>
                    </div>
                    <div class="crud-btn">
                        <a href="" class="" data-bs-toggle="modal"data-bs-target="#modal">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

   
    </div>
   </section>

   <section>
            <div class="modal fade" id="deleteDModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to decline
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
        <div id="modal" class="modal fade" data-bs-backdr="static" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-cont">
                
                <h2 class="align-self-center mb-3">Review Pending Appointment</h2>
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

                  <button id="backBtn">Back</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </section>

        </section>

    </main>
    <?php
        require_once('./include/js.php')
    ?>

    <script>
        document.getElementById('backBtn').addEventListener('click', function() {
        window.location.href = './pending-appointment.php';
    });
    </script>

</body>
</html>