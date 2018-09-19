<?php include 'php/mailing.php'; ?>
<section class="section kontaktua">
  <form action="" method="post" class="kontaktua__form"> 
    <label>Izena eta Abizena: <span>*</span><br>
      <input type="text" name="name" placeholder="Izena eta Abizena" class="kontaktua__input" required>
    </label><br><br>    
    <label>Email-a: <span>*</span><br>
      <input type="email" name="email" placeholder="Email-a" class="kontaktua__input" required>
    </label><br><br>
    <label>Tlf-a: <span>*</span><br>
      <input type="" name="tlf" placeholder="Telefonoa" class="kontaktua__input" required>
    </label><br><br>
    <label>Kontsulta:<br>
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
        <div>arrizadur@gmail.com</div>
      </div>
    </div>
    <div class="kontaktua__info__item kontaktua__tlf">
      <div class="kontaktua__grid">
        <div><?php require('imports/svg/phone.svg'); ?></div>
        <div>+34 691 401 980 Koldo <br> +34 667 306 931 Itziar</div>
      </div>
    </div>
    <iframe class="kontaktua__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.619884924171!2d-1.969814791547204!3d43.28033861344156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51afc9b80f760f%3A0x54d9282e7ee37d5!2sDe+Basozabal+Bidea%2C+50%2C+20014+Donostia%2C+Gipuzkoa!5e0!3m2!1seu!2ses!4v1537285088734" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>