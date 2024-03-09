<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Appointment';
    require_once('./include/sec-head.php');
?>
<body>
    <?php
        require_once('./include/sec-header.php')
    ?>
    
    <main>
    <?php
        require_once('./include/sec-sidepanel.php')
    ?>

    <section class="veterinarian-con">
        <div class="veterinarian-head">
            <p>Appointments</p>
        </div>
    </section>

   <section class="appointment-con">
    <div class="add-btn-con">
    <div class="add-appointment ">
        <a href=""><i class="fa-solid fa-plus pe-2"  aria-hidden="true"></i>New Appointment</a>
    </div>
    </div>

    <div class="table-appointment">
        <div class="search-con">
        <input type="text" id="searchInput" class="search col-10" placeholder="Search here...">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('#searchInput').on('keyup', function(){
        var searchText = $(this).val().toLowerCase();
        $('#appointmentTable tbody tr').filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
        });
    });
});
</script>
</body>
</html>