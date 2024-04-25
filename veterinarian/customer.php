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
    <div class="container col-md-12">
        

        
        <div class="row justify-content-center">
            
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
          
          

          
          
            </div>
        </div>

    
</body>
</html>