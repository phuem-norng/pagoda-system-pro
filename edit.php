<!-- edit.php -->
<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM monks WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="km">
<head>
  <meta charset="UTF-8">
  <title>កែប្រែសមាជិក</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Battambang', cursive;
      background: #f4f6f7;
      padding: 30px;
    }
    .container {
      background: white;
      padding: 30px;
      border-radius: 12px;
      max-width: 900px;
      margin: auto;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h4 {
      background: #00acc1;
      color: white;
      padding: 12px;
      border-radius: 8px;
      text-align: center;
      margin-bottom: 30px;
    }
    label {
      font-weight: bold;
    }
    .btn {
      background-color: #00acc1;
    }
    .btn:hover {
      background-color: #008b9a;
    }
  </style>
</head>
<body>
  <div class="container">
    <h4>កែប្រែព័ត៌មានសមាជិក</h4>
    <form action="edit_save.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $row['id'] ?>">

      <div class="input-field">
        <label for="name">នាមទោស / នាម</label>
        <input type="text" name="name" id="name" value="<?= $row['name'] ?>" required>
      </div>

      <div class="input-field">
        <label for="role">តួនាទី</label>
        <input type="text" name="role" id="role" value="<?= $row['role'] ?>">
      </div>

      <div class="input-field">
        <label for="age">អាយុ</label>
        <input type="text" name="age" id="age" value="<?= $row['age'] ?>">
      </div>

      <div class="input-field">
        <label for="status">ភាវៈ</label>
        <input type="text" name="status" id="status" value="<?= $row['status'] ?>">
      </div>

      <div class="input-field">
        <label for="birth_date">ថ្ងៃខែឆ្នាំកំណើត</label>
        <input type="date" name="birth_date" id="birth_date" value="<?= $row['birth_date'] ?>">
      </div>

      <div class="input-field">
        <label for="ordination_date">ថ្ងៃខែឆ្នាំបួស</label>
        <input type="date" name="ordination_date" id="ordination_date" value="<?= $row['ordination_date'] ?>">
      </div>

      <div class="input-field">
        <label for="stay_year">ឆ្នាំស្នាក់នៅ</label>
        <input type="text" name="stay_year" id="stay_year" value="<?= $row['stay_year'] ?>">
      </div>

      <div class="input-field">
        <label for="temple_origin">វត្តកំណើត</label>
        <input type="text" name="temple_origin" id="temple_origin" value="<?= $row['temple_origin'] ?>">
      </div>

      <div class="input-field">
        <label for="commune">ឃុំ</label>
        <input type="text" name="commune" id="commune" value="<?= $row['commune'] ?>">
      </div>

      <div class="input-field">
        <label for="district">ស្រុក</label>
        <input type="text" name="district" id="district" value="<?= $row['district'] ?>">
      </div>

      <div class="input-field">
        <label for="province">ខេត្ត</label>
        <input type="text" name="province" id="province" value="<?= $row['province'] ?>">
      </div>

      <div class="input-field">
        <label for="school">សាលា</label>
        <input type="text" name="school" id="school" value="<?= $row['school'] ?>">
      </div>

      <div class="input-field">
        <label for="academic_year">ឆ្នាំសិក្សា</label>
        <input type="text" name="academic_year" id="academic_year" value="<?= $row['academic_year'] ?>">
      </div>

      <div class="input-field">
        <label for="education_level">កម្រិតវប្បធម៌</label>
        <input type="text" name="education_level" id="education_level" value="<?= $row['education_level'] ?>">
      </div>

      <div class="input-field">
        <label for="note">ផ្សេងៗ</label>
        <input type="text" name="note" id="note" value="<?= $row['note'] ?>">
      </div>

      <div class="file-field input-field">
        <div class="btn">
          <span>រូបភាព</span>
          <input type="file" name="photo">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="ជ្រើសរូបភាពថ្មី បើចង់ផ្លាស់ប្តូរ">
        </div>
      </div>

      <div class="center-align">
        <button type="submit" class="btn waves-effect waves-light">រក្សាទុក</button>
      </div>
    </form>
  </div>
</body>
</html>
