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
      <div class="row mx-5 justify-content-end">
        <div class="crud-btn-add col-4 col-sm-auto">
          <a href="appointment-booking.php" class="crud-text"><i class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i>Add Appointment</a>
        </div>
      </div>
    </section>

    <section class="table-con">
      <section class="customer-info-icon row  ">
        <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
          <div class="col-12 d-flex justify-content-between align-items-center px-3">
            <div class="customer-info-head">
              <h2>Appointment </h2>
            </div>
            <div class="row col-4">
              <div class="row justify-content-start align-items-center">
                <div class="col-auto my-1">
                  <div class="search-con">
                    <input type="text" id="searchInput" class="search-input" placeholder="Search here...">
                  </div>
                </div>
              </div>
            </div>
          </div>


      </section>

      <div class="table-wrapper">
        <table id="customer" class="table table-striped table-sm">
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
                  <a href="" class="delete-btn" data-bs-toggle="modal" data-bs-target="#deleteDModal">
                    <i class="fa-solid fa-ban pe-4" aria-hidden="true"></i></a>
                </div>
                <div class="crud-btn">
                  <a href="" class="edit-btn" data-bs-toggle="modal" data-bs-target="#modal">
                    <i class="fa fa-ellipsis-h pe-5" aria-hidden="true"></i></a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <nav aria-label="...">
          <ul class="pagination justify-content-end">
            <li class="page-item disabled">
              <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <span class="page-link">
                2
                <span class="sr-only">(current)</span>
              </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </section>

    <section>
      <div class="modal fade" id="deleteDModal" tabindex="-1" aria-labelledby="deleteDModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to cancel
              this Appointment?</h4>
            <div class="modal-footer justify-content-between" style="border: none;">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id="" style="background-color: #FF0000; border: none;">Yes</button>
            </div>
          </div>
        </div>
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
                  <div class="form-group col-sm-2">
                    <label for="concerns">
                      <p>Reason for Rescheduling</p>
                    </label>
                    <textarea style="height: 100px;" class="form-concerns" id="concerns"></textarea>
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
                      <button type="button" id="resched-btn" class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">Reschedule Appointment</button>
                    </div>
                    <!-- Confirmation Modal -->
                    <div class="confirmation-modal">
                      <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                          <div class="modal-content text-center">
                            <div class="modal-header">
                              <h5 class="modal-title mx-auto" id="confirmationModalLabel">Your Appointment
                                Rescheduling Request Has Been Sent!
                              </h5>
                              </button>
                            </div>

                            <div class="modal-body align-items-center justify-content-center d-flex flex-column">
                              <i class="fas fa-check-circle text-success confirmation-circle mb-3" style="font-size: 80px;"></i>
                              <p class="booking-number mb-2" style="font-size: 14px;">
                                Your booking number:</p>
                              <p class="mb-4">0001</p>
                            </div>

                            <div class="modal-footer justify-content-center">
                              <button type="button" class="btn btn-secondary" id="finishBookingBtn" data-dismiss="modal" style="color: #8F9CA7; background-color: #EAEFF6; border-radius: 0%; border-style: none;">Finish
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

    </section>
    </section>
  </main>

  <!-- Modal -->
  <div id="calendarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="calendarModalLabel" aria-hidden="true">
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
                  <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal" data-time="08:00 AM - 09:00 AM">
                    <div> 08:00 AM</div>
                    <div> 09:00 AM</div>
                  </div>

                  <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal" data-time="09:00 AM 10:00 AM">
                    <div>09:00 AM</div>
                    <div>10:00 AM</div>
                  </div>

                  <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal" data-time="10:00 AM 11:00 AM">
                    <div>10:00 AM</div>
                    <div>11:00 AM</div>
                  </div>

                  <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal" data-time="11:00 AM 12:00 PM">
                    <div>11:00 AM</div>
                    <div>12:00 PM</div>
                  </div>

                  <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal" data-time="12:00 AM 01:00 PM">
                    <div>12:00 PM</div>
                    <div>01:00 PM</div>
                  </div>

                  <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal" data-time="01:00 AM 02:00 PM">
                    <div>01:00 AM</div>
                    <div>02:00 AM</div>
                  </div>

                  <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal" data-time="02:00 AM 03:00 PM">
                    <div>02:00 AM</div>
                    <div>03:00 AM</div>
                  </div>

                  <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal" data-time="03:00 AM 04:00 PM">
                    <div>03:00 AM</div>
                    <div>04:00 AM</div>
                  </div>

                  <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal" data-time="04:00 AM 05:00 PM">
                    <div>04:00 AM</div>
                    <div>05:00 AM</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end">
            <button type="button" id="done-btn" class="">Done</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Confirmation Modal -->
  <div class="modal fade" id="confirmselectdt" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
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
  <?php
  require_once('./include/js.php')
  ?>
  <script>
    $(document).ready(function() {
      // Function to open the calendar modal
      $("#openCalendarModalBtn").click(function() {
        $('#modal').modal('hide');
        $("#calendarModal").modal('show');
      });

      $('#done-btn').click(function() {
        $('#calendarModal').modal('hide');
        $('#modal').modal('show');
      });

      document.getElementById('finishBookingBtn').addEventListener('click', function() {
        location.reload();
      });

      // Function to handle reschedule appointment button click
      $("#resched-btn").click(function() {
        // Perform any necessary actions here, such as submitting the form data
        // For demonstration purposes, let's just log a message
        console.log("Reschedule appointment button clicked");

        // Show the confirmation modal
        $("#confirmModal").modal('show');
      });

      // Function to handle confirmation of reschedule appointment
      $("#confirmSelectionBtn").click(function() {
        // Perform any necessary actions upon confirmation
        // For demonstration purposes, let's reload the page
        location.reload();
      });
    });
  </script>

  <script>
    // Example JavaScript to handle pagination
    document.getElementById('prev').addEventListener('click', function(event) {
      // Handle "Previous" button click event
      event.preventDefault();
      // Perform necessary actions to show previous page
      // For example, update table data, hide/show appropriate rows, etc.
      console.log('Previous button clicked');
    });

    document.getElementById('next').addEventListener('click', function(event) {
      // Handle "Next" button click event
      event.preventDefault();
      // Perform necessary actions to show next page
      // For example, update table data, hide/show appropriate rows, etc.
      console.log('Next button clicked');
    });
  </script>
</body>

</html>