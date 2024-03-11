<!DOCTYPE html>
<html lang="en">
<?php
    
    require_once('./include/vet-head.php');
?>

<body>
  <?php
        require_once('./include/vet-header.php')
    ?>
   <?php
        require_once('./include/vet-sidepanel.php')
    ?>
    


<section class="customer-info-icon row">
    <div class="head-form col-12 d-flex justify-content-between align-items-center">
        <div class="icon-circle">
            <i class="icon fa fa-solid  fa-user mr-2 mt-1" style="color: white;"></i> 
        </div>
        <div class=" col-12 d-flex justify-content-between align-items-center px-3">
            <div class="customer-info-head">
                <h2>Calendar</h2>
            </div>
        </div>
    </div>    
</section>
  <div class="white-container d-flex justify-content-center align-items-center">
  
    <div class="calendar ">
      <div class="calendar-controls d-flex justify-content-center align-items-center">
        <button onclick="previousMonth()"><</button>
        <h3 id="month-name"></h3>
        <button onclick="nextMonth()">></button>
        <input type="number" id="year" value="2024">
        <button onclick="generateCalendar()">Generate Calendar</button>
      </div>
          <table id="calendar">
            <thead>
              <tr>
                <th colspan="7">Calendar</th>
              </tr>
              <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>

  </div>
<div id="popup" class="popup">
    <div class="popup-content px-4">
        <span class="close" onclick="closePopup()">&times;</span>
        <p id="popup-date"></p>
        <label for="unavailableStart">Unavailable from:</label>
        <select id="unavailableStart">
            <option value="08">08:00 AM</option>
            <option value="09">09:00 AM</option>
            <option value="10">10:00 AM</option>
            <option value="11">11:00 AM</option>
            <option value="12">12:00 PM</option>
            <option value="13">01:00 PM</option>
            <option value="14">02:00 PM</option>
            <option value="15">03:00 PM</option>
            <option value="16">04:00 PM</option>
            <option value="17">05:00 PM</option>
            <option value="18">06:00 PM</option>
            <option value="19">07:00 PM</option>
            <option value="20">08:00 PM</option>
            <option value="21">09:00 PM</option>
            <option value="22">10:00 PM</option>
        </select>
        <label for="unavailableEnd">Unavailable until:</label>
        <select id="unavailableEnd">
            <option value="08">08:00 AM</option>
            <option value="09">09:00 AM</option>
            <option value="10">10:00 AM</option>
            <option value="11">11:00 AM</option>
            <option value="12">12:00 PM</option>
            <option value="13">01:00 PM</option>
            <option value="14">02:00 PM</option>
            <option value="15">03:00 PM</option>
            <option value="16">04:00 PM</option>
            <option value="17">05:00 PM</option>
            <option value="18">06:00 PM</option>
            <option value="19">07:00 PM</option>
            <option value="20">08:00 PM</option>
            <option value="21">09:00 PM</option>
            <option value="22">10:00 PM</option>
        </select>
        <div class=" d-flex justify-content-center align-items-center sched-btn ">
        <button id="unavailableBtn" onclick="setUnavailable()">Set Unavailable</button>
        <button id="setAvailableBtn" onclick="setAvailable()">Set Available</button>
        </div>
    </div>
</div>

<script src="vendor/script.js"></script>
</body>
</html>
