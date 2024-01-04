<?php
session_start();
require 'dbcon.php';
?>
<?php
include('includes/header.php');
?>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Department Data
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
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="id" value="<?= $department_id ?>">
                                                    <div class="mb-3">
                                                        <label>Department Name</label>
                                                        <input type="text" name="dep_name" value="<?= $department['dep_name']; ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Employee Name</label>
                                                        <input type="text" name="dep_emp_name" value="<?= $department['dep_emp_name']; ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Employee Number</label>
                                                        <input type="text" name="dep_emp_phone" value="<?= $department['dep_emp_phone']; ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Employee Position</label>
                                                        <input type="text" name="dep_emp_pos" value="<?= $department['dep_emp_pos']; ?>" class="form-control" required>
                                                    </div>
    
                                                    <div class="mb-3">
                                                        <button type="submit" name="update_department" class="btn btn-primary">Update Employee</button>
                                                    </div>
                                                </form>
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