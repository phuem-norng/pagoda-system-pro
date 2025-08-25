<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="km">
<head>
  <meta charset="UTF-8">
  <title>កុដាសាលាបាឡី D</title>
  <link href="https://fonts.googleapis.com/css2?family=Battambang&display=swap" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
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

<h5>កុដិសាលាបាលី D</h5>

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
      ["id" => 1, "name" => "ព្រែក គន្ធី", "age" => 18, "photo" => "p1.jpg"]
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
      <td>០៩/១០/១៩៨២</td>
      <td>៣០/០៤/២០០៧</td>
      <td>២០១៥</td>
      <td>អង្គមានជ័យ</td>
      <td>វាល</td>
      <td>គងពិសី</td>
      <td>កំពង់ស្ពឺ</td>
      <td>SBU</td>
      <td>ចប់</td>
      <td>Master</td>
      <td>ធ្វើការ</td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 2, "name" => "ត្រោក​ ភាស់", "age" => 1, "photo" => "p2.jpg"]
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
      <td>២៥/០៦/២០០៤</td>
      <td>៣១/០៥/២០១៥</td>
      <td>២០២២</td>
      <td>សិរីរតនារាម</td>
      <td>គិរិវន្ត</td>
      <td>ភ្នំស្រួច</td>
      <td>កំពង់ស្ពឺ</td>
      <td>RULL</td>
      <td>ទី២</td>
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
      ["id" => 3, "name" => "ផន​ ផាត់", "age" => 4, "photo" => "p3.jpg"]
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
      <td>អនុកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>១០/០៣/២០០០</td>
      <td>២៥/១១/២០១៨</td>
      <td>២០២២</td>
      <td>សិរីរតនារាម</td>
      <td>ព្រៃក្មេង</td>
      <td>ភ្នំស្រួច</td>
      <td>កំពង់ស្ពឺ</td>
      <td>RULL</td>
      <td>ទី៣</td>
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
      ["id" => 4, "name" => "ភឹម ណង", "age" => 3, "photo" => "p4.jpg"]
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
      <td>ភិក្ខុ</td>
      <td>២៩/១១/២០០០</td>
      <td>០២/១២/២០១៤</td>
      <td>២០២២</td>
      <td>សាឡូងពោធិ៍មង្គល</td>
      <td>ត្រពាំងជោ</td>
      <td>ឳរ៉ាល់</td>
      <td>កំពង់ស្ពឺ</td>
      <td>NU</td>
      <td>ទី៣</td>
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
      ["id" => 5, "name" => "យឹម យ៉ាន", "age" => 2, "photo" => "p5.jpg"]
    ];
    $i = 5;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m5.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>១៥/១២/២០០១</td>
      <td>០៩/១១/២០១៣</td>
      <td>២០២២</td>
      <td>ឈើទាល</td>
      <td>មានរឹត</td>
      <td>សណ្ដាន់</td>
      <td>កំពង់ធំ</td>
      <td>RUPP</td>
      <td>ទី៣</td>
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
      ["id" => 6, "name" => "សេម សុវណ្ណឆៃ", "age" => 4, "photo" => "p6.jpg"]
    ];
    $i = 6;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m6.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>០២/០៨/២០០០</td>
      <td>២៥/១២/២០២០</td>
      <td>២០២២</td>
      <td>ពារស់</td>
      <td>រស្មីសាមគ្គី</td>
      <td>ឳរ៉ាល់</td>
      <td>កំពង់ស្ពឺ</td>
      <td>RULL</td>
      <td>ទី៣</td>
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
      ["id" => 7, "name" => "បូ លន់", "age" => 1, "photo" => "p7.jpg"]
    ];
    $i = 7;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m7.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>១៥/០៧/២០០៥</td>
      <td>២៨/០៣/២០១៩</td>
      <td>២០២៤</td>
      <td>សិរីរតនារាម</td>
      <td>តាសាល</td>
      <td>ឳរ៉ាល់</td>
      <td>កំពង់ស្ពឺ</td>
      <td>AEU</td>
      <td>ទី១</td>
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
      ["id" => 8, "name" => "សឿន ជំនោ", "age" => 1, "photo" => "p8.jpg"]
    ];
    $i = 8;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m8.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>១២/០៣/២០០៥</td>
      <td>២៨/០៥/២០១៩</td>
      <td>២០២៤</td>
      <td>សិរីរតនារាម</td>
      <td>គិរិវន្ត</td>
      <td>ភ្នំស្រួច</td>
      <td>កំពង់ស្ពឺ</td>
      <td>AEU</td>
      <td>ទី១</td>
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
      ["id" => 9, "name" => "ញឹន ធាន", "age" => 1, "photo" => "p9.jpg"]
    ];
    $i = 9;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m9.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>១៩/១១/២០០៣</td>
      <td>២៧/១២/២០១៥</td>
      <td>២០២៤</td>
      <td>សិរីរតនារាម</td>
      <td>គិរិវន្ត</td>
      <td>ភ្នំស្រួច</td>
      <td>កំពង់ស្ពឺ</td>
      <td>AEU</td>
      <td>ទី១</td>
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
      ["id" => 10, "name" => "គាម ណាកន", "age" => 11, "photo" => "p10.jpg"]
    ];
    $i = 10;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m10.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>១២/០៧/២០០២</td>
      <td>២៣/០៤/២០១៤</td>
      <td>២០២០</td>
      <td>ស្លែង</td>
      <td>កំពង់គោ</td>
      <td>កំពង់ស្វាយ</td>
      <td>កំពង់ធំ</td>
      <td>SETEC</td>
      <td>ទី១</td>
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
      ["id" => 11, "name" => "ធន ចន្ធី", "age" => 9, "photo" => "p11.jpg"]
    ];
    $i = 11;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="m11.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>២៦/១២/២០០៥</td>
      <td>០៦/០៥/២០១៦</td>
      <td>២០២២</td>
      <td>មុនីកោសី</td>
      <td>យាអង្គ</td>
      <td>ថ្ពង</td>
      <td>កំពង់ស្ពឺ</td>
      <td>RULL</td>
      <td>ទី៣</td>
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
    <?php } ?>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    <?php } ?>
    <?php } ?>
  </tbody>
</table>



<div class="green-footer">
  "សរុបចំនួនទាំងអស់៖ ១១អង្គ ភិក្ខុ=៩ ​អង្គ សាមណេរ=២ អង្គ​"
</div>

</body>
</html>
