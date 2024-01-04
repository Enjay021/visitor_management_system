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
                        <h4>Department Details
                            <a href="index.php" class="btn btn-danger float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $department_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM department_tbl WHERE id='$department_id'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $department = mysqli_fetch_array($query_run);
                                ?>
                                        <div class="mb-3">
                                            <label>Department Name</label>
                                            <p class="form-control"><?= $department['dep_name']; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label>Employee Namer</label>
                                            <p class="form-control"><?= $department['dep_emp_name']; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label>Employee Number</label>
                                            <p class="form-control"><?= $department['dep_emp_phone']; ?></p>
                                        </div>
                                        <div class="mb-3">
                                            <label>Employee Position</label>
                                            <p class="form-control"><?= $department['dep_emp_pos']; ?></p>
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