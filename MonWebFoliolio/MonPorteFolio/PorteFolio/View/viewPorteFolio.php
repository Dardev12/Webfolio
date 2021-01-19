<?php $titre='PorteFolio'; ?>

<?php ob_start(); ?>

<div class="container-fluid bg-3 text-center">
    <h3 class="foo">Mes créations:</h3><br>
        <div class="foo divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
        </div>

        <div class="foo row w3-white rounded pt-5 pb-5 pl-5 pr-5">
            <div class="foo container-fluid col-sm-3 ">
            <h2>Tinker Club</h2>
            <img id="tinker"src="img\tinkerclub_logo.png" class="B center-block img-responsive rounded-circle" style="width:100%" alt="Image">
            </div>

            <div id="madiva"class="w3-indigo rounded col-sm-9 pt-5 pb-5 pl-5 pr-5" >
                <p>Date</p>
                <p>Description</p>
                <p>Lien Github</p>
                <p>Lien PlayStore</p>
                <p>Language utilisé</p>
            </div>

            <script>
            document.querySelector("#tinker").onclick = function() {
                if (window.getComputedStyle(document.querySelector('#madiva')).display=='none'){
                document.querySelector("#madiva").style.display="block";
                } else {
                document.querySelector("#madiva").style.display="none";
                }
            }
            </script>        
        </div>
        <br>

        <div class="foo divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
        </div>

        <div class="foo row w3-indigo rounded pt-5 pb-5 pl-5 pr-5">
            <div class="foo container-fluid col-sm-3 ">
            <h2>Systeme d'Inventaire Joujouthèque</h2>
            <img id="Joujou"src="img\tinkerclub_logo.png" class="center-block img-responsive rounded-circle" style="width:100%" alt="Joujouthèque">
            </div>

            <div id="cJoujou"class="w3-white rounded col-sm-9 pt-5 pb-5 pl-5 pr-5" >
                <p>Date</p>
                <p>Description</p>
                <p>Lien Github</p>
                <p>Lien PlayStore</p>
                <p>Language utilisé</p>
            </div>

            <script>
            document.querySelector("#Joujou").onclick = function() {
                if (window.getComputedStyle(document.querySelector('#cJoujou')).display=='none'){
                document.querySelector("#cJoujou").style.display="block";
                } else {
                document.querySelector("#cJoujou").style.display="none";
                }
            }
            </script>          
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