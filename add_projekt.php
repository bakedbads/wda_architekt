<?php
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$database = "wda_architekt";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$project_name = $_POST['proj_name'];
$subtitle = $_POST['proj_subtitel'];
$description = $_POST['proj_bio'];
$area = $_POST['proj_area'];
$start_date = $_POST['proj_start'];
$start_date = $_POST['proj_finish'];
$completion_date = $_POST['proj_bauzeit'];
$construction_time = $_POST['proj_foto'];

// File upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

// Insert data into database
$sql = "INSERT INTO projects (project_name, subtitle, description, area, start_date, completion_date, construction_time, photo)
        VALUES ('$project_name', '$subtitle', '$description', $area, '$start_date', '$completion_date', $construction_time, '$target_file')";

if ($conn->query($sql) === TRUE) {
    echo "Projekt wurde erfolgreich hinzugefügt";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
