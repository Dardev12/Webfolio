<?php $titre='Contact'; ?>

<?php ob_start(); ?>

<div class="foo divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
</div>

<div class="foo w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contactez-moi</b></h4>
    <div class="foo w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i onclick="window.location.href = 'mailto:Dardevpro@outlook.com?subject=Approche';" class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>Dardevpro@outlook.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Saint-Georges-de-Beauce,QC</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>418-974-3218</p>
      </div>
    </div>
    <hr class="w3-opacity">

    <!--<img src="img\wip-dl.png" class="img-responsive rounded-circle  mx-auto d-block " style="width:55%;" alt="Image">
    <br>
    <h3 class="text-center">Work in Progress..</h3>-->
               
   
    <!--<form method="POST" action="Controller/MailVerif.php">
      <div class="w3-section">
        <label>Votre Adresse email</label>
        <input class="w3-input w3-border" type="email" name="email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <textarea name="message" id="messageArea" cols=125 rows=5></textarea>
      </div>
      <button type="submit" class="btn btn-warning foo" onclick="window.open('mailto:Dardevpro@outlook.com?subject=Approche&body=messageArea');" ><i class="fa fa-paper-plane w3-margin-right"></i>Envoyé Message</button>
    </form>-->
  </div>

  <div class="foo divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
      <div class="divider-custom-line"></div>
  </div>

  <?php $contenu = ob_get_clean(); ?>

<?php require 'templates.php'; ?>