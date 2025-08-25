<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$level = $_POST['level'];
$date_join = $_POST['date_join'];
$group_name = $_POST['group_name'];
$role = $_POST['role'];
$vassa = $_POST['vassa'];
$status = $_POST['status'];
$birth_date = $_POST['birth_date'];
$ordination_date = $_POST['ordination_date'];
$stay_year = $_POST['stay_year'];
$temple_origin = $_POST['temple_origin'];
$commune = $_POST['commune'];
$district = $_POST['district'];
$province = $_POST['province'];
$school = $_POST['school'];
$academic_year = $_POST['academic_year'];
$education_level = $_POST['education_level'];
$note = $_POST['note'];

// Upload new photo if provided
if ($_FILES['photo']['name']) {
    $photo = $_FILES['photo']['name'];
    $target_dir = "image/";
    $target_file = $target_dir . basename($photo);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

    $sql = "UPDATE monks SET 
        name='$name',
        age=$age,
        level='$level',
        date_join='$date_join',
        group_name='$group_name',
        role='$role',
        vassa='$vassa',
        status='$status',
        birth_date='$birth_date',
        ordination_date='$ordination_date',
        stay_year='$stay_year',
        temple_origin='$temple_origin',
        commune='$commune',
        district='$district',
        province='$province',
        school='$school',
        academic_year='$academic_year',
        education_level='$education_level',
        note='$note',
        photo='$photo'
        WHERE id=$id";
} else {
    // No photo change
    $sql = "UPDATE monks SET 
        name='$name',
        age=$age,
        level='$level',
        date_join='$date_join',
        group_name='$group_name',
        role='$role',
        vassa='$vassa',
        status='$status',
        birth_date='$birth_date',
        ordination_date='$ordination_date',
        stay_year='$stay_year',
        temple_origin='$temple_origin',
        commune='$commune',
        district='$district',
        province='$province',
        school='$school',
        academic_year='$academic_year',
        education_level='$education_level',
        note='$note'
        WHERE id=$id";
}

// Execute update query
if ($conn->query($sql) === TRUE) {
    header("Location: kodisalad.php"); // ← change this to your listing page
    exit();
} else {
    echo "មានបញ្ហា៖ " . $conn->error;
}
?>
