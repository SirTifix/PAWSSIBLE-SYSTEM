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
 
    <section class="dashboard-con ">
        <div class="row">
            <div class="title-dash">
                <h4>Welcome</h4>
                <h2>Dr. Anna Green</h2>
            </div>
            <div class="dashboard-box col-md-5 mx-2"> 
                <div class="text px-3 d-flex align-items-center"> 
                    <i class="icons fa fa-users mr-2"></i> 
                    <div>
                        <h4 class="topic-heading mb-2 mt-5">Customer Handled</h4> 
                        <h2 class="topic">6</h2> 
                    </div>
                </div> 
            </div> 
            <div class="dashboard-box col-md-5 mx-2"> 
                <div class="text px-3 py-4 d-flex align-items-center"> 
                    <i class="icons fa fa-solid fa-clock mr-2 mt-1"></i> 
                    <div>
                        <h4 class="topic-heading mb-2 mt-5">Upcoming Appointments</h4> 
                        <h2 class="topic">3</h2> 
                    </div>
                </div> 
            </div> 
        </div>
    </section>
   
            <div class="container ">
                <div class="row justify-content-center">
                  <div class="up-con col-md-7 py-5">
                        <div class="title">
                            <p> Upcoming Appointment</p>
                        </div>
                        <div class="row font-weight-bold py-3">
                        <div class="col">Book No.</div>
                        <div class="col">Name</div>
                        <div class="col">Date</div>
                        <div class="col">Time</div>
                        </div>
                        <div class="row py-3 row-divider">
                        <div class="col">01</div>
                        <div class="col">John Doe</div>
                        <div class="col">03/13/2024</div>
                        <div class="col">New York</div>
                        </div>
                        <div class="row py-3">
                        <div class="col">02</div>
                        <div class="col">Jane Smith</div>
                        <div class="col">03/24/2024</div>
                        <div class="col">Los Angeles</div>
                        </div>
                        <div class="row py-3">
                            <div class="col">03</div>
                            <div class="col">Michael Johnson</div>
                        <div class="col">03/24/2024</div>
                        <div class="col">Chicago</div>
                        </div>
                        </div>
                </div>
            </div>
    
</body>
</php>

