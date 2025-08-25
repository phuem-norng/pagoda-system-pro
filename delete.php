<?php
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM monks WHERE id=$id";
if (mysqli_query($conn, $sql)) {
  header("Location: kodisalad.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>