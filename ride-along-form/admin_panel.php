<?php
include 'db_connect.php';

// Fetch all records
$sql = "SELECT id, date, name, vehicle_number FROM ride_along_form";
$result = $conn->query($sql);

echo "<h1>Admin Panel - Two Wheeler Ride Along Form</h1>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Date</th>
<th>Name</th>
<th>Vehicle Number</th>
<th>Actions</th>
</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['vehicle_number'] . "</td>";
        echo "<td><a href='view_details.php?id=" . $row['id'] . "'>View Details</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No records found.</td></tr>";
}

echo "</table>";

$conn->close();
?>
