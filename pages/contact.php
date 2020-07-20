<?php
 $currentMail = "sklenarice193@gmail.com";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">

        <form class="needs-validation" method="POST" novalidate>
          <div class="form-row">
            <div class="col-md-10 mb-2">
              <label for="fullnameValid">Jméno a přijmení</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user-tag"></i></span>
                </div>
                <input type="text" class="form-control" id="fullnameValid" name='tb_name' value="<?php echo isset($_POST['tb_name']) ? $_POST['tb_name'] : '' ?>" required>
                <div class="invalid-feedback">
                  Zadejte jméno a přijmení
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-10 mb-2">
              <label for="emailValid">Kontaktní email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="text" class="form-control" id="emailValid" aria-describedby="inputGroupPrepend" name='tb_mail' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo isset($_POST['tb_mail']) ? $_POST['tb_mail'] : '' ?>" required>
                <div class="invalid-feedback">
                  Zadejte kontaktní email ve správném tvaru
                </div>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-10 mb-2">
              <label for="validMessage">Zpráva</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope-open-text"></i></span>
                </div>
                <textarea rows='8' cols='50' class='form-control' id="validMessage" name='tb_msg' required><?php echo isset($_POST['tb_msg']) ? $_POST['tb_msg'] : '' ?></textarea>
                <div class="invalid-feedback">
                  Zapište zprávu
                </div>
              </div>
            </div>
          </div>
          <div class="g-recaptcha" data-sitekey="6Ldr0K4ZAAAAAIyXxPeShFlTeU-ODB1XPkxL98q1"></div>
          <button class='btn btn-lg btn-block' type='submit' name='btn_sendmsg'>Odeslat email</button>
        </form>

        <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>
          <?php
            $secretKey = "6Ldr0K4ZAAAAAMwX6rdgpzmFiVWSEydtRtjfNVGl";
            $responseKey = $_POST["g-recaptcha-response"];
            $UserIP = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$responseKey."&remoteip=".$UserIP;

            $response = file_get_contents($url);
            $response = json_decode($response);

            if(isset($_POST['btn_sendmsg'])){
              if($response->success){
                if(mail($currentMail, "Penzion - : ".$_POST['tb_mail']. "(".$_POST['tb_name'].")", $_POST['tb_msg'], "From ".$_POST["tb_mail"])){
                  unset($_POST['tb_name'], $_POST['tb_year'], $_POST['tb_mail'], $_POST['tb_msg']); 
                  header("Location: ?page=contact");
                }
              }else{
                alert("Potvrďte, že nejste robot!");
              }
            }
          ?>
        </div>
        <div class="col-lg-6">
          <ul class="list-group">
            <li class='list-group-item'>
              <i class="fas fa-phone" style='margin-right: 0.7vw;'></i>
              <a href="tel:605729665" style='color:black;'>
                +420 605 729 665
              </a>
            </li>
            <li class='list-group-item'>
              <a href='mailto:'.$currentMail style='color:black;'>
                <i class="fas fa-at" style='margin-right: 0.7vw;'></i>
                <?php echo $currentMail; ?>
              </a>
            </li>
            <li class='list-group-item'>
              <i class="fas fa-map-marked-alt" style='margin-right: 0.7vw;'></i>
              Sklenařice 193 512 43 Vysoké nad Jizerou
            </li>
          </ul>
          <iframe class='map' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2526.8292024867424!2d15.386985615918293!3d50.704553976903526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470ec88070b9d4d9%3A0xd405b519917b0172!2sSklena%C5%99ice%20193%2C%20512%2043%20Vysok%C3%A9%20nad%20Jizerou%2C%20Czechia!5e0!3m2!1sen!2sus!4v1587587808533!5m2!1sen!2sus" allowfullscreen></iframe>
        </div>
    </div>
</div>


