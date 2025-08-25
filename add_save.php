<?php
include 'db.php';

$name = $_POST['name'];
$age = $_POST['age'];
$level = $_POST['level'];
$date_join = $_POST['date_join'];
$group_name = $_POST['group_name'];

$photo_name = $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($photo_tmp, "image/" . $photo_name);

$sql = "INSERT INTO monks (name, age, level, date_join, group_name, photo)
        VALUES ('$name', $age, '$level', '$date_join', '$group_name', '$photo_name')";

if ($conn->query($sql) === TRUE) {
    header("Location: kodisalad.php");
} else {
    echo "Error: " . $conn->error;
}
?>