<?php
// Start session
session_start();

// Include database connection
include 'db_connect.php';

// Store data in session
$_SESSION['date'] = $_POST['date'];
$_SESSION['hq'] = $_POST['hq'];
$_SESSION['team'] = $_POST['team'];
$_SESSION['name'] = $_POST['name'];
$_SESSION['tyre_pressure_front'] = $_POST['tyre-pressure-front'];
$_SESSION['tyre_pressure_rear'] = $_POST['tyre-pressure-rear'];
$_SESSION['tyre_pressure'] = $_POST['tyre-pressure'];
$_SESSION['tyre_pressure_remark'] = $_POST['remark'];
$_SESSION['threading_condition'] = $_POST['threading-condition'];
$_SESSION['threading_condition_remark'] = $_POST['threading-condition-remark'];
$_SESSION['speedometer'] = $_POST['speedometer'];
$_SESSION['speedometer_remark'] = $_POST['speedometer-remark'];
$_SESSION['fuel_meter'] = $_POST['fuel-meter'];
$_SESSION['fuel_meter_remark'] = $_POST['fuel-meter-remark'];
$_SESSION['mirrors'] = $_POST['mirrors'];
$_SESSION['mirrors_remark'] = $_POST['mirrors-remark'];
$_SESSION['brakes'] = $_POST['brakes'];
$_SESSION['brakes_remark'] = $_POST['brakes-remark'];
$_SESSION['horn'] = $_POST['horn'];
$_SESSION['horn_remark'] = $_POST['horn-remark'];
$_SESSION['starter'] = $_POST['starter'];
$_SESSION['starter_remark'] = $_POST['starter-remark'];
$_SESSION['vehicle_key'] = $_POST['vehicle-key'];
$_SESSION['vehicle_key_remark'] = $_POST['vehicle-key-remark'];
$_SESSION['seat_condition'] = $_POST['seat-condition'];
$_SESSION['seat_condition_remark'] = $_POST['seat-condition-remark'];
$_SESSION['stand'] = $_POST['stand'];
$_SESSION['stand_remark'] = $_POST['stand-remark'];
$_SESSION['number_plates'] = $_POST['number-plates'];
$_SESSION['number_plates_remark'] = $_POST['number-plates-remark'];

// Redirect to next form
header("Location: index2.html");
exit();
?>
