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
                        <h4>Edit Visitor
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
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="id" value="<?= $visitor_id ?>">
                                                    <div class="mb-3">
                                                        <label>Visitor Name</label>
                                                        <input type="text" name="visitor_name" value="<?= $visitor['visitor_name']; ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Phone Number</label>
                                                        <input type="text" name="visitor_phone" value="<?= $visitor['visitor_phone']; ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>IC Number</label>
                                                        <input type="text" name="visitor_ic" value="<?= $visitor['visitor_ic']; ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Address</label>
                                                        <input type="text" name="visitor_address" value="<?= $visitor['visitor_address']; ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Person to Visit</label>
                                                        <input type="text" name="dep_emp_name" value="<?= $visitor['dep_emp_name']; ?>" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Purpose</label>
                                                        <input type="text" name="visitor_purpose" value="<?= $visitor['visitor_purpose']; ?>" class="form-control" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label>Date | Time-in</label>
                                                        <input type="datetime-local" name="visitor_time_in" value="<?= $visitor['visitor_time_in']; ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Date | Time-out</label>
                                                        <input type="datetime-local" name="visitor_time_out" value="<?= $visitor['visitor_time_out']; ?>" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <button type="submit" name="update_visitor" class="btn btn-primary">Update Visitor</button>
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