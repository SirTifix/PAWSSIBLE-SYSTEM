<?php
  session_start();

  if (!isset($_SESSION['user']) || $_SESSION['user'] != 'veterinarian') {
    header('location: index.php');
  }
  
  require_once('../classes/account.class.php');
  require_once('../classes/booking.class.php');
  require_once('../classes/veterinarian.class.php');
  $vetClass = new Account();
  $vetMethods = new Veterinarian();
  $bookingClass = new Booking();
  
  $vetID = $_SESSION['vetID'];
  $vetData = $vetClass->fetchVet($vetID); 
  $vetPets = $vetMethods->vetAppointments($vetID);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $title = 'Appointment';
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

    <section class="table-con ">
      <section class="customer-info-icon-vet row  ">
        <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
          <div class="col-12 d-flex justify-content-between align-items-center px-3">
            <div class="customer-info-head">
              <h2>Appointment </h2>
            </div>
            <div class="row col-4">
              <div class="row justify-content-start align-items-center">
                <div class="search-container col-auto my-1">
                  <div class="search-wrapper d-flex align-items-center m-0 row">
                    <input type="text" class="search col-10" placeholder="search.....">
                    <i class="search-icon fas fa-search col-2" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="table-wrapper-vet">
        <table id="customer" class="table table table-striped table-hover">
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
            <?php foreach($vetPets as $pets): 
                  $bookingID = $pets['bookingID'];
                  $appointments = $bookingClass->show($bookingID);
            ?>
            <tr>
              <td><?= $appointments['bookingID'] ?></td>
              <td><?= $appointments['firstName'] . " " . $appointments['lastName'] ?></td>
              <td><?= $appointments['bookingDate'] ?></td>
              <td><?= $appointments['bookingTime'] ?></td>
              <td><?= $appointments['status'] ?></td>
              <td class="d-flex justify-content-center align-items-center">
                <div class="crud-btn">
                  <a href="" class="edit-btn" data-bs-toggle="modal" data-bs-target="#modal">
                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                </div>
              </td>
            </tr>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </section>

    <section>
      <div id="modal" class="modal fade" data-bs-backdr="static" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-cont">
            <span data-bs-dismiss="modal" class="close"><i class="fa-solid fa-circle-xmark"></i></span>
            <h3 class="align-self-center mb-4">Personal Information</h3>
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
                    <label for="date">Selected Date and Time</label>
                    <div class="d-flex">
                      <p id="selectedDateTime"></p>
                      <button id="openCalendarModalBtn" class="Calendar-review-button">
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

                <div class="pet-info-form">
                  <h3 class="mb-4 text-center">Pet Information Form</h3>
                  <form>
                    <div class="form-row">
                      <div class="form-group col-sm-2  background-color">
                        <label for="petname">
                          <h5>Pet Name</h5>
                        </label>
                        <input type="text" class="book-form-control" id="petname" placeholder="Enter pet name" />
                      </div>
                      <div class="form-group col-sm-2 background-color">
                        <label for="pettype">
                          <h5>Pet Type</h5>
                        </label>
                        <input type="text" class="book-form-control" id="pettype" placeholder="Enter pet type" />
                      </div>
                      <div class="form-group col-sm-2 background-color">
                        <label for="sex">
                          <h5>Sex</h5>
                        </label>
                        <input type="text" class="book-form-control background-color" id="sex" placeholder="Enter sex" />
                      </div>

                      <div class="form-group col-sm-2">
                        <label for="concerns">
                          <h5>Concerns</h5>
                        </label>
                        <textarea style="height: 200px;" class="form-concerns" id="concerns"></textarea>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-sm-2 background-color">
                        <label for="breed">
                          <h5>Breed</h5>
                        </label>
                        <input type="text" class="book-form-control" id="breed" placeholder="Enter breed" />
                      </div>
                      <div class="form-group col-sm-2 background-color">
                        <label for="services">
                          <h5>Select Services</h5>
                        </label>
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

                      <div class="form-group col-sm-2 background-color">
                        <label for="vet">
                          <h5>Select vet</h5>
                        </label>
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
                        <label for="birthdate">
                          <h5>BirthDate</h5>
                        </label>
                        <input type="date" class="book-form-control" id="birthdate" />
                      </div>
                    </div>

                    <div class="d-flex justify-content-end">
                      <button type="button" id="resched-btn" class="btn btn-primary" data-dismiss="modal">Done</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    require_once('./include/js.php')
    ?>
    <script>
      document.getElementById('resched-btn').addEventListener('click', function() {
        location.reload();
      });
    </script>
  </main>
</body>

</html>