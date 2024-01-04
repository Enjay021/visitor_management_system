<?php
session_start();
require 'dbcon.php';


if (isset($_POST['department_delete_all'])) {

    $visitor_id = mysqli_real_escape_string($con, $_POST['department_delete_all']);

    $query = "DELETE FROM department_tbl";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $query = "ALTER TABLE department_tbl AUTO_INCREMENT = 1";
        $query_run = mysqli_query($con, $query);

        $_SESSION['message'] = "Deparment Data Deleted All Successfully!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Department Data Not Deleted!";
        header("Location: index.php");
        exit(0);
    }

}



if (isset($_POST['dep_emp_delete'])) {
    $department_id = mysqli_real_escape_string($con, $_POST['dep_emp_delete']);

    $query = "DELETE FROM department_tbl WHERE id='$department_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Department Data Deleted Successfully!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Department Data Not Deleted!";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['update_department'])) {
    $department_id = mysqli_real_escape_string($con, $_POST['id']);
    $dName = mysqli_real_escape_string($con, $_POST['dep_name']);
    $dEmpName = mysqli_real_escape_string($con, $_POST['dep_emp_name']);
    $dEmpPhone = mysqli_real_escape_string($con, $_POST['dep_emp_phone']);
    $dEmpPos = mysqli_real_escape_string($con, $_POST['dep_emp_pos']);

    $query = "UPDATE department_tbl SET dep_name='$dName', dep_emp_name='$dEmpName',dep_emp_phone='$dEmpPhone', 
    dep_emp_pos='$dEmpPos'
    WHERE id='$department_id'";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Deparment Data Updated Successfully!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Deparment Data Not Updated!";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['add_department'])) {
    $dName = mysqli_real_escape_string($con, $_POST['dep_name']);
    $dEmpName = mysqli_real_escape_string($con, $_POST['dep_emp_name']);
    $dEmpPhone = mysqli_real_escape_string($con, $_POST['dep_emp_phone']);
    $dEmpPos = mysqli_real_escape_string($con, $_POST['dep_emp_pos']);

    $query = "INSERT INTO department_tbl (dep_name,dep_emp_name,dep_emp_phone,dep_emp_pos) VALUES 
    ('$dName', '$dEmpName', '$dEmpPhone', '$dEmpPos')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Department Data Added Successfully!";
        header("Location: department-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Department Data Not Added!";
        header("Location: department-create.php");
        exit(0);
    }
}

if (isset($_POST['visitor_delete'])) {
    $visitor_id = mysqli_real_escape_string($con, $_POST['visitor_delete']);

    $query = "DELETE FROM visitor_tbl WHERE id='$visitor_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Visitor Deleted Successfully!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Visitor Not Deleted!";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['visitor_delete_all'])) {

    $visitor_id = mysqli_real_escape_string($con, $_POST['visitor_delete_all']);

    $query = "DELETE FROM visitor_tbl";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $query = "ALTER TABLE visitor_tbl AUTO_INCREMENT = 1";
        $query_run = mysqli_query($con, $query);

        $_SESSION['message'] = "Visitor Deleted All Successfully!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Visitor Not Deleted!";
        header("Location: index.php");
        exit(0);
    }

}

if (isset($_POST['update_visitor'])) {
    $visitor_id = mysqli_real_escape_string($con, $_POST['id']);
    $vname = mysqli_real_escape_string($con, $_POST['visitor_name']);
    $vphone = mysqli_real_escape_string($con, $_POST['visitor_phone']);
    $vIC = mysqli_real_escape_string($con, $_POST['visitor_ic']);
    $vaddress = mysqli_real_escape_string($con, $_POST['visitor_address']);
    $depEmpName = mysqli_real_escape_string($con, $_POST['dep_emp_name']);
    $depEmpPhone = mysqli_real_escape_string($con, $_POST['dep_emp_phone']);
    $vpurpose = mysqli_real_escape_string($con, $_POST['visitor_purpose']);
    $vtimeIn = mysqli_real_escape_string($con, $_POST['visitor_time_in']);
    $vtimeOut = mysqli_real_escape_string($con, $_POST['visitor_time_out']);

    $query = "UPDATE visitor_tbl SET visitor_name='$vname', visitor_phone='$vphone',visitor_ic='$vIC', 
    visitor_address='$vaddress', dep_emp_name='$depEmpName', dep_emp_phone='$depEmpPhone', visitor_purpose='$vpurpose', visitor_time_in='$vtimeIn',visitor_time_out='$vtimeOut'
    WHERE id='$visitor_id'";

    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Visitor Updated Successfully!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Visitor Not Updated!";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['add_visitor'])) {
    $vname = mysqli_real_escape_string($con, $_POST['visitor_name']);
    $vphone = mysqli_real_escape_string($con, $_POST['visitor_phone']);
    $vIC = mysqli_real_escape_string($con, $_POST['visitor_ic']);
    $vaddress = mysqli_real_escape_string($con, $_POST['visitor_address']);
    $depEmpName = mysqli_real_escape_string($con, $_POST['dep_emp_name']);
    $depEmpPhone = mysqli_real_escape_string($con, $_POST['dep_emp_phone']);
    $vpurpose = mysqli_real_escape_string($con, $_POST['visitor_purpose']);
    $vtimeIn = mysqli_real_escape_string($con, $_POST['visitor_time_in']);
    $vtimeOut = mysqli_real_escape_string($con, $_POST['visitor_time_out']);



    $query = "INSERT INTO visitor_tbl (visitor_name,visitor_phone,visitor_ic,visitor_address,dep_emp_name,dep_emp_phone,visitor_purpose,visitor_time_in,visitor_time_out) VALUES 
    ('$vname', '$vphone', '$vIC', '$vaddress', '$depEmpName','$depEmpPhone', '$vpurpose','$vtimeIn','$vtimeOut')";

    $query_run = mysqli_query($con, $query);
    if ($query_run) {
        $_SESSION['message'] = "Visitor Added Successfully!";
        header("Location: visitor-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Visitor  Not Added!";
        header("Location: visitor-create.php");
        exit(0);
    }
}

?>