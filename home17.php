<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="km">
<head>
  <meta charset="UTF-8">
  <title>កុដិលេខ ១៧</title>
  <link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: 'Battambang', cursive;
      background: white;
      margin: 0;
    }
    .header-bar {
      background-color: #00acc1;
      color: white;
      padding: 12px 20px;
      font-size: 20px;
      font-weight: bold;
    }
    h5 {
      background: orange;
      padding: 10px 20px;
      margin: 0;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 0;
      border: 1px solid #ccc;
    }
    th, td {
      padding: 10px;
      text-align: center;
      font-size: 14px;
      border: 1px solid #ddd;
    }
    th {
      background: #f5f5f5;
      font-weight: bold;
    }
    tr:nth-child(even) {
      background: #fafafa;
    }
    img.photo {
      width: 40px;
      height: 50px;
      object-fit: cover;
      border-radius: 4px;
      cursor: pointer;
    }
    .action-icons {
      display: flex;
      justify-content: center;
      gap: 10px;
    }
    .action-icons a {
      font-size: 18px;
      color: #007bff;
      text-decoration: none;
    }
    .action-icons a:hover {
      opacity: 0.8;
    }
    .action-icons .fa-trash {
      color: #007bff;
    }
    .green-footer {
      background: #e0f2f1;
      font-weight: bold;
      padding: 12px;
      text-align: center;
      font-size: 25px;
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="header-bar">
  ក្រុមទី ៣ | ADMIN
</div>

<h5>កុដិលេខ ១៧</h5>

<table>
  <thead>
    <tr>
      <th>ល.រ</th>
      <th>រូបភាព</th>
      <th>គោត្តនាម/នាម</th>
      <th>តួនាទី</th>
      <th>វស្សា</th>
      <th>ភាវៈ</th>
      <th>ថ្ងៃខែឆ្នាំកំណើត</th>
      <th>ថ្ងៃខែឆ្នាំបួស</th>
      <th>ឆ្នាំស្នាក់នៅ</th>
      <th>វត្តកំណើត</th>
      <th>ឃុំ</th>
      <th>ស្រុក</th>
      <th>ខេត្ត</th>
      <th>សាលា</th>
      <th>ឆ្នាំ</th>
      <th>កម្រិត</th>
      <th>ផ្សេងៗ</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $members = [
      ["id" => 1, "name" => "វ៉ាត សែន", "age" => 5, "photo" => "p1.jpg"]
    ];
    $i = 1;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m1.jpg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>មេកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>០៩/ឧសភា/១៩៩៩</td>
      <td>១៥/១០/២០២០</td>
      <td>២០២០</td>
      <td>អូរញ</td>
      <td>គោកធ្លកក្រោម</td>
      <td>ជីក្រែង</td>
      <td>សៀមរាប</td>
      <td>សីហមុនីរាជា</td>
      <td>១</td>
      <td>អនុបណ្ឌិត</td>
      <td>កំពុងសិក្សា</td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 2, "name" => "ជន តេម៉", "age" => 2, "photo" => "p2.jpg"]
    ];
    $i = 2;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m2.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>អនុកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>០៣/មករា/២០០២</td>
      <td>១៥/១០/២០២០</td>
      <td>២០២២</td>
      <td>អូរញ</td>
      <td>ខ្វាវ</td>
      <td>ជីក្រែង</td>
      <td>សៀមរាប</td>
      <td>បៀលប្រាយ</td>
      <td>៣</td>
      <td>បរិញ្ញាបត្រ</td>
      <td>កំពុងសិក្សា</td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 3, "name" => "ផៃ ផាក់", "age" => 14, "photo" => "p3.jpg"]
    ];
    $i = 3;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m3.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>០៦/ធ្នូ/២០០១</td>
      <td>២០/១០/២០១១</td>
      <td>២០២១</td>
      <td>អូរញ</td>
      <td>ខ្វាវ</td>
      <td>ជីក្រែង</td>
      <td>សៀមរាប</td>
      <td>ជាតិគ្រប់គ្រង</td>
      <td>៤</td>
      <td>បរិញ្ញាបត្រ</td>
      <td>ចប់</td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 4, "name" => "ទុំ ទន់", "age" => 10, "photo" => "p4.jpg"]
    ];
    $i = 4;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m4.jpg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>០៣/កក្កដា/២០០១</td>
      <td>០៧/០១/២០១៥</td>
      <td>២០២២</td>
      <td>អូរញ</td>
      <td>ខ្វាវ</td>
      <td>ជីក្រែង</td>
      <td>សៀមរាប</td>
      <td>បៀលប្រាយ</td>
      <td>៤</td>
      <td>បរិញ្ញាបត្រ</td>
      <td>កំពុងសិក្សា</td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    <?php } ?>
  </tbody>
</table>



<div class="green-footer">
  "សរុបចំនួនទាំងអស់៖ ៤អង្គ ភិក្ខុ=២ ​អង្គ សាមណេរ=២ អង្គ​"
</div>

</body>
</html>
