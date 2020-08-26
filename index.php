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
     <link rel="stylesheet" href="./css/index.css" />
</head>
<body>
<div class="d-flex justify-content-center p-5">
<h1 class="text-secondary">Company Name</h1>
</div>
<div class="container">
        <div class="row col-5 mx-auto pt-3">
            <div class="jumbotron ">

                <form action="main.php" method="post">
                      
                      <div class="imgcontainer">
                        <img src="./image/feather/lock.svg" alt="Avatar" class="avatar">
                      </div>

                      <div class="container">
                        <label for="uname"><b>Utilizator | <span class="text-primary ">Username</span></b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required autofocus>
                        <p></p>
                        <label for="psw"><b>Parola | <span class="text-primary ">Password</span></b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        <p></p>
                        <button type="submit">Login</button>
                      </div>
                    
                </form>        
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="page-footer">
    <img src="./image/Sigla.svg" alt="Sigla" class="sigla">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://arcanepowertech.com/"> ArcanePowerTech.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <!-- Module pagina -->
    <script src="./js/data.js"></script>
    <!-- Bootstrap --> 
    <script src="./js/Datatable/dataTables.min.js"></script>
    <script src="./bootstrap/js/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
</body>


</html>