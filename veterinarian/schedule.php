<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Schedule';
    require_once('./include/vet-head.php');
?>

<body>
  <?php
        require_once('./include/vet-header.php')
    ?>
   <?php
        require_once('./include/vet-sidepanel.php')
    ?>
    


    <section class="customer-title pt-4">
 
        <div class="customer-info-head">
            <h2>Calendar</h2>
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
        <div class=" d-flex justify-content-center align-items-center sched-btn ">
        <button id="unavailableBtn" onclick="setUnavailable()">Unavailable</button>
        <button id="setAvailableBtn" onclick="setAvailable()">Available</button>
        </div>
    </div>
</div>

<script src="vendor/script.js"></script>
</body>
</html>
