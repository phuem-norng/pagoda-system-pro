<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="km">
<head>
  <meta charset="UTF-8">
  <title>កុដាសាលាបាឡី D</title>
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
      ["id" => 1, "name" => "សុង សុខហាក់", "age" => 5, "photo" => "p1.jpg"]
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
      <td>១៥/មីនា/១៩៩៣</td>
      <td>២៣/០៧/២០២១</td>
      <td>២០២៣</td>
      <td>រាជបូណ៌</td>
      <td>សាលាកំរើក</td>
      <td>សៀមរាប</td>
      <td>សៀមរាប</td>
      <td>ភូមិន្ទនីតិសាស្រ្ត</td>
      <td>២</td>
      <td>អនុបណ្ឌិត</td>
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
      ["id" => 2, "name" => "មឿន ចំរើន", "age" => 5, "photo" => "p2.jpg"]
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
      <td>០១/មីនា/១៩៩៨</td>
      <td>២៣/០៧/២០២១</td>
      <td>២០២២</td>
      <td>រាជបូណ៌</td>
      <td>សាលាកំរើក</td>
      <td>សៀមរាប</td>
      <td>សៀមរាប</td>
      <td>វិទ្យាស្ថានស៊ីតិច</td>
      <td>៣</td>
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
      ["id" => 3, "name" => "ហម សុភក្ដី", "age" => 10, "photo" => "p3.jpg"]
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
      <td>សមាជិកកុដិ</td>
      <td><?= $m['age'] ?> ឆ្នាំ</td>
      <td>ភិក្ខុ</td>
      <td>២៨/តុលា/២០០៧</td>
      <td>២៥/០៦/២០០៦</td>
      <td>២០១៦</td>
      <td>តាអុង</td>
      <td>តាអុង</td>
      <td>ចំការលើ</td>
      <td>កំពង់ចាម</td>
      <td>PUC</td>
      <td></td>
      <td>CBL</td>
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
      ["id" => 4, "name" => "យូ យុឡា", "age" => 3, "photo" => "p4.jpg"]
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
      <td>២១/វិច្ឆិកា/២០០៣</td>
      <td>០៥/០១/២០២៤</td>
      <td>២០២១</td>
      <td>ព្រះលានព្រះ</td>
      <td>កោងកាង</td>
      <td>ពញាក្រែក</td>
      <td>ត្បូងឃ្មុំ</td>
      <td>NU</td>
      <td>២</td>
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
      ["id" => 5, "name" => "យឹម ហង្ស", "age" => 1, "photo" => "p5.jpg"]
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
      <td>ភិក្ខុ</td>
      <td>១៨/ធ្នូ/២០០៥</td>
      <td>០៩/១០/២០១៦</td>
      <td>២០២៣</td>
      <td>ជោតិវ័ន</td>
      <td>ជាច</td>
      <td>កំចាយមារ</td>
      <td>ព្រៃវែង</td>
      <td>សុរាម្រឹត</td>
      <td>៣</td>
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
      ["id" => 6, "name" => "រុន ចាន់សារ៉ែម", "age" => 1, "photo" => "p6.jpg"]
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
      <td>ភិក្ខុ</td>
      <td>០១/មករា/២០០៤</td>
      <td>១២/០៧/២០១៦</td>
      <td>២០២២</td>
      <td>សុវណ្ណបព្វតារាម</td>
      <td>គងជ័យ</td>
      <td>អូររាំងឪ</td>
      <td>ត្បូងឃ្មុំ</td>
      <td>វ៉ាន់ដា</td>
      <td>១</td>
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
      ["id" => 7, "name" => "ភាន់ សេរីភាព", "age" => 1, "photo" => "p7.jpg"]
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
      <td>ភិក្ខុ</td>
      <td>៣០/ឧសភា/២០០៤</td>
      <td>១២/០៧/២០១៦</td>
      <td>២០២២</td>
      <td>សុវណ្ណបព្វតារាម</td>
      <td>គងជ័យ</td>
      <td>អូររាំងឪ</td>
      <td>ត្បូងឃ្មុំ</td>
      <td>វិទ្យាស្ថានស៊ីតិច</td>
      <td>១</td>
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
      ["id" => 8, "name" => "យ៉ាន ជុំ", "age" => 1, "photo" => "p8.jpg"]
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
      <td>ភិក្ខុ</td>
      <td>០៨/មករា/២០០៥</td>
      <td>២២/០៥/២០១៧</td>
      <td>២០២១</td>
      <td>សំរោងបុរី</td>
      <td>ជ្រៃ</td>
      <td>កំពង់ត្របែក</td>
      <td>ព្រៃវែង</td>
      <td>សុរាម្រឹត</td>
      <td>១</td>
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
      ["id" => 9, "name" => "ចិត្ត សិត", "age" => 9, "photo" => "p9.jpg"]
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
      <td>១០/កុម្ភៈ/២០០៤</td>
      <td>២២/០២/២០១៦</td>
      <td>២០២៣</td>
      <td>វិសុទ្ធិមគ្គ</td>
      <td>លាងដៃ</td>
      <td>អង្គរធំ</td>
      <td>សៀមរាប</td>
      <td>សុរាម្រឹត</td>
      <td>២</td>
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
      ["id" => 10, "name" => "សាត ឆានុន", "age" => 5, "photo" => "p10.jpg"]
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
      <td>១៤/តុលា/២០០២</td>
      <td>១៧/០៦/២០១៦</td>
      <td>២០២១</td>
      <td>ឧត្តមមុនីរង្សីចុងអំ</td>
      <td>ចុងអំពិល</td>
      <td>កញ្ជៀច</td>
      <td>ព្រៃវែង</td>
      <td>PUC</td>
      <td>១</td>
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
      ["id" => 11, "name" => "គង់ រតនបញ្ញា", "age" => 5, "photo" => "p11.jpg"]
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
      <td>១៨/តុលា/២០០៧</td>
      <td>២៥/០៧/២០២១</td>
      <td>២០២៤</td>
      <td>វត្តឧណ្ណាលោម</td>
      <td>ជ័យជំនះ</td>
      <td>ដូនពេញ</td>
      <td>ភ្នំពេញ</td>
      <td>សុរាម្រឹត</td>
      <td>១</td>
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
  "សរុបចំនួនទាំងអស់៖ ១១អង្គ ភិក្ខុ=៨ ​អង្គ សាមណេរ=៣ អង្គ​"
</div>

</body>
</html>
