<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>OPENRO - ERP</title>

     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="./bootstrap/css/bootstrap-theme.min.css">
     <link rel="stylesheet" href="./js/Datatable/datatables.min.css" />

     <!-- CSS -->
     <link rel="stylesheet" href="./css/main.css" />
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-default">
  <a class="navbar-brand" href="#" onclick="document.getElementById('COMPANY').style.display='block'">COMPANY NAME3456789</a> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Intrări - <b>AP</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_01').style.display='block'">AP_01</a>
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_02').style.display='block'">AP_02</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_03').style.display='block'">AP_03</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ieșiri - <b>AR</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_01').style.display='block'">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bancă - <b>Bank</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_01').style.display='block'">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Jurnal - <b>GL</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_01').style.display='block'">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Raportări - <b>Reports</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_01').style.display='block'">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <b>Management</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_01').style.display='block'">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resurse Umane - <b>HR</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_01').style.display='block'">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Comercial - <b>Sales</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" onclick="document.getElementById('id_AP_01').style.display='block'">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="index.php">
    <img src="./image/Sigla.svg" alt="Sigla" class="sigla" onclick="document.getElementById('about').style.display='block'"></div>
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Logout</button>
    </form>
  </div>
</nav>

<!-- PAGES LIST -->
<?php include('pages/mod_style.php');?>
<!-- COMPANY -->
<?php include('pages/company.php');?>
<!-- AP -->
<?php include('pages/AP/01.php');?>
<?php include('pages/AP/02.php');?>   
<?php include('pages/AP/03.php');?> 
<!-- ABOUT -->
<?php include('pages/about.php');?>  
    


    <!-- Module pagina -->
    <script src="./js/data.js"></script>
    <!-- Bootstrap --> 
    <script src="./js/Datatable/dataTables.min.js"></script>
    <script src="./bootstrap/js/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>