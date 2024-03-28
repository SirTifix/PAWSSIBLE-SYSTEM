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
            <p>Appointments</p>
        </div>
    </section>

   <section class="appointment-con">
    <div class="add-btn-con">
    <div class="add-appointment ">
        <a href="appointment-booking.php"><i class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i>Add Appointment</a>
    </div>
    </div>

    <div class="table-appointment">
    <div class="row justify-content-start align-items-center">
        <div class="col-auto my-1">
            <div class="search-con">
                <input type="text" id="searchInput" class="search-input" placeholder="Search here...">
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
                            <a href="" class="delete-btn" data-bs-toggle="modal"data-bs-target="#deleteDModal">
                                <i class="fa-solid fa-ban pe-4" aria-hidden="true"></i></a>
                        </div>
                        <div class="crud-btn">
                            <a href="" class="edit-btn" data-bs-toggle="modal"data-bs-target="#modal">
                              <i class="fa fa-ellipsis-h pe-5" aria-hidden="true"></i></a>
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
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to cancel
                            this Appointment?</h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id=""
                                style="background-color: #FF0000; border: none;">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

                  <button id="resched-btn" class="float-right">Reschedule Appointment</button> 
                </div>
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

</body>
</html>