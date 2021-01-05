<?php
require('Controller/Controllers.php');

try{
    if(isset($_GET['action'])){
        switch($_GET['action']){
            case 'accueil';
                accueil();
                break;
            case 'portefolio';
                portefolio();
                break;
            case 'Apropos';
                apropos();
                break;
            default:
                    throw new Exception('Aucune page spécifique demandée');
        }
    }
    else{
        accueil();
    }
}
catch(PDOException $e){
    $msgError=$e->getMessage();
    require 'view/viewErreur.php';
    }
    catch(Exception $ex){
        $msgError=$ex->getMessage();
        require 'view/viewErreur.php';
    }

?>