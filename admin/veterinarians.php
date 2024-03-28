<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Veterinarian';
require_once('./include/admin-head.php');
require_once('../classes/veterinarian.class.php');
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
                <p>Veterinarian's Accounts</p>
            </div>
        </section>

        <section class="filter-con row">
            <div class="row col-7">
                <div class="form-group col-8 col-sm-auto">
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

            <div class="form-group col-4 col-sm-auto">
                    <select name="status" class="form-select">
                        <option value="">All Status</option>
                        <option value="Active">Active</option>
                        <option value="Deactivated">Deactivated</option>
                    </select>
                </div>
            </div>

            <div class="crud-btn col-5 justify-content-end">
                <a href="create-vet.php" class="crud-text" style="width: 35%"><i class="fa-solid fa-circle-plus pe-2 pt-1" aria-hidden="true"></i>Add Veterinary</a>
            </div>
        </section>

        <section class="table-con">
            <div class="table-wrapper">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Recently Added</th>
                            <th scope="col" width="5%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $veterinarianClass = new Veterinarian();
                        $vetRecords = $veterinarianClass->showVet();
                        foreach ($vetRecords as $record) {
                            echo '<tr>';
                            echo '<th scope="row">' . $record['vetID'] . '</th>';
                            echo '<td>' . $record['fullName'] . '</td>';
                            echo '<td>' . date('d M Y', strtotime($record['created_at'])) . '</td>';
                            echo '<td class="d-flex justify-content-end">';
                            echo '<div class="crud-btn">';
                            echo '<a href="update-vet.php?vetID=' . $record['vetID'] . '" class="crud-icon-update"><i class="fa-regular fa-pen-to-square m-1" aria-hidden="true"></i></a>';
                            echo '</div>';
                            echo '<div class="crud-btn">';
                            echo '<a href="" class="crud-icon-delete" data-bs-toggle="modal" data-bs-target="#deleteDModal" data-vet-id="' . $record['vetID'] . '"><i class="fa-regular fa-trash-can m-1" aria-hidden="true"></i></a>';
                            echo '</div>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
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

            document.getElementById("dateRangeSelect").addEventListener("change", function() {
                var customDateRange = document.getElementById("customDateRange");
                if (this.value === "custom") {
                    customDateRange.style.display = "block";
                } else {
                    customDateRange.style.display = "none";
                }
            });
        </script>

    </main>
    <?php
    require_once('./include/js.php')
        ?>
</body>

</html>