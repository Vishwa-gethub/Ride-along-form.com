<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM ride_along_form WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No details found for this record.";
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    echo "No record ID provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details - Two Wheeler Ride Along Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            color: #000;
            margin: 15px;
            padding: 15px;
            font-size: 12px; /* Reduced font size */
        }

        .header {
            margin-bottom: 15px;
        }

        .section {
            margin-bottom: 15px;
        }

        .section h2 {
            font-size: 14px; /* Reduced font size */
            margin-bottom: 8px;
            color: black;
            text-decoration: underline;
        }

        p {
            margin: 3px 0 12px 0; /* Adjusted spacing */
            line-height: 1.4; /* Adjusted line height */
        }

        .label {
            font-weight: bold;
        }

        .input-line {
            display: inline-block;
            min-width: 80px; /* Reduced min-width */
            border-bottom: 1px solid #000;
            padding: 0 4px; /* Reduced padding */
            margin-left: 15px; /* Reduced margin */
        }

        .actions {
            text-align: center;
            margin-top: 15px;
        }

        .actions button {
            padding: 8px 15px; /* Adjusted padding */
            margin: 4px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px; /* Reduced font size */
        }

        .print-btn {
            background-color: green;
            color: white;
        }

        .pdf-btn {
            background-color: blue;
            color: white;
        }
    </style>
    <script>
        function printPage() {
            window.print();
        }

        function downloadPDF() {
            window.location.href = 'download_pdf.php?id=<?php echo $row["id"]; ?>';
        }
    </script>
</head>
<body>
<h1 class="title">TWO WHEELER RIDE ALONG FORM</h1>
    <div class="header">
        <p>Date: <span class="input-line"><?php echo $row['date']; ?></span></p>
        <p>Name: <span class="input-line"><?php echo $row['name']; ?></span> HQ: <span class="input-line"><?php echo $row['hq']; ?></span> Team: <span class="input-line"><?php echo $row['team']; ?></span></p>
    </div>

    <div class="section">
        <h2>Vehicle Assessment</h2>
        <p>* Is the Vehicle Tyre Pressure correct? Front: <span class="input-line"><?php echo $row['tyre_pressure_front']; ?></span> Rear: <span class="input-line"><?php echo $row['tyre_pressure_rear']; ?></span> Condition: <span class="input-line"><?php echo $row['tyre_pressure']; ?></span> Remarks: <span class="input-line"><?php echo $row['tyre_pressure_remark']; ?></span></p>
        <p>* How is the threading condition of the tyres? Are there any cuts? <span class="input-line"><?php echo $row['threading_condition']; ?></span> Remarks: <span class="input-line"><?php echo $row['threading_condition_remark']; ?></span></p>
        <p>* Is the speedometer functioning properly? <span class="input-line"><?php echo $row['speedometer']; ?></span> Remarks: <span class="input-line"><?php echo $row['speedometer_remark']; ?></span></p>
        <p>* Is the fuel meter functioning properly? <span class="input-line"><?php echo $row['fuel_meter']; ?></span> Remarks: <span class="input-line"><?php echo $row['fuel_meter_remark']; ?></span></p>
        <p>* Are both mirrors present? Is it positioned properly as per rider's eye line? <span class="input-line"><?php echo $row['mirrors']; ?></span> Remarks: <span class="input-line"><?php echo $row['mirrors_remark']; ?></span></p>
        <p>* Do the front and rear brakes function properly? <span class="input-line"><?php echo $row['brakes']; ?></span> Remarks: <span class="input-line"><?php echo $row['brakes_remark']; ?></span></p>
        <p>* Is the horn functioning properly? <span class="input-line"><?php echo $row['horn']; ?></span> Remarks: <span class="input-line"><?php echo $row['horn_remark']; ?></span></p>
        <p>* Is the auto/kick starter functioning properly? <span class="input-line"><?php echo $row['starter']; ?></span> Remarks: <span class="input-line"><?php echo $row['starter_remark']; ?></span></p>
        <p>* Is the vehicle key in good condition? Check for any bend or rust. <span class="input-line"><?php echo $row['vehicle_key']; ?></span> Remarks: <span class="input-line"><?php echo $row['vehicle_key_remark']; ?></span></p>
        <p>* How is the seat condition of the vehicle? Is there any damage/cuts? <span class="input-line"><?php echo $row['seat_condition']; ?></span> Remarks: <span class="input-line"><?php echo $row['seat_condition_remark']; ?></span></p>
        <p>* Is the main stand & side stand functioning properly? <span class="input-line"><?php echo $row['stand']; ?></span> Remarks: <span class="input-line"><?php echo $row['stand_remark']; ?></span></p>
        <p>* Are the number plates of the vehicle clearly visible? <span class="input-line"><?php echo $row['number_plates']; ?></span> Remarks: <span class="input-line"><?php echo $row['number_plates_remark']; ?></span></p>
    </div>

    <div class="section">
        <h2>Rider Assessment</h2>
        <p>* Does the rider use hand signal/indicator while taking a turn? <span class="input-line"><?php echo $row['hand_signal']; ?></span> Remarks: <span class="input-line"><?php echo $row['hand_signal_remark']; ?></span></p>
        <p>* Does the rider overtake from the correct side? <span class="input-line"><?php echo $row['overtake']; ?></span> Remarks: <span class="input-line"><?php echo $row['overtake_remark']; ?></span></p>
        <p>* Does the rider wear shoes with well-defined heel while riding? <span class="input-line"><?php echo $row['shoes']; ?></span> Remarks: <span class="input-line"><?php echo $row['shoes_remark']; ?></span></p>
        <p>* Is the rider sleepy while riding? <span class="input-line"><?php echo $row['sleepy']; ?></span> Remarks: <span class="input-line"><?php echo $row['sleepy_remark']; ?></span></p>
        <p>* Does the rider stop at traffic signals? <span class="input-line"><?php echo $row['traffic_signals']; ?></span> Remarks: <span class="input-line"><?php echo $row['traffic_signals_remark']; ?></span></p>
        <p>* Does the rider use mobile phone while riding? <span class="input-line"><?php echo $row['mobile']; ?></span> Remarks: <span class="input-line"><?php echo $row['mobile_remark']; ?></span></p>
        <p>* Does the rider follow legal speed limits? <span class="input-line"><?php echo $row['speed_limits']; ?></span> Remarks: <span class="input-line"><?php echo $row['speed_limits_remark']; ?></span></p>
        <p>* Is the rider's sitting posture correct? Check the position of hands, elbows, knees & thighs. <span class="input-line"><?php echo $row['posture']; ?></span> Remarks: <span class="input-line"><?php echo $row['posture_remark']; ?></span></p>
        <p>* Does the rider make way for ambulance? <span class="input-line"><?php echo $row['ambulance']; ?></span> Remarks: <span class="input-line"><?php echo $row['ambulance_remark']; ?></span></p>
        <p>* Is the rider courteous to other road users? <span class="input-line"><?php echo $row['courteous']; ?></span> Remarks: <span class="input-line"><?php echo $row['courteous_remark']; ?></span></p>
        <p>* Has the rider attended Safe Rider Programme? Date: <span class="input-line"><?php echo $row['safe_rider_program']; ?></span> Remarks: <span class="input-line"><?php echo $row['safe_rider_program_remark']; ?></span></p>
        <p>* Does the rider wear AZ Helmet with strap buckled? <span class="input-line"><?php echo $row['helmet']; ?></span> Remarks: <span class="input-line"><?php echo $row['helmet_remark']; ?></span></p>
        <p>* Is the helmet in good condition? <span class="input-line"><?php echo $row['helmet_condition']; ?></span> Remarks: <span class="input-line"><?php echo $row['helmet_condition_remark']; ?></span></p>
        <p>* Does the rider wear AZ Jacket? <span class="input-line"><?php echo $row['jacket']; ?></span> Remarks: <span class="input-line"><?php echo $row['jacket_remark']; ?></span></p>
        <p>* Is the jacket in good condition? <span class="input-line"><?php echo $row['jacket_condition']; ?></span> Remarks: <span class="input-line"><?php echo $row['jacket_condition_remark']; ?></span></p>
    </div>

    <div class="section">
        <h2>Vehicle Details</h2>
        <p>Current Vehicle: <span class="input-line"><?php echo $row['current_vehicle']; ?></span> Vehicle Type: <span class="input-line"><?php echo $row['vehicle_type']; ?></span></p>
        <p>Vehicle Number: <span class="input-line"><?php echo $row['vehicle_number']; ?></span> Manufacturer: <span class="input-line"><?php echo $row['manufacturer']; ?></span></p>
        <p>Model: <span class="input-line"><?php echo $row['model']; ?></span></p>
        <p>Do you use a Secondary Vehicle for field Work? <span class="input-line"><?php echo $row['use_secondary']; ?></span></p>
        <p>Secondary Vehicle Number: <span class="input-line"><?php echo $row['secondary_vehicle_number']; ?></span></p>
        <p>Secondary Manufacturer: <span class="input-line"><?php echo $row['secondary_manufacturer']; ?></span> Secondary Model: <span class="input-line"><?php echo $row['secondary_model']; ?></span></p>
        <p>Secondary Vehicle Type: <span class="input-line"><?php echo $row['secondary_vehicle_type']; ?></span> Secondary Fuel Type: <span class="input-line"><?php echo $row['secondary_fuel_type']; ?></span></p>
    </div>

    <div class="actions">
        <button class="print-btn" onclick="printPage()">Print</button>
        <button class="pdf-btn" onclick="downloadPDF()">Download PDF</button>
    </div>

</body>
</html>
