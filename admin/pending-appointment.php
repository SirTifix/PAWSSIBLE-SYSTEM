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
            <p>Appointments</p>
        </div>
    </section>

   <section class="appointment-con">
    <div class="add-btn-con">
    <div class="add-appointment ">
        <a href="appointment-booking.php"><i class="fa-solid fa-plus pe-2"  aria-hidden="true"></i>New Appointment</a>
    </div>
    </div>

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
                <a href="./pending-appointmen.php" class="appointment-btn appointment-active" id="pendingLink"><i class="far fa-clock"></i>Pending</a>
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
                        <a href="" class="edit-btn"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
                    </div>
                    <div class="crud-btn">
                        <a href="" class="delete-btn"><i class="fa-regular fa-trash-can" aria-hidden="true"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

   
    </div>
   </section>

    </main>
    <?php
        require_once('./include/js.php')
    ?>

</body>
</html>