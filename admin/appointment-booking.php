<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Appointment';
    require_once('./include/admin-head.appointment.php');
?>
<body>
    <?php
        require_once('./include/admin-header.php')
    ?>
    
    <main>
    <?php
        require_once('./include/admin-sidepanel.php')
    ?>

    <section class="appointment-calendar-con">
      <div class="container">
        <div class="calendar-container container-box">
          <div class="calendar container-content">
            <div class="calendar-header">
              <button id="prevMonthBtn" class="prevnext-btn">&lt;</button>
              <h2 id="currentMonthYear"></h2>
              <button id="nextMonthBtn" class="prevnext-btn">&gt;</button>
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

              <div class="time-slot" data-time="09:00 AM 10:00">
                <div>09:00 AM</div>
                <div>10:00 AM</div>
              </div>

              <div class="time-slot" data-time="10:00 AM 11:00">
                <div>10:00 AM</div>
                <div>11:00 AM</div>
              </div>

              <div class="time-slot" data-time="11:00 AM 12:00">
                <div>11:00 AM</div>
                <div>12:00 PM</div>
              </div>

              <div class="time-slot" data-time="12:00 AM 01:00">
                <div>12:00 PM</div>
                <div>01:00 PM</div>
              </div>

              <div class="time-slot" data-time="01:00 AM 02:00">
                <div>01:00 AM</div>
                <div>02:00 AM</div>
              </div>

              <div class="time-slot" data-time="02:00 AM 03:00">
                <div>02:00 AM</div>
                <div>03:00 AM</div>
              </div>

              <div class="time-slot" data-time="03:00 AM 04:00">
                <div>03:00 AM</div>
                <div>04:00 AM</div>
              </div>

              <div class="time-slot" data-time="04:00 AM 05:00">
                <div>04:00 AM</div>
                <div>05:00 AM</div>
              </div>


            </div>
          </div>
        </div>
      </div>

      <div id="modal" class="modal fade" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <span data-bs-dismiss="modal" class="close"><i class="fa-solid fa-circle-xmark"></i></span>
            <h2>Selected Details</h2>
            <div class="selected-details">
              <p id="selectedDateTime"></p>
              <div class="input-container">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" class="input-appointment" name="firstName" required>
                <span class="underline"></span>
              </div>
              <div class="input-container">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" class="input-appointment" name="lastName" required>
                <span class="underline"></span>
              </div>
              <div class="input-container">
                <label for="email">Email Address:</label>
                <input type="email" id="email" class="input-appointment" name="email" required>
                <span class="underline"></span>
              </div>
              <div class="input-container">
                <label for="contactNumber">Contact Number:</label>
                <input type="tel" id="contactNumber" class="input-appointment" name="contactNumber" required>
                <span class="underline"></span>
              </div>
              <div class="input-container">
                <label for="pets">Number of Pets:</label>
                <select id="pets" class="input-appointment" name="pets">
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

    </section>

    </main>
    <?php
        require_once('./include/js.php')
    ?>
</body>
</html>