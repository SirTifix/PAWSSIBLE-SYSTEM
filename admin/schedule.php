<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Schedule';
    require_once('./include/sched.php');

?>
<body>
<?php
        require_once('./include/admin-header.php')
    ?>
   
    <?php
        require_once('./include/admin-sidepanel.php')
    ?>

<section class="veterinarian-con">
            <div class="veterinarian-head">
                <p>Schedule</p>
            </div>
        </section>

<div class="white-container ">
 
    <div class="row cal justify-content-center align-items-center">
        <div class="col-md-6 calendar-container">
            <h2>Calendar</h2>
        <div class="calendar-controls d-flex justify-content-center align-items-center">
            <button onclick="previousMonth()"><</button>
            <h5 id="month-name"></h5>
            <button onclick="nextMonth()">></button>
            <select id="year" onchange="generateCalendar()">
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
        
        <div class="col-md-6 time-container container-box">
            <div class="row">
                    <tr>
                        <td>
                            <div class="d-flex justify-content-end align-items-center pt-3">
                            <div class="crud-btn">
                                <a href="#" class="add-btn" data-bs-toggle="modal" data-bs-target="#addTimeSlotModal">
                                    <i class="fa fa-plus-circle m-1" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="crud-btn">
                                <a href="#" class="delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="fa-regular fa-trash-can" aria-hidden="true"></i>
                                </a>
                            </div>

                            </div>
                        </td>
                    </tr>
                </div>
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
</div>
<div class="modal fade" id="addTimeSlotModal" tabindex="-1" aria-labelledby="addTimeSlotModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTimeSlotModalLabel">Add Time Slot</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form to add a new time slot -->
                <form id="addTimeSlotForm">
                    <div class="mb-3">
                        <label for="startTime" class="form-label">Start Time:</label>
                        <input type="time" class="form-control" id="startTime" required>
                    </div>
                    <div class="mb-3">
                        <label for="endTime" class="form-label">End Time:</label>
                        <input type="time" class="form-control" id="endTime" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              
                <button type="button" class="btn btn-primary" id="addTimeSlotBtn">Add Time Slot</button>
            </div>
        </div>
    </div>
</div>
<section>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteDModalLabel" aria-hidden="true" data-bs-backdrop="true">
  
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete this time? </h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id=""
                                style="background-color: #FF0000; border: none;">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<div class="d-flex cal justify-content-end align-items-center pt-3">
<button type="submit" class="save-cal-btn btn-secondary" id="addStaffButton">Done </button>
</div>



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

<script src="./assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>