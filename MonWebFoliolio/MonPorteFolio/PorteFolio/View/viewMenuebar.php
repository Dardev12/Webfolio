<nav class="navbar navbar-expand-sm w3-blue-gray">
    <a class="iphoto navbar-brand" <?php parDefaut("accueil"); ?> href="index.php?action=accueil">
        <img src="img\DarDEVpro.ico" alt="Logo" style="width:80px;">
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
        <strong><a class="nav-link text-light"  <?php parDefaut("accueil"); ?> href="index.php?action=accueil">Acceuil</a></strong>
        </li>
        <li class="nav-item">
        <strong><a class="nav-link text-light" <?php parDefaut("portefolio"); ?> href="index.php?action=portefolio">Portefolio</a></strong>
        </li>
        <li class="nav-item">
        <strong><a class="nav-link text-light" <?php parDefaut("Apropos"); ?> href="index.php?action=Apropos">Contact</a></strong>
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