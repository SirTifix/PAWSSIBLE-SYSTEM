<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Booking';
require_once ('./include/customer-header.php');
require_once ('./tools/functions.php');
?>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $title ?>
  </title>
  <link rel="website icon" type="png" href="./assets/img/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/booking-style.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/customer-profile.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

  <div class="avail-date">
    <h2> <strong> AVAILABLE DATE </strong></h2>
  </div>
  <div class="avail-time">
    <h2> <strong> AVAILABLE TIME </strong></h2>
  </div>
  <div class="container">
    <div class="calendar-container container-box">
      <div class="calendar container-content">
        <div class="calendar-header">
          <button id="prevMonthBtn">&lt;</button>
          <h2 id="currentMonthYear"></h2>
          <button id="nextMonthBtn">&gt;</button>
        </div>
        <div class="days-container">
          <div style="color: #5263AB;" class="days-of-week">
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
          <div class="separator"></div> <!-- Separator between days and dates -->
          <div class="calendar-body" id="calendarBody">

          </div>
        </div>
      </div>
    </div>

    <div class="time-container container-box">
      <div class="time-slots-container container-content">
        <h3 class="time-slot-heading"> Time </h3>
        <h6 class="style-date" style="text-align: center; color: #5263AB;"> Select Time Slot</h6>
        <div class="separator"></div>
        <div class="time-slots">
          <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
            data-time="08:00 AM - 09:00 AM">
            <div> 08:00 AM</div>
            <div> 09:00 AM</div>
          </div>

          <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
            data-time="09:00 AM 10:00 AM">
            <div>09:00 AM</div>
            <div>10:00 AM</div>
          </div>

          <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
            data-time="10:00 AM 11:00 AM">
            <div>10:00 AM</div>
            <div>11:00 AM</div>
          </div>

          <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
            data-time="11:00 AM 12:00 PM">
            <div>11:00 AM</div>
            <div>12:00 PM</div>
          </div>

          <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
            data-time="12:00 AM 01:00 PM">
            <div>12:00 PM</div>
            <div>01:00 PM</div>
          </div>

          <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
            data-time="01:00 AM 02:00 PM">
            <div>01:00 AM</div>
            <div>02:00 AM</div>
          </div>

          <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
            data-time="02:00 AM 03:00 PM">
            <div>02:00 AM</div>
            <div>03:00 AM</div>
          </div>

          <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
            data-time="03:00 AM 04:00 PM">
            <div>03:00 AM</div>
            <div>04:00 AM</div>
          </div>

          <div class="time-slot" data-bs-toggle="modal" type="button" data-bs-target="#modal"
            data-time="04:00 AM 05:00 PM">
            <div>04:00 AM</div>
            <div>05:00 AM</div>
          </div>


        </div>
      </div>
    </div>
  </div>

  <div id="modal" class="modal fade" data-bs-backdr="static" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-cont">
        <h2>Personal Information</h2>


        <div class="selected-details">
          <div class="row">

            <div class="input-container  col-sm-3">
              <label for="firstName">First Name:</label>
              <input type="text" id="firstName" name="firstName" required>
            </div>

            <div class="input-container col-sm-3">
              <label for="middleName">Middle Name:</label>
              <input type="text" id="middleName" name="middleName">
            </div>

            <div class="input-container col-sm-3">
              <label for="lastName">Last Name:</label>
              <input type="text" id="lastName" name="lastName" required>
            </div>

            <div class="row">
              <div class="email-text input-container col-6">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
              </div>

              <div class="details col-sm">
                <label for="lastName">Selected Date and Time</label>
                <div class="col-sm">
                  <p id="selectedDateTime"></p>
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
                  <option value="0">Select Number of Pets</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>

            <div id="petFormsContainer" class="petFormsContainer"></div>

            <button type="submit" name= "REQUEST_METHOD" id="submitBtn" class="btn btn-primary" data-toggle="modal"
              data-target="#confirmationModal" style="background-color:#2A2F4F" class="float-right">
              Book Appointment
            </button>


            <!-- Confirmation Modal -->
            <div class="confirmation-modal">
              <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog"
                aria-labelledby="confirmationModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content text-center">
                    <div class="modal-header">
                      <h5 class="modal-title mx-auto" id="confirmationModalLabel">Appointment Confirmation</h5>
                    </div>

                    <div class="modal-body align-items-center justify-content-center d-flex flex-column">
                      <i class="fas fa-check-circle text-success confirmation-circle mb-3" style="font-size: 80px;"></i>
                      <p class="booking-number mb-2" style="font-size: 14px;">Your booking number:</p>
                      <p class="mb-4">0001</p>
                    </div>

                    <div class="modal-footer justify-content-center">
                      <button type="button" class="btn btn-secondary" id="finishBookingBtn" data-dismiss="modal"
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


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="./assets/script/calendar.js"></script>

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

  <?php
  require_once ('./include/footer.php');
  ?>
</body>

</html>