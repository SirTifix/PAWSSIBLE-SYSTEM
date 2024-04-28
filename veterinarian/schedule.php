<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Schedule';
    require_once('./include/vet-sched-head.php');
?>

<body>
  <?php
        require_once('./include/vet-header.php')
    ?>
   <?php
        require_once('./include/vet-sidepanel.php')
    ?>
    
    <section class="veterinarian-con">
        <div class="veterinarian-head">
            <p>Schedule</p>
        </div>
    </section>
  <div class="white-container d-flex justify-content-center align-items-center">
  
    <div class="calendar ">
      <div class="calendar-controls d-flex justify-content-center align-items-center">
        <button onclick="previousMonth()"><</button>
        <h3 id="month-name"></h3>
        <button onclick="nextMonth()">></button>
        
        <select id="year" class="yearbtn" onchange="generateCalendar()">
</select>
      </div>
          <table id="calendar">
            <thead>
     
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
      <div class="popup-content p-4">
          <span class="close" onclick="closePopup()">&times;</span>
          <p id="popup-date"></p>
          <div class=" d-flex justify-content-center align-items-center sched-btn">
              <div class="col pe-2">
                  <button id="setAvailableBtn" onclick="setAvailable()">Available</button>
              </div>
              <div class="col">
                  <button id="unavailableBtn" onclick="setUnavailable()">Unavailable</button>
              </div>
          </div>        
      </div>
  </div>

<script src="vendor/script.js"></script>
</body>
</html>
