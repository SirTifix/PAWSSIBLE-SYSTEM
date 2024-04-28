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
    <main>
    <?php
        require_once('./include/vet-sidepanel.php')
    ?>
    <section class="table-con">
        <section class="customer-info-icon-vet row  ">
            <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                <div class="col-12 d-flex justify-content-between align-items-center px-3">
                    <div class="customer-info-head">
                        <h2>Customer Handled</h2>
                    </div>
                    <div class="row">
                        <div class="form-group-vet col-8 col-sm-auto">
                            <select id="dateRangeSelect" class="form-select">
                                <option value="today">Today</option>
                                <option value="thisYear">This Year</option>
                                <option value="lastYear">Last Year</option>
                                <option value="custom" class="custom-option">Custom date range</option>
                            </select>

                            <div id="customDateContainer">
                                <div id="customDateRange" class="customDateRange">
                                    <label for="startDate" class="my-1">After:</label>
                                    <input type="date" id="startDate" class="my-1" name="startDate">

                                    <label for="endDate" class="my-2">Before:</label>
                                    <input type="date" id="endDate" name="endDate">

                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <button type="button" class="btn btn-secondary">Cancel</button>
                                        <button type="button" class="btn btn-primary">Apply</button>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="table-wrapper-vett ">
                <table id="customers" class="table table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Recently Added</th>
                        </tr>
                    </thead>
                    <tbody id="customerTableBody">
                        <tr onclick="window.location.href='customer_information.php';">
                            <td >1</td>
                            <td >Maria Makiling</td>
                            <td >Oct 20 2023</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </section>
    <script>
        document.getElementById("dateRangeSelect").addEventListener("change", function() {
            var customDateRange = document.getElementById("customDateRange");
            if (this.value === "custom") {
                customDateRange.style.display = "block";
            } else {
                customDateRange.style.display = "none";
            }
        });
    </script>
    <?php
    require_once('./include/js.php')
    ?>
</main>
</body>
</html>
                    
           

            

          
    
    
