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
        <div class="veterinarian-head">
            <p>Pending Appointments</p>
        </div>
    </section>

   <section class="appointment-con mt-5 pt-3">
    <div class="table-appointment">
    <div class="row justify-content-end align-items-center m-0">
        <div class="col-auto my-1">
            <div class="search-con">
                <input type="text" id="searchInput" class="search-input" placeholder="Search here...">
            </div>
        </div>
        <div class="col-auto my-1">
            <a href="./appointment.php" class="appointment-btn" id="appointmentLink"><i class="far fa-calendar-check"></i>Appointment</a>
        </div>
        <div class="col-auto my-1">
            <div class="d-flex align-items-center">
                <a href="./pending-appointment.php" class="appointment-btn appointment-active" id="pendingLink"><i class="far fa-clock"></i>Pending</a>
            </div>
        </div>
    </div> 



    <table class="table table-striped table-sm">
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
                        <a href="" class="check-btn"><i class="fa-regular fa-circle-check m-1" aria-hidden="true"></i></a>
                    </div>
                    <div class="crud-btn">
                        <a href="" class="delete-btn" data-bs-toggle="modal"data-bs-target="#deleteDModal">
                            <i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                    </div>
                    <div class="crud-btn">
                        <a href="" class="" data-bs-toggle="modal"data-bs-target="#modal">
                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

   
    </div>
   </section>

   <section>
            <div class="modal fade" id="deleteDModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                            this Appointment?</h4>
                        <div class="modal-footer justify-content-between" style="border: none;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="confirmDelete" data-customer-id=""
                                style="background-color: #FF0000; border: none;">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

        <section>
        <div id="modal" class="modal fade" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <h2 class="text-center">Review Pending Appointment</h2> <br>    
            <h3 class="text-center">Personal Details</h3>
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
              <h3 class="text-center">Pet Details</h3>
                <div class="input-container">
                <label for="petName${i}">Name:</label>
                <input type="text" class="input-appointment" id="petName${i}" name="petName${i}" required><br><br>
                </div>

                <div class="input-container">
                <label for="petType${i}">Type:</label>
                <input type="text" class="input-appointment" id="petType${i}" name="petType${i}" required><br><br>
                </div>
                <span class="underline"></span>
            </div>
              <div id="petFormsContainer" class="petFormsContainer"></div>
              <button id="backBtn">Back</button>
            </div>
          </div>
        </div>
      </div>
        </section>

        </section>

    </main>
    <?php
        require_once('./include/js.php')
    ?>

    <script>
        document.getElementById('backBtn').addEventListener('click', function() {
        window.location.href = './pending-appointment.php';
    });
    </script>

</body>
</html>