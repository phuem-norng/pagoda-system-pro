<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="km">
<head>
  <meta charset="UTF-8">
  <title>បន្ថែមសមាជិក</title>
</head>
<body>
  <h2>បន្ថែមសមាជិក</h2>
  <form action="add_save.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="នាម" required><br>
    <input type="number" name="age" placeholder="អាយុ" required><br>
    <input type="text" name="level" placeholder="ថ្នាក់" required><br>
    <input type="date" name="date_join" required><br>
    <input type="text" name="group_name" placeholder="Group (e.g., D)" required><br>
    <input type="file" name="photo" accept="image/*" required><br>
    <button type="submit">រក្សាទុក</button>
  </form>
</body>
</html>
