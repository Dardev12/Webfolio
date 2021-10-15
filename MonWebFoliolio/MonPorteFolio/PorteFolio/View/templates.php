<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="MonStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="img/DarDEVpro.ico" rel="icon">
    <title>DarDevPro</title>

    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
      
    }

    #madiva{
      display: none;
    }
    #cJoujou{
      display: none;
    }
    body{
      font-family: 'Ubuntu', sans-serif;
    }
  </style>
</head>
<body class="w3-flat-midnight-blue">
    <div class="jumbotron text-center" style="margin-bottom:0; 
    background-image: url(img/DarDev.png); 
    background-size: 100%; ">
        <h1 class="foo">Darren Lambert</h1>
        <p  class="foo"></p> 
    </div>
    <?php require('viewMenuebar.php'); ?> 
    <br> 
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12">
                <?php echo $contenu ?>
            </div>
        </div>
    </div>
    <br>

    <footer class="Footing container-fluid text-center">
          <div class="row">
              <div class="col-sm-3">
                <a class="iphoto btn btn-social mx-1" href="https://www.facebook.com/LeGrandMonarch/" target="_blank"><img class="iphoto" src="img\icons8-facebook-144.png" style="width:45%; height:45%;"> </a>
              </div>
              <div class="col-sm-3">
                <a class="iphoto btn btn-social mx-1" href="https://www.instagram.com/dardev21/" target="_blank"><img class="iphoto" src="img\icons8-instagram-144.png" style="width:45%; height:45%;"></a>
              </div>
              <div class="col-sm-3">
                <a class="iphoto btn btn-social mx-1" href="https://www.linkedin.com/in/darren-lambert-b48a4a196/" target="_blank"><img class="iphoto" src="img\icons8-linkedin-144.png" style="width:45%; height:45%;"> </a>
              </div>
              <div class="col-sm-3">
                <a class="iphoto btn btn-social mx-1" href="https://github.com/Dardev12" target="_blank"><img class="iphoto" src="img\icons8-github-144.png" style="width:45%; height:45%;"></a>
              </div>

          </div>  
    </footer>
<!-- Copyright Section-->
    <div class="Bottom copyright py-4 text-center text-dark">
        <div class="container" style="color:white"><small>© 2021 Portefolio de Darren. Tous droits réservés. Ce site est sous la responsabilité de Darren Lambert</small></div>
    </div>
    <!-- Scroll reveal-->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="javascript/ScrollReveal.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="javascript/SendMail.js"></script>
    
</body>
</html>      