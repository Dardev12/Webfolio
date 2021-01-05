<?php $titre='PorteFolio'; ?>

<?php ob_start(); ?>

<div class="container-fluid bg-3 text-center">
    <h3>Mes créations:</h3><br>
        <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
        </div>

        <div class="row ">
            <div class="container-fluid col-sm-3 ">
            <p>Tinker</p>
            <img src="img\tinkerclub_logo.png" class="center-block img-responsive rounded-circle" style="width:100%" alt="Image">
            </div>        
        </div>
        </div><br>

        <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
        </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'templates.php'; ?>