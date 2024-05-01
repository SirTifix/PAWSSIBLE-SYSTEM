<?php
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user'] != 'customer') {
  header('location: index.php');
}
require_once('./tools/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Booking';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $title ?>
  </title>
  <link rel="website icon" type="png" href="../customer/assets/img/logo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/booking-style.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/customer-profile.css">
  <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<?php
require_once ('./include/customer-header.php');
?>
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
        <span data-bs-dismiss="modal" class="close"><i class="fa-solid fa-circle-xmark"></i></span>
        <h2>Personal Information</h2>

        <form action="submit-booking.php" class="needs-validation" method="post" novalidate>
          <div class="selected-details">
            <div class="row">
              <div class="input-container col-sm-3">
                <label for="firstName">First Name:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
              </div>

              <div class="input-container col-sm-3">
                <label for="middleName">Middle Name:</label>
                <input type="text" class="form-control" id="middleName" name="middleName">
              </div>

              <div class="input-container col-sm-3">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
              </div>
            </div>

            <div class="row">
              <div class="email-text input-container col-6">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>

              <div class="details col-sm">
                <label for="selectedDateTime">Selected Date and Time:</label>
                <div class="col-sm">
                  <p id="selectedDateTime"></p>
                  <input type="hidden" name="selectedDate" id="selectedDate" value="">
                  <input type="hidden" name="selectedTime" id="selectedTime" value="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="input-container col-6">
                <label for="contactNumber">Contact Number:</label>
                <input type="tel" class="form-control" id="contactNumber" name="contactNumber" required>
              </div>
            </div>

            <div class="row">
              <div class="input-container col-6">
                <label for="pets">Number of Pets:</label>
                <select id="pets" class="form-control" name="pets" required>
                  <option value="">Select Number of Pets</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
          </div>

          <button type="submit" value="Submit" class="btn btn-primary" style="background-color:#2A2F4F; float:right;">
            Next
          </button>
        </form>
      </div>
    </div>

  </div>
  </div>
  </div>


  <?php
  require_once ('./include/footer.php');
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="./assets/script/validation.js"></script>
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

  
</body>

</html>