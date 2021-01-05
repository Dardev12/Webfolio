<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
        <img src="img\DarDEVpro.ico" alt="Logo" style="width:40px;">
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
        <strong><a class="nav-link text-danger" <?php parDefaut("accueil"); ?> href="index.php?action=accueil">Acceuil</a></strong>
        </li>
        <li class="nav-item">
        <strong><a class="nav-link text-danger" <?php parDefaut("portefolio"); ?> href="index.php?action=portefolio">Portefolio</a></strong>
        </li>
        <li class="nav-item">
        <strong><a class="nav-link text-danger" <?php parDefaut("Apropos"); ?> href="index.php?action=Apropos">Contact</a></strong>
        </li>

    </ul>
</nav>

<?php   
function parDefaut($choixMenu){
  if (!isset($_GET["action"])){
     echo "active"; 
  }
  else {
    if ( $_GET["action"] == $choixMenu ) {
      echo ' active ' ;
    }
    else {
        echo "" ;
    }
  }
}

?>