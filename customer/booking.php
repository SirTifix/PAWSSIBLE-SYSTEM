<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Pawssible Solutions Veterinary';
    require_once('./include/home-header.php');
    require_once('./tools/functions.php');
?>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title?></title>
  <link rel="stylesheet" href="./assets/css/booking-style.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <section>
    <div class="social-icons">
      <a href="#" title="facebook">
        <i class="fa-brands fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="#" title="instagram">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
      <a href="#" title="twitter">
        <i class="fa-sharp fa-solid fa-x" aria-hidden="true"></i>
      </a>
  </section>

  <div style="position: absolute; bottom: 69vh; left: 34vh; color: #FFFFFF;">
    <h2> <strong> AVAILABLE DATE </strong></h2>
  </div>
  <div style="position: absolute; bottom: 69vh; left: 107vh; color: #2A2F4F;">
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
            data-time="08:00 AM - 09:00 AM">08:00 AM
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

  <div id="modal" class="modal fade" data-bs-backdr ="static" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <span data-bs-dismiss="modal" class="close">&times;</span>
        <h2>Selected Details</h2>
        <div class="selected-details">
          <p id="selectedDateTime"></p>
          <div class="input-container">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            <span class="underline"></span>
          </div>
          <div class="input-container">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            <span class="underline"></span>
          </div>
          <div class="input-container">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
            <span class="underline"></span>
          </div>
          <div class="input-container">
            <label for="contactNumber">Contact Number:</label>
            <input type="tel" id="contactNumber" name="contactNumber" required>
            <span class="underline"></span>
          </div>
          <div class="input-container">
            <label for="pets">Number of Pets:</label>
            <select id="pets" name="pets">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <span class="underline"></span>
          </div>
          <div id="petFormsContainer" class="petFormsContainer"></div>
          <button id="submitBtn">Submit</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/9ea2f828e7.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script src="./assets/script/calendar.js"></script>

</body>

</html>