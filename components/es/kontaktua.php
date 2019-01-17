<?php include 'php/phpmailer/index.php'; ?>
<section class="section kontaktua">
  <h1 class="kontaktua__title title">CONTACTO</h1>
  <form action="" method="post" class="kontaktua__form"> 
    <label>Nombre y Apellidos: <span>*</span><br>
      <input type="text" name="name" placeholder="Nombre y Apellidos" class="kontaktua__input" required>
    </label><br><br>    
    <label>Email: <span>*</span><br>
      <input type="email" name="email" placeholder="Email" class="kontaktua__input" required>
    </label><br><br>
    <label>Tlf: <span>*</span><br>
      <input type="" name="tlf" placeholder="Telefono" class="kontaktua__input" required>
    </label><br><br>
    <label>Consulta:<br>
      <textarea name="consult" class="kontaktua__textarea"></textarea>
    </label><br><br>
    <input type="submit" value="Bidali" class="kontaktua__btn">
  </form>

  <div class="kontaktua__info">
    <div class="kontaktua__info__item kontaktua__ordutegia">
      <div class="kontaktua__grid">
        <div><?php require('imports/svg/clock.svg'); ?></div>
        <div>07:00 - 22:00</div>
      </div>
    </div>
    <div class="kontaktua__info__item kontaktua__mail">
      <div class="kontaktua__grid">
        <div><?php require('imports/svg/mail.svg'); ?></div>
        <div>info@basozabalkarabanak.com</div>
      </div>
    </div>
    <div class="kontaktua__info__item kontaktua__tlf">
      <div class="kontaktua__grid">
        <div><?php require('imports/svg/phone.svg'); ?></div>
        <div>+34 691 401 980 Koldo <br> +34 667 306 931 Itziar</div>
      </div>
    </div>
    <iframe class="kontaktua__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.8221277057073!2d-1.999330043237692!3d43.23418883450687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDE0JzA0LjciTiAxwrA1OSc1My43Ilc!5e0!3m2!1ses!2ses!4v1538468366245" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>