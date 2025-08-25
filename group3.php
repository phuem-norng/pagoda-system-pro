<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>ក្រុមទី ៣</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Battambang&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    html, body {
      margin: 0;
      height: 100%;
      font-family: 'Battambang', 'Roboto', sans-serif;
    }

    .sidenav {
      width: 250px;
    }

    .sidenav .user-view {
      background: #00acc1;
      text-align: center;
      padding: 15px;
    }

    .user-view .admin-label {
      font-weight: bold;
      font-size: 50px;
      color: #fff;
    }

    .sidenav a {
      font-size: 16px;
    }

    .content-wrapper {
      margin-left: 250px;
      background: #f9f9f9;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    h2 {
      font-size: 36px;
      margin-bottom: 10px;
      color: #888;
    }

    h3 {
      font-size: 50px;
      font-weight: bold;
      color: #888;
    }

    footer.page-footer {
      background-color: rgba(212, 218, 220, 0.67);
      color: #000;
      text-align: center;
      padding: 10px 0;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li>
      <div class="user-view">
        <div class="admin-label">ក្រុមទី ៣</div>
      </div>
    </li>
    <li><a href="homeA.php"><i class="material-icons">home</i>កុដិសាលាបាលី A</a></li>
    <li><a href="homeB.php"><i class="material-icons">home</i>កុដិសាលាបាលី B</a></li>
    <li><a href="homeC.php"><i class="material-icons">home</i>កុដិសាលាបាលី C</a></li>
    <li><a href="homeD.php"><i class="material-icons">home</i>កុដិសាលាបាលី D</a></li>
    <li><a href="home17.php"><i class="material-icons">home</i>កុដិលេខ ១៧</a></li>
    <li><a href="home20.php"><i class="material-icons">home</i>កុដិលេខ ២០</a></li>
    <li><a href="home21.php"><i class="material-icons">home</i>កុដិលេខ ២១</a></li>
  </ul>

  <!-- Main Content -->
  <div class="content-wrapper">
    <main>
      <h2>ក្រុមទី ៣</h2>
      <h3>Management System</h3>
    </main>

    <!-- Footer -->
    <footer class="page-footer">
      <p>By Venerable Norng</p>
      <p>&copy; <?php echo date("Y"); ?> Wat Ounalom Monastery. All rights reserved.</p>
    </footer>
  </div>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
