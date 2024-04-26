<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Customer';
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
            <h2>Customer Handled</h2>
        </div>
    
      </section>
    
        

        
        <!-- <div class="row justify-content-center">
            
            <a href="customer_information.php" class="customer-button">
            <div class="col-md-12">
                <div class="customer">
                    <div class="icon-circle">
                    <i class="icon fa fa-solid fa-user mr-2 mt-1"></i> 
                    </div>
                    <div class="customer-title mx-3">
                        <h3>Maria Mercedes</h3>
                    </div>
                
                </div>
                </div>
                </a>
                
             
                <a href="customer_information.php" class="customer-button">
                    <div class="col-md-12">
                        <div class="customer">
                            <div class="icon-circle">
                            <i class="icon fa fa-solid fa-user mt-1"></i> 
                            </div>
                            <div class="customer-title mx-3">
                                <h3>Juan Dela Cruz</h3>
                            </div>
                        
                        </div>
                        </div>
                        </a>

              <a href="customer_information.php" class="customer-button">
              <div class="col-md-12">
                <div class="customer">
                    <div class="icon-circle">
                        <i class="icon fa fa-solid fa-user mt-1"></i> 
                        </div>
                    <div class="customer-title mx-3">
                        <h3>Maria Makiling</h3>
                    </div>
                    
                </div>
              </div>
              </a>
           -->
           <section class="filter-con row">
            <div class="row col-7">
                <div class="form-group-sel col-8 col-sm-auto">
                    <select id="dateRangeSelect" class="form-select">
                        <option value="today">Today</option>
                        <option value="thisYear">This Year</option>
                        <option value="lastYear">Last Year</option>
                        <option value="custom" class="custom-option">Custom date range</option>
                    </select>
</section>   
            <section class="table-con ">
                
                    <div class="table-wrapper ">
                        <table id="customer" class="table table-striped table-sm">
                            <thead>
                                <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Recently Added</th>
                           
                        </tr>
                    </thead>
                    <tbody id="customerTableBody">
                    <tr onclick="window.location.href='customer_information.php';">
                        <th scope="col">1</th>
                        <th scope="col">Maria Makiling</th>
                        <th scope="col">Oct 20 2023</th>
                    </tr>
                    
                               
                    </tbody>
                </table>
                </div>
            </div>
        </section>

                    
           

            

          
    
    
