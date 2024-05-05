<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Veterinarian';
require_once ('./include/sec-head.php');
require_once ('../classes/veterinarian.class.php');
?>

<body>
    <?php
    require_once ('./include/sec-header.php')
        ?>
    <main>
        <?php
        require_once ('./include/sec-sidepanel.php')
            ?>
        <section class="veterinarian-con">
            <div class="row mx-5 justify-content-end">
            </div>
        </section>
        <section class="table-con">
            <section class="customer-info-icon row  ">
                <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-12 d-flex justify-content-between align-items-center px-3">
                        <div class="customer-info-head">
                            <h2>Veterinarian Accounts </h2>
                        </div>
                        <div class="row">
                            <div class="form-group col-8 col-sm-auto">
                                <div class="d-flex align-items-center">
                                    <div class="search-container col-auto my-1 pe-4">
                                        <div class="search-wrapper d-flex align-items-center m-0 row">
                                            <input type="text" class="search col-10" placeholder="search.....">
                                            <i class="search-icon fas fa-search col-2" aria-hidden="true"></i>
                                        </div>
                                    </div>

                                    <select id="dateRangeSelect" class="form-select ms-3">
                                        <option value="today">Today</option>
                                        <option value="thisYear">This Year</option>
                                        <option value="lastYear">Last Year</option>
                                        <option value="custom" class="custom-option">Custom</option>
                                    </select>

                                    <div id="customDateContainer" class="ms-3">
                                        <div id="customDateRange" class="customDateRange">
                                            <label for="startDate" class="my-1">After:</label>
                                            <input type="date" id="startDate" class="my-1" name="startDate">
                                            <label for="endDate" class="my-2">Before:</label>
                                            <input type="date" id="endDate" name="endDate">
                                            <div class="d-flex justify-content-between align-items-center mt-3">
                                                <button type="button" class="btn btn-secondary btn-height">Cancel</button>
                                                <button type="button" class="btn btn-primary btn-height">Apply</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-4 col-sm-auto">
                                        <select name="status" class="form-select">
                                            <option value="">All Status</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Done">Done</option>
                                            <option value="Cancelled">Cancelled</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>


            <div class="table-wrapper">
                <table id="customer" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Last Update</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $veterinarianClass = new Veterinarian();
                        $vetRecords = $veterinarianClass->showVet();
                        $id = 1;
                        foreach ($vetRecords as $record) {
                            echo '<tr>';
                            echo '<th scope="row">' . $id . '</th>';
                            echo '<td>' . $record['fullName'] . '</td>';
                            echo '<td>' . date('d M Y', strtotime($record['created_at'])) . '</td>';
                            echo '<td>' . $record['vetStatus'] . '</td>';
                            echo '</tr>';
                            $id++;
                        }
                        ?>
                    </tbody>
                </table>
                <nav aria-label="...">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>


            <section>
                <div class="modal fade" id="deleteDModal" tabindex="-1" aria-labelledby="deleteDModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to
                                delete
                                this Veterinarian?</h4>
                            <div class="modal-footer justify-content-between" style="border: none;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                                <button type="button" class="btn btn-primary" id="confirmDelete" data-vet-id=""
                                    style="background-color: #FF0000; border: none;">DELETE</button>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <script>
                document.getElementById('confirmDelete').addEventListener('click', function () {
                    var vetID = this.getAttribute('data-vet-id');
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'delete-vet.php');
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            location.reload();
                        } else {
                            console.error('Error:', xhr.statusText);
                        }
                    };
                    xhr.send('vetID=' + vetID);
                });

                document.querySelector('.crud-icon-delete').addEventListener('click', function () {
                    var vetID = this.getAttribute('data-vet-id');
                    document.getElementById('confirmDelete').setAttribute('data-vet-id', vetID);
                });

                document.getElementById("dateRangeSelect").addEventListener("change", function () {
                    var customDateRange = document.getElementById("customDateRange");
                    if (this.value === "custom") {
                        customDateRange.style.display = "block";
                    } else {
                        customDateRange.style.display = "none";
                    }
                });
            </script>

            <script>
                // Example JavaScript to handle pagination
                document.getElementById('prev').addEventListener('click', function (event) {
                    // Handle "Previous" button click event
                    event.preventDefault();
                    // Perform necessary actions to show previous page
                    // For example, update table data, hide/show appropriate rows, etc.
                    console.log('Previous button clicked');
                });

                document.getElementById('next').addEventListener('click', function (event) {
                    // Handle "Next" button click event
                    event.preventDefault();
                    // Perform necessary actions to show next page
                    // For example, update table data, hide/show appropriate rows, etc.
                    console.log('Next button clicked');
                });
            </script>

            <script>
                document.getElementById("dateRangeSelect").addEventListener("change", function () {
                    var customDateRange = document.getElementById("customDateRange");
                    if (this.value === "custom") {
                        customDateRange.style.display = "block";
                    } else {
                        customDateRange.style.display = "none";
                    }
                });

                // Add event listener for the Cancel button
                document.querySelector("#customDateRange button.btn-secondary").addEventListener("click", function () {
                    var customDateRange = document.getElementById("customDateRange");
                    if (customDateRange.style.display === "none") {
                        customDateRange.style.display = "block";
                    } else {
                        customDateRange.style.display = "none";
                    }
                });
            </script>

    </main>
    <?php
    require_once ('./include/js.php')
        ?>
</body>

</html>