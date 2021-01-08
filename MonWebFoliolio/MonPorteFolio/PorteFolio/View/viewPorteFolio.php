<?php $titre='PorteFolio'; ?>

<?php ob_start(); ?>

<div class="container-fluid bg-3 text-center">
    <h3 class="foo">Mes créations:</h3><br>
        <div class="foo divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
        </div>

        <div class="row w3-white rounded pt-5 pb-5 pl-5 pr-5">
            <div class="foo container-fluid col-sm-3 ">
            <p>Tinker</p>
            <img src="img\tinkerclub_logo.png" class="center-block img-responsive rounded-circle" style="width:100%" alt="Image">
            </div>        
        </div>
        <br>

        <div class="foo divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
        </div>

        <div class="row w3-white rounded pt-5 pb-5 pl-5 pr-5">
            <div class="foo container-fluid col-sm-3 ">
            <p>Systeme d'Inventaire Joujouthèque</p>
            <img src="img\tinkerclub_logo.png" class="center-block img-responsive rounded-circle" style="width:100%" alt="Joujouthèque">
            </div>        
        </div>
        <br>

        <div class="foo divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
        </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'templates.php'; ?>