<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Secretary';
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

        <section class="table-con-sec">
            <section class="customer-info-icon row">
                <div class="cus-head-form col-11 d-flex justify-content-between align-items-center mb-3">
                    <div class="col-12 d-flex justify-content-between align-items-center px-3" style="width: calc(100% - 16px);"> <!-- Adjust the width here -->
                        <div class="customer-info-head">
                            <h2>Secretary Login History</h2>
                        </div>
                        <div class="row col-4">
                            <div class="row justify-content-start align-items-center">
                                <div class="search-container col-auto my-1">
                                    <div class="search-wrapper d-flex align-items-center m-0 row">
                                        <input type="text" class="search col-10" placeholder="search.....">
                                        <i class="search-icon fas fa-search col-2" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="table-wrapper">
                <table id="customer" class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody id="appointmentTableBody">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

                <!-- Pagination -->
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
        </section>
    </main>
</body>

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

</html>