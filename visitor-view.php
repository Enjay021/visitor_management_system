<?php
require 'dbcon.php';
?>
<?php
include('includes/header.php');
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Visitor Details
                            <a href="index.php" class="btn btn-danger float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $visitor_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM visitor_tbl WHERE id='$visitor_id'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {

                                $visitor = mysqli_fetch_array($query_run);
                                ?>
                                            <div class="mb-3">
                                                <label>Visitor Name</label>
                                                <p class="form-control"><?= $visitor['visitor_name']; ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Phone Number</label>
                                                <p class="form-control"><?= $visitor['visitor_phone']; ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label>IC Number</label>
                                                <p class="form-control"><?= $visitor['visitor_ic']; ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Address</label>
                                                <p class="form-control"><?= $visitor['visitor_address']; ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Person to Visit</label>
                                                <p class="form-control"><?= $visitor['dep_emp_name']; ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Purpose</label>
                                                <p class="form-control"><?= $visitor['visitor_purpose']; ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Date | Time-in</label>
                                                <p class="form-control"><?= $visitor['visitor_time_in']; ?></p>
                                            </div>
                                            <div class="mb-3">
                                                <label>Date | Time-out</label>
                                                <p class="form-control"><?= $visitor['visitor_time_out']; ?></p>
                                            </div>
                                        <?php
                            } else {
                                echo "<h4>No Such ID Found!</h4>";
                            }
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    include('includes/footer.php');
    ?>