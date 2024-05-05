<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Secretary';
require_once('./include/admin-head.php');
require_once('../classes/secretary.class.php');
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
            <div class="row mx-5 justify-content-end">
                <div class="crud-btn-add col-4 col-sm-auto">
                    <a href="create-secretary.php" class="crud-text" style="width: 100%"><i class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i>Add Secretary</a>
                </div>
            </div>

        </section>
        <section class="table-con">
            <section class="customer-info-icon row  ">
                <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-12 d-flex justify-content-between align-items-center px-3">
                        <div class="customer-info-head">
                            <h2>Secretary Accounts </h2>
                        </div>
                        <div class="row ">
                            <div class="form-group col-8 col-sm-auto">
                                <select id="dateRangeSelect" class="form-select">
                                    <option value="today">Today</option>
                                    <option value="thisYear">This Year</option>
                                    <option value="lastYear">Last Year</option>
                                    <option value="custom" class="custom-option">Custom</option>
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

                            <div class="form-group col-4 col-sm-auto">
                                <a href="secretary-history.php" class="nxt-btn" style="width: 100%"><i class="fa-solid fa-clock-rotate-left pe-2"></i>Login History</a>
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
                            <th scope="col" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $secretaryClass = new secretary();
                        $secretaryRecords = $secretaryClass->showSecretary();
                        $id = 1;
                        foreach ($secretaryRecords as $record):
                        ?>
                            <tr>
                            <th scope="row"><?php echo $id ?></th>
                            <td> <?php echo $record['fullName'] ?> </td>
                            <td><?php echo date('d M Y', strtotime($record['created_at'])) ?> </td>
                            <td class="d-flex justify-content-end">
                            <div class="crud-btn">
                                <a href="update-secretary.php?secretaryID=<?php echo $record['secretaryID']?>" class="crud-icon-update"><i class="fa-regular fa-pen-to-square m-1" aria-hidden="true"></i></a>
                            </div>
                            <div class="crud-btn">
                                <a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deleteDModal<?php echo $record['secretaryID']?>" data-secretary-id="<?php echo $record['secretaryID']?>"><i class="fa-regular fa-trash-can m-1" aria-hidden="true"></i></a>
                                <div class="modal fade" id="deleteDModal<?php echo $record['secretaryID']?>" tabindex="-1" aria-labelledby="deleteDModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <h4 class="modal-title m-4 text-center" id="deleteDModalLabel">Are you sure you want to delete
                                                this account?</h4>
                                            <div class="modal-footer justify-content-between" style="border: none;">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" id="confirmDelete" data-secretary-id="" onclick="deleteSecretary(<?php echo $record['secretaryID']?>)" style="background-color: #FF0000; border: none;">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </td>
                            </tr>
                            <?php $id++; 
                            endforeach;
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

            <script>
                function deleteSecretary(id) {
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'delete-secretary.php');
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            alert("Successfully Deleted")
                            location.reload();
                        } else {
                            console.error('Error:', xhr.statusText);
                        }
                    };
                    xhr.send('secretaryID=' + id);
                };

                document.querySelector('.crud-icon-delete').addEventListener('click', function() {
                    var secretaryID = this.getAttribute('data-secretary-id');
                    document.getElementById('confirmDelete').setAttribute('data-secretary-id', secretaryID);
                });

                document.getElementById("dateRangeSelect").addEventListener("change", function() {
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
                document.getElementById('prev').addEventListener('click', function(event) {
                    // Handle "Previous" button click event
                    event.preventDefault();
                    // Perform necessary actions to show previous page
                    // For example, update table data, hide/show appropriate rows, etc.
                    console.log('Previous button clicked');
                });

                document.getElementById('next').addEventListener('click', function(event) {
                    // Handle "Next" button click event
                    event.preventDefault();
                    // Perform necessary actions to show next page
                    // For example, update table data, hide/show appropriate rows, etc.
                    console.log('Next button clicked');
                });
            </script>

    </main>
    <?php
    require_once('./include/js.php')
    ?>
</body>

</html>