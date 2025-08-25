<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="km">
<head>
  <meta charset="UTF-8">
  <title>កុដាសាលាបាឡី A</title>
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

<h5>កុដិសាលាបាលី A</h5>

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
      ["id" => 1, "name" => "កែម ស្រេង", "age" => 25, "photo" => "p1.jpg"]
    ];
    $i = 1;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image/image-member/<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>មេកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>០៥/ឧសភា/១៩៨០</td>
      <td>២២/០៤/២០០០</td>
      <td>១៩៩៩</td>
      <td>ត្រពាំងរពៅ</td>
      <td>ព្រែកត្នោត</td>
      <td>ទឹកឈូ</td>
      <td>កំពត</td>
      <td>រាជបណ្ឌិត្យសភា</td>
      <td>ទី២</td>
      <td>បណ្ឌិត</td>
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
      ["id" => 2, "name" => "សន​ ចាន់ឌី", "age" => 25, "photo" => "p2.jpg"]
    ];
    $i = 2;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image-member/m2.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>អនុកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>១២/ឧសភា/១៩៨១</td>
      <td>២២/០៤/២០០០</td>
      <td>២០០៣</td>
      <td>យសសុវណ្ណរាម</td>
      <td>និរោធ</td>
      <td>មានជ័យ</td>
      <td>ភ្នំពេញ</td>
      <td>បៀលប្រាយ</td>
      <td></td>
      <td>អនុបណ្ឌិត</td>
      <td>រៀនចប់</td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 3, "name" => "អឿន ភាន់", "age" => 4, "photo" => "p3.jpg"]
    ];
    $i = 3;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image-member/m3.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>អនុកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>១៨/តុលា/១៩៩៣</td>
      <td>១៥/០៧/២០១៩</td>
      <td>២០២០</td>
      <td>ត្រពាំងរពៅ</td>
      <td>ព្រែកត្នោត</td>
      <td>ទឹកឈូ</td>
      <td>កំពត</td>
      <td>RULL</td>
      <td></td>
      <td>បរិញ្ញាបត្រ</td>
      <td>រៀនចប់</td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 4, "name" => "នឿន វឍ្ឍនា", "age" => 0, "photo" => "p4.jpg"]
    ];
    $i = 4;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image/image-member/m4.jpg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>២៧/ឧសភា/២០០៤</td>
      <td>២០/០៤/២០២៥</td>
      <td>២០២១</td>
      <td>ជោតិវង្សី</td>
      <td>កោះអន្លង់ចិន</td>
      <td>ស្អាង</td>
      <td>កណ្ដាល</td>
      <td>សុរាម្រឹត</td>
      <td>ទី១១</td>
      <td>ទុតិយភូមិ</td>
      <td></td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 5, "name" => "ឈៀង ប៊ុនឡេង", "age" => 8, "photo" => "p5.jpg"]
    ];
    $i = 5;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image-member/m5.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>០១/មិថុនា/២០០២</td>
      <td>២៨/០៤/២០១៧</td>
      <td>២០១៩</td>
      <td>ជលធីគិរីវ័ន</td>
      <td>ជីខក្រោម</td>
      <td>ស្រែអំបិល</td>
      <td>កោះកុង</td>
      <td>PUC</td>
      <td>ទី១</td>
      <td>បរិញ្ញាបត្រ</td>
      <td></td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 6, "name" => "ភាព ភា", "age" => 9, "photo" => "p6.jpg"]
    ];
    $i = 6;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image-member/m6.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>១៥/ឧសភា/២០០០</td>
      <td>៣១/០៣/២០១៦</td>
      <td>២០២៤</td>
      <td>ជលធីគិរីវ័ន</td>
      <td>ជីខក្រោម</td>
      <td>ស្រែអំបិល</td>
      <td>កោះកុង</td>
      <td>សីហមុនីរាជា</td>
      <td>ទី២</td>
      <td>បរិញ្ញាបត្រ</td>
      <td></td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 7, "name" => "ឃូយ ខួច", "age" => 10, "photo" => "p7.jpg"]
    ];
    $i = 7;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image-member/m7.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>០៦/មីនា/២០០០</td>
      <td>០១/១១/២០១៤</td>
      <td>២០២៤</td>
      <td>ត្រពាំងរពៅ</td>
      <td>ព្រែកត្នោត</td>
      <td>ទឹកឈូ</td>
      <td>កំពត</td>
      <td>សីហនុរាជ</td>
      <td>ទី២</td>
      <td>បរិញ្ញាបត្រ</td>
      <td></td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 8, "name" => "ចាប ពេជ្រ", "age" => 10, "photo" => "p8.jpg"]
    ];
    $i = 8;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image-member/m8.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>០១/កុម្ភៈ/២០០២</td>
      <td>០១/១១/២០១៤</td>
      <td>២០២៤</td>
      <td>ត្រពាំងរពៅ</td>
      <td>ព្រែកត្នោត</td>
      <td>ទឹកឈូ</td>
      <td>កំពត</td>
      <td>សីហនុរាជ</td>
      <td>ទី២</td>
      <td>បរិញ្ញាបត្រ</td>
      <td></td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 9, "name" => "លួន ឆាយ", "age" => 3, "photo" => "p9.jpg"]
    ];
    $i = 9;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image-member/m9.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>២៣/ធ្នូ/២០០៩</td>
      <td>១០/១០/២០២២</td>
      <td>២០២៣</td>
      <td>ជលធីគិរីវ័ន</td>
      <td>ជីខក្រោម</td>
      <td>ស្រែអំបិល</td>
      <td>កោះកុង</td>
      <td>សុរាម្រឹត</td>
      <td>ទី៩</td>
      <td>បឋមភូមិ</td>
      <td></td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 10, "name" => "រុណ វិស័យ", "age" => 3, "photo" => "p10.jpg"]
    ];
    $i = 10;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image-member/m10.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>០៥/កុម្ភៈ/២០០៩</td>
      <td>១៥/០៧/២០២២</td>
      <td>២០២៤</td>
      <td>ជ្រៃបឹងគ្រំ</td>
      <td>បឹងគ្រំ</td>
      <td>ល្វាឯម</td>
      <td>កណ្ដាល</td>
      <td>សុរាម្រឹត</td>
      <td>ទី៨</td>
      <td>បឋមភូមិ</td>
      <td></td>
      <td>
        <div class="action-icons">
          <a href="edit.php?id=<?= $m['id'] ?>"><i class="fas fa-pen"></i></a>
          <a href="delete.php?id=<?= $m['id'] ?>"><i class="fas fa-trash"></i></a>
        </div>
      </td>
    </tr>
    <?php
    $members = [
      ["id" => 11, "name" => "ឆាម ម៉ារ៉ា", "age" => 5, "photo" => "p11.jpg"]
    ];
    $i = 11;
    foreach ($members as $m) {
    ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="image-member/m11.jpeg<?= $m['id'] ?>.php">
          <img src="image/<?= $m['photo'] ?>" class="photo" />
        </a>
      </td>
      <td><?= $m['name'] ?></td>
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>សាមណេរ</td>
      <td>២៧/មិថុនា/២០០៩</td>
      <td>២៣/១០/២០២០</td>
      <td>២០២៥</td>
      <td>ជ្រៃបឹងគ្រំ</td>
      <td>បឹងគ្រំ</td>
      <td>ល្វាឯម</td>
      <td>កណ្ដាល</td>
      <td>សុរាម្រឹត</td>
      <td>ទី៧</td>
      <td>បឋមភូមិ</td>
      <td></td>
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
  "សរុបចំនួនទាំងអស់៖ ១១អង្គ ភិក្ខុ=៤ ​អង្គ សាមណេរ=៧ អង្គ​"
</div>

</body>
</html>
