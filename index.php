<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Wat Ounalom Monastery</title>

  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Battambang&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <style>
    html, body {
      margin: 0;
      height: 100%;
      font-family: 'Battambang', 'Roboto', sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .sidenav {
      width: 250px;
    }

    .sidenav .user-view {
      background: #00acc1;
      text-align: left;
      padding: 30px 91px;
    }

    .user-view img.circle {
      width: 90px;
      height: 90px;
      border-radius: 70%;
      object-fit: cover;
      background: #fff;
    }

    .user-view .admin-label {
      margin-top: 10px;
      font-weight: bold;
      text-align: center;
      font-size: 20px;
      color: #fff;
    }

    .sidenav .collapsible-header {
      padding-left: 32px;
    }

    .sidenav .collapsible-header i.material-icons {
      margin-right: 16px;
    }

    .content-wrapper {
      margin-left: 250px;
      flex: 1;
      display: flex;
      flex-direction: column;
      background: #f4f4f4;
      overflow: auto;
    }

    main {
      flex: 5;
      padding: 40px;
    }

    footer.page-footer {
      background-color:rgba(212, 218, 220, 0.67);
      color: #080808;
      text-align: left;
      padding: 10px 0;
      width: 118%;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li>
      <div class="user-view">
        <img class="circle" src="logo.png" alt="Admin Avatar">
        <div class="admin-label">Admin</div>
      </div>
    </li>
    <li><a href="dashboard.php"><i class="material-icons">dashboard</i>Dashboard</a></li>
    <li>
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header"><i class="material-icons">group</i>ក្រុម<i class="material-icons right">arrow_drop_down</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="group1.php">ក្រុមទី ១</a></li>
              <li><a href="group2.php">ក្រុមទី ២</a></li>
              <li><a href="group3.php">ក្រុមទី ៣</a></li>
              <li><a href="group4.php">ក្រុមទី ៤</a></li>
              <li><a href="group5.php">ក្រុមទី ៥</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li><a href="sangha.php"><i class="material-icons">people</i>ព្រះសង្ឃសរុប</a></li>
    <li><a href="about.php"><i class="material-icons">info</i>About Us</a></li>
    <li><a href="contact.php"><i class="material-icons">contact_mail</i>Contact Us</a></li>
  </ul>

  <!-- Main Content -->
  <div class="content-wrapper">
    <main>
      <h1 style="text-align:center;">ស្វាមគន៍មកWebsite កុដិសាលាបាលីD</h1>
      <p style="text-align:center; max-width:600px; margin: 20px auto;">
        "សូមស្វាគមន៍មកកាន់គេហទំព័រ របស់វត្តឧណ្ណាលោម"
      </p>
    </main>
  </div>

  <!-- Footer -->
  <footer class="page-footer">
    <div class="container center-align">
      <p>By Venerable Norng</p>
      <p>&copy; <?php echo date("Y"); ?> Ounalom Monastery. All rights reserved.</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elemsSidenav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(elemsSidenav);

      var elemsCollapsible = document.querySelectorAll('.collapsible');
      M.Collapsible.init(elemsCollapsible);
    });
  </script>

</body>
</html>
