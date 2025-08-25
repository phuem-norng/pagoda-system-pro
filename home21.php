<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="km">
<head>
  <meta charset="UTF-8">
  <title>កុដិលេខ ២១</title>
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

<h5>កុដិលេខ ២១</h5>

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
      ["id" => 1, "name" => "ព្រះចរិយានុរ័ក្ខញាណ", "age" => 25, "photo" => "p1.jpg"]
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
      <td>០១/មករា/១៩៨០</td>
      <td>២២/០៤/២០០០</td>
      <td>២០០៥</td>
      <td>បុប្ផាសុវណ្ណ</td>
      <td>អន្លង់ត្នោត</td>
      <td>ក្រគរ</td>
      <td>ពោធិ៍សាត់</td>
      <td>ខេមរៈ</td>
      <td>ទី៣</td>
      <td>បណ្ឌិត</td>
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
      ["id" => 2, "name" => "គន ចំរើន", "age" => 7, "photo" => "p2.jpg"]
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
      <td>០៩/កុម្ភៈ/១៩៩៧</td>
      <td>២៤/១០/២០១៨</td>
      <td>២០១៩</td>
      <td>ក្បាលដំរី</td>
      <td>ទំរីង</td>
      <td>សណ្ដាន់</td>
      <td>កំពង់ធំ</td>
      <td>សីហនុរាជ</td>
      <td>ទី៤</td>
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
      ["id" => 3, "name" => "ម៉ូ សារុន", "age" => 3, "photo" => "p3.jpg"]
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
      <td>០២/ឧសភា/១៩៩៩</td>
      <td>២៤/០៤/២០២២</td>
      <td>២០២២</td>
      <td>ត្បែងជុំ</td>
      <td>ឈើតុំ</td>
      <td>ក្រគរ</td>
      <td>ពោធិ៍សាត់</td>
      <td>សីហនុរាជ</td>
      <td>ទី៣</td>
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
      ["id" => 4, "name" => "ស៊ីន វណ្ឌី", "age" => 9, "photo" => "p4.jpg"]
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
      <td>សាមណេរ</td>
      <td>១៤/មេសា/២០០០</td>
      <td>០២/០៥/២០១៥</td>
      <td>២០២១</td>
      <td>គិរីអណ្ដែត</td>
      <td>ធម្មតាអរ</td>
      <td>សំរោងទង</td>
      <td>កំពង់ស្ពឺ</td>
      <td>សីហនុរាជ</td>
      <td>ទី៤</td>
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
      ["id" => 5, "name" => "ផៃ ចំរ៉ុង", "age" => 9, "photo" => "p5.jpg"]
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
      <td>១៨/តុលា/២០០៧</td>
      <td>១៧/០៥/២០១៥</td>
      <td>២០២០</td>
      <td>ត្រពាំងរំសែង</td>
      <td>ត្រពាំងផ្លុង</td>
      <td>ពញាក្រែក</td>
      <td>ត្បូងឃ្មុំ</td>
      <td>សុរាម្រឹត</td>
      <td>ទី១២</td>
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
      ["id" => 6, "name" => "ថាត សីហា", "age" =>9, "photo" => "p6.jpg"]
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
      <td>០១/សិហា/២០០៣</td>
      <td>០១/០៥/២០១៥</td>
      <td>២០២១</td>
      <td>ត្រពាំងរំសែង</td>
      <td>ត្រពាំងផ្លុង</td>
      <td>ពញាក្រែក</td>
      <td>ត្បូងឃ្មុំ</td>
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
      ["id" => 7, "name" => "កង មករា", "age" => 8, "photo" => "p7.jpg"]
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
      <td>០៤/មករា/២០០៦</td>
      <td>០១/០១/២០១៧</td>
      <td>២០២១</td>
      <td>សាឡូង</td>
      <td>វល្លិ៍ស</td>
      <td>សំរោងទង</td>
      <td>កំពង់ស្ពឺ</td>
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
      ["id" => 8, "name" => "សុខ រ៉េត", "age" => 5, "photo" => "p8.jpg"]
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
      <td>៣១/ឧសភា/២០០៧</td>
      <td>០៥/០៥/២០២០</td>
      <td>២០២៤</td>
      <td>ត្រពាំអឬស្សី</td>
      <td>សំរោង</td>
      <td>ព្រៃឈរ</td>
      <td>កំពង់ចាម</td>
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
      ["id" => 9, "name" => "ផៃ វណ្ណារ៉ា", "age" => 6, "photo" => "p9.jpg"]
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
      <td>១២/ធ្នូ/២០០៨</td>
      <td>១៤/០៨/២០១៩</td>
      <td>២០២៣</td>
      <td>គិរីអណ្ដែត</td>
      <td>ធម្មតាអរ</td>
      <td>សំរោងទង</td>
      <td>កំពង់ស្ពឺ</td>
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
      ["id" => 10, "name" => "ភិន សុហេង", "age" => 5, "photo" => "p10.jpg"]
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
      <td>២៤/តុលា/២០០៥</td>
      <td>០១/០៩/២០២១</td>
      <td>២០២៣</td>
      <td>បព្វតាវណ្ណារាម</td>
      <td>ឆ្លូង</td>
      <td>ឆ្លូង</td>
      <td>ក្រចេះ</td>
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
      ["id" => 11, "name" => "ឆុន យ៉ុន", "age" => 5, "photo" => "p11.jpg"]
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
      <td>២១/កុម្ភៈ/២០១២</td>
      <td>០៨/០២/២០២០</td>
      <td>២០២៣</td>
      <td>គិរីអណ្ដែត</td>
      <td>ធម្មតាអរ</td>
      <td>សំរោងទង</td>
      <td>កំពង់ស្ពឺ</td>
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
  "សរុបចំនួនទាំងអស់៖ ១១អង្គ ភិក្ខុ=៣ ​អង្គ សាមណេរ=៨ អង្គ​"
</div>

</body>
</html>
