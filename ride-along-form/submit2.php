<?php
// Start session
session_start();

// Include database connection
include 'db_connect.php';

// Store data in session
$_SESSION['hand_signal'] = $_POST['hand-signal'];
$_SESSION['hand_signal_remark'] = $_POST['remark-hand-signal'];
$_SESSION['overtake'] = $_POST['overtake'];
$_SESSION['overtake_remark'] = $_POST['remark-overtake'];
$_SESSION['shoes'] = $_POST['shoes'];
$_SESSION['shoes_remark'] = $_POST['remark-shoes'];
$_SESSION['sleepy'] = $_POST['sleepy'];
$_SESSION['sleepy_remark'] = $_POST['remark-sleepy'];
$_SESSION['traffic_signals'] = $_POST['traffic-signals'];
$_SESSION['traffic_signals_remark'] = $_POST['remark-traffic-signals'];
$_SESSION['mobile'] = $_POST['mobile'];
$_SESSION['mobile_remark'] = $_POST['remark-mobile'];
$_SESSION['speed_limits'] = $_POST['speed-limits'];
$_SESSION['speed_limits_remark'] = $_POST['remark-speed-limits'];
$_SESSION['posture'] = $_POST['posture'];
$_SESSION['posture_remark'] = $_POST['remark-posture'];
$_SESSION['ambulance'] = $_POST['ambulance'];
$_SESSION['ambulance_remark'] = $_POST['remark-ambulance'];
$_SESSION['courteous'] = $_POST['courteous'];
$_SESSION['courteous_remark'] = $_POST['remark-courteous'];
$_SESSION['safe_rider_program'] = $_POST['safe-rider-program'];
$_SESSION['safe_rider_program_remark'] = $_POST['remark-safe-rider-program'];
$_SESSION['helmet'] = $_POST['helmet'];
$_SESSION['helmet_remark'] = $_POST['remark-helmet'];
$_SESSION['helmet_condition'] = $_POST['helmet-condition'];
$_SESSION['helmet_condition_remark'] = $_POST['remark-helmet-condition'];
$_SESSION['jacket'] = $_POST['jacket'];
$_SESSION['jacket_remark'] = $_POST['remark-jacket'];
$_SESSION['jacket_condition'] = $_POST['jacket-condition'];
$_SESSION['jacket_condition_remark'] = $_POST['remark-jacket-condition'];

// Redirect to next form
header("Location: index3.html");
exit();
?>
