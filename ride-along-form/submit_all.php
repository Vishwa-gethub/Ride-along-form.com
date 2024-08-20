<?php
include 'db_connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect previous session data
    $date = $_SESSION['date'];
    $hq = $_SESSION['hq'];
    $team = $_SESSION['team'];
    $name = $_SESSION['name'];
    $tyre_pressure_front = $_SESSION['tyre_pressure_front'];
    $tyre_pressure_rear = $_SESSION['tyre_pressure_rear'];
    $tyre_pressure = $_SESSION['tyre_pressure'];
    $tyre_pressure_remark = $_SESSION['tyre_pressure_remark'];
    $threading_condition = $_SESSION['threading_condition'];
    $threading_condition_remark = $_SESSION['threading_condition_remark'];
    $speedometer = $_SESSION['speedometer'];
    $speedometer_remark = $_SESSION['speedometer_remark'];
    $fuel_meter = $_SESSION['fuel_meter'];
    $fuel_meter_remark = $_SESSION['fuel_meter_remark'];
    $mirrors = $_SESSION['mirrors'];
    $mirrors_remark = $_SESSION['mirrors_remark'];
    $brakes = $_SESSION['brakes'];
    $brakes_remark = $_SESSION['brakes_remark'];
    $horn = $_SESSION['horn'];
    $horn_remark = $_SESSION['horn_remark'];
    $starter = $_SESSION['starter'];
    $starter_remark = $_SESSION['starter_remark'];
    $vehicle_key = $_SESSION['vehicle_key'];
    $vehicle_key_remark = $_SESSION['vehicle_key_remark'];
    $seat_condition = $_SESSION['seat_condition'];
    $seat_condition_remark = $_SESSION['seat_condition_remark'];
    $stand = $_SESSION['stand'];
    $stand_remark = $_SESSION['stand_remark'];
    $number_plates = $_SESSION['number_plates'];
    $number_plates_remark = $_SESSION['number_plates_remark'];
    $hand_signal = $_SESSION['hand_signal'];
    $hand_signal_remark = $_SESSION['hand_signal_remark'];
    $overtake = $_SESSION['overtake'];
    $overtake_remark = $_SESSION['overtake_remark'];
    $shoes = $_SESSION['shoes'];
    $shoes_remark = $_SESSION['shoes_remark'];
    $sleepy = $_SESSION['sleepy'];
    $sleepy_remark = $_SESSION['sleepy_remark'];
    $traffic_signals = $_SESSION['traffic_signals'];
    $traffic_signals_remark = $_SESSION['traffic_signals_remark'];
    $mobile = $_SESSION['mobile'];
    $mobile_remark = $_SESSION['mobile_remark'];
    $speed_limits = $_SESSION['speed_limits'];
    $speed_limits_remark = $_SESSION['speed_limits_remark'];
    $posture = $_SESSION['posture'];
    $posture_remark = $_SESSION['posture_remark'];
    $ambulance = $_SESSION['ambulance'];
    $ambulance_remark = $_SESSION['ambulance_remark'];
    $courteous = $_SESSION['courteous'];
    $courteous_remark = $_SESSION['courteous_remark'];
    $safe_rider_program = $_SESSION['safe_rider_program'];
    $safe_rider_program_remark = $_SESSION['safe_rider_program_remark'];
    $helmet = $_SESSION['helmet'];
    $helmet_remark = $_SESSION['helmet_remark'];
    $helmet_condition = $_SESSION['helmet_condition'];
    $helmet_condition_remark = $_SESSION['helmet_condition_remark'];
    $jacket = $_SESSION['jacket'];
    $jacket_remark = $_SESSION['jacket_remark'];
    $jacket_condition = $_SESSION['jacket_condition'];
    $jacket_condition_remark = $_SESSION['jacket_condition_remark'];

    // Collect data from current form (index3.html)
    $current_vehicle = $_POST['current-vehicle'];
    $vehicle_type = $_POST['vehicle-type'];
    $vehicle_primary_secondary = $_POST['vehicle-primary-secondary'];
    $vehicle_number = $_POST['vehicle-number'];
    $manufacturer = $_POST['manufacturer'];
    $model = $_POST['model'];
    $use_secondary = $_POST['use-secondary'];
    $secondary_vehicle_number = $_POST['secondary-vehicle-number'];
    $secondary_manufacturer = $_POST['secondary-manufacturer'];
    $secondary_model = $_POST['secondary-model'];
    $secondary_vehicle_type = $_POST['secondary-vehicle-type'];
    $secondary_fuel_type = $_POST['secondary-fuel-type'];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO ride_along_form 
        (date, hq, team, name, tyre_pressure_front, tyre_pressure_rear, tyre_pressure, tyre_pressure_remark, 
        threading_condition, threading_condition_remark, speedometer, speedometer_remark, fuel_meter, fuel_meter_remark, 
        mirrors, mirrors_remark, brakes, brakes_remark, horn, horn_remark, starter, starter_remark, vehicle_key, 
        vehicle_key_remark, seat_condition, seat_condition_remark, stand, stand_remark, number_plates, number_plates_remark, 
        hand_signal, hand_signal_remark, overtake, overtake_remark, shoes, shoes_remark, sleepy, sleepy_remark, 
        traffic_signals, traffic_signals_remark, mobile, mobile_remark, speed_limits, speed_limits_remark, posture, 
        posture_remark, ambulance, ambulance_remark, courteous, courteous_remark, safe_rider_program, safe_rider_program_remark, 
        helmet, helmet_remark, helmet_condition, helmet_condition_remark, jacket, jacket_remark, jacket_condition, 
        jacket_condition_remark, current_vehicle, vehicle_type, vehicle_primary_secondary, vehicle_number, 
        manufacturer, model, use_secondary, secondary_vehicle_number, secondary_manufacturer, secondary_model, 
        secondary_vehicle_type, secondary_fuel_type) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss", 
        $date, $hq, $team, $name, $tyre_pressure_front, $tyre_pressure_rear, $tyre_pressure, $tyre_pressure_remark, 
        $threading_condition, $threading_condition_remark, $speedometer, $speedometer_remark, $fuel_meter, $fuel_meter_remark, 
        $mirrors, $mirrors_remark, $brakes, $brakes_remark, $horn, $horn_remark, $starter, $starter_remark, $vehicle_key, 
        $vehicle_key_remark, $seat_condition, $seat_condition_remark, $stand, $stand_remark, $number_plates, $number_plates_remark, 
        $hand_signal, $hand_signal_remark, $overtake, $overtake_remark, $shoes, $shoes_remark, $sleepy, $sleepy_remark, 
        $traffic_signals, $traffic_signals_remark, $mobile, $mobile_remark, $speed_limits, $speed_limits_remark, posture, 
        $posture_remark, $ambulance, $ambulance_remark, $courteous, $courteous_remark, $safe_rider_program, $safe_rider_program_remark, 
        $helmet, $helmet_remark, $helmet_condition, $helmet_condition_remark, $jacket, $jacket_remark, $jacket_condition, 
        $jacket_condition_remark, $current_vehicle, $vehicle_type, $vehicle_primary_secondary, $vehicle_number, 
        $manufacturer, $model, $use_secondary, $secondary_vehicle_number, $secondary_manufacturer, $secondary_model, 
        $secondary_vehicle_type, $secondary_fuel_type);

    if ($stmt->execute()) {
        // If data is inserted successfully, destroy the session and redirect to success page
        session_destroy();
        header("Location: success.html");
        exit();
    } else {
        // If there is an error, display it
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
