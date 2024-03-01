<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/vendor/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vetstyle.css">
    <title>Medical History</title>
</head>
<body>
  <header class="row m-0 align-items-center fixed-top">
    <div class="logo col-4 align-items-center m-0 row">
        <img src="assets/img/Logo.png" alt="Logo" class="logosec col-6">
        <div class="logo-text col-6">PAWSsible Solutions <br> Veterinary Clinic</div>
    </div>

    <div class="search-container col-4 d-flex justify-content-center">
        <div class="search-wrapper d-flex align-items-center m-0 row">
            <input type="text" class="search col-10" placeholder="search.....">
            <i class="search-icon fas fa-search col-2" aria-hidden="true"></i>
        </div>
    </div>

    <div class="bell-logout-con col-4 d-flex justify-content-end">
        <div class="bell-btn">
            <button><i class="bell-icon fa-solid fa-bell pe-4" aria-hidden="true"></i></button>
        </div>  
        <div class="logout-btn">
            <button><i class="logout-icon fas fa-right-from-bracket pe-2" aria-hidden="true"></i></button>
        </div>
    </div>
</header>

  <div class="side-panel d-flex flex-column mt-5 pt-3">
    <i class=" admin-icon fa-solid fa-circle-user align-items-center"></i>
    <div class="admin-header">Admin</div>
    <div class="border-line"></div>
    <div class="side-panel-links">
        <a href="dashboard.php" class="sidebar-text align-items-center"><i class="fa fa-tasks" aria-hidden="true"></i> Dashboard</a>
        <a href="appointment.php" class="sidebar-text align-items-center"><i class="fa-solid fa-clock" aria-hidden="true"></i> Appointment</a>
        <a href="schedule.php" class="sidebar-text align-items-center"><i class="fa-solid fa-calendar" aria-hidden="true"></i> Schedule</a>
        <a href="customer.php" class="sidebar-text align-items-center"><i class="fa-solid fa-users" aria-hidden="true"></i> Customers</a>
        <a href="" class="sidebar-text align-items-center"><i class="fa-solid fa-gear" aria-hidden="true"></i> Settings</a>
    </div>
</div>



  <section class="customer-title ">
 
    <div class="customer-info-head">
        <h2>Medical History</h2>
    </div>

  </section>

  <div class="container">
  <div class="pet-information ">
     <div class="row justify-content-center">
            <div class="title-medical">
                <h2> Pet Information </h2>
            </div>
           <div class="col-md-5 pet-bg ">  
                      <div class="icon-box">
                        <i class="icon fa fa-solid  fa-image mr-2 mt-1" ></i> 
                      </div>
            </div>
              
              <div class="col-md-5 pet-bg">
                      <div class="form-group ">
                        <label for="PetName" class="form-label">Pet Name:</label>
                        <input type="text" class="form-control" id="PetName" name="PetName" required>
                      </div>
                      <div class="form-group">
                        <label for="BirthDate" class="form-label">Birth Date:</label>
                        <input type="text" class="form-control" id="BirthDate" name="BirthDate" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="PetAge" class="form-label ">Pet Age:</label>
                        <input type="text" class="form-control" id="PetAge" name="PetAge" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="Breed" class="form-label ">Breed:</label>
                        <input type="text" class="form-control" id="Breed" name="Breed" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="PetType" class="form-label ">Pet Type:</label>
                        <input type="text" class="form-control" id="PetType" name="PetType" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="Gender" class="form-label ">Gender:</label>
                        <input type="text" class="form-control" id="Gender" name="Gender" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="Weight" class="form-label ">Weight:</label>
                        <input type="text" class="form-control" id="Weight" name="Weight" required>
                      </div>
                      <div class="form-group mb-3">
                        <label for="Color" class="form-label ">Color:</label>
                        <input type="text" class="form-control" id="Color" name="Color" required>
                      </div>          
          </div>
        </div>
      </div>
    </div>
     
    <div class="container">
      <div class="pet-information ">
         <div class="row justify-content-center">
                <div class="title-medical">
                  <h2> Medical Information</h2>
                  <div class="dropdown">
                    <button class="icon-bars " onclick="toggleDropdown(this)">
                        <span class="icon fa fa-ellipsis-h" style="color: rgb(255, 251, 251);"></span> 
                    </button>
                    <div class="dropdown-content">
                        <a href="add-medical.php">Add</a>
                        <a href="#">Edit</a>
                    </div>
                 
                      </div>
                </div>
              

                <div class="row font-weight-bold py-4">
                  <div class="col">Age(weeks)</div>
                    <div class="col">Date</div>
                    <div class="col">History</div>
                    <div class="col">Physical Examination</div>
                    <div class="col">Veterinarian</div>
                    <div class="col">Diagnosis/  Treatment Plan</div>
                    <div class="col ">Action</div>
                  </div>
                  <div class="row py-3 row-divider">
                    <div class="col">6</div>
                    <div class="col">02/14/2024</div>
                    <div class="col">Owner reports normal activity levels, playful behavior, and good socialization.
                      Regular bowel movements, no signs of diarrhea or straining.</div>
                    <div class="col">Owner reports normal activity levels, playful behavior, and good socialization.
                      Regular bowel movements, no signs of diarrhea or straining.</div>
                    <div class="col">Dr.Anna Green</div>
                    <div class="col">Administer first round of vaccinations (DHPP).
                      Discuss future vaccination schedule.
                      </div>
                      <div class="col crud-btn">
                        <a href="edit-medical.php" class="crud-icon-update"><i class="fa-solid fa-pen-to-square m-1" aria-hidden="true"></i></a>
                    </div>
                  </div>

                  <div class="title-medical">
                    <h2 class="px-5"> Vaccine </h2>
                    <div class="dropdown">
                      <button class="icon-bars" onclick="toggleDropdown(this)">
                          <i class="icon fa fa-ellipsis-h" style="color: white;"></i> 
                      </button>
                      <div class="dropdown-content">
                          <a href="primaryseries.php">View More</a>
                      </div>
                   
                  </div>
                </div>

                <div class="row font-weight-bold py-4">
                  <div class="col">Age(weeks)</div>
                    <div class="col">Weight</div>
                    <div class="col">Date Given</div>
                    <div class="col">Vaccine</div>
                    <div class="col">Next Date</div>
                    <div class="col">Veterinarian</div>
                    
                  </div>
                  <div class="row py-3 row-divider">
                    <div class="col">6</div>
                    <div class="col">12lbs</div>
                    <div class="col">12/11/2023</div>
                    <div class="col">Distemper, Hepatitis, Parvovirus, Parainfluenza (DHPP)</div>
                    <div class="col">January 8, 2024</div>
                    <div class="col">Dr.Green</div>
                      
                  </div>
  
          </div>
      </div>
    </div>
            

    <script src="vendor/script.js"></script>
</body>
</php>