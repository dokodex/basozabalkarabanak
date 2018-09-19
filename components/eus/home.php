<section class="section home">
  <style type="text/css">
    @media only screen and (min-width:1024px) {
      .header{
        display: none;
      }

      .home{
        display: inherit;
      }
    }
  </style>
  <div class="home__grid">
    <div><img class="home__img" src="img/basozabal-logos/basozabalkarabanak-black.png" alt=""/></div>
    <nav class="home__menu">
      <a class="home__menu__link" <?php echo 'href="store.php?language=' . $language . '"'; ?>>ZERBITZUAK</a>
      <a class="home__menu__link" <?php echo 'href="videos.php?language=' . $language . '"'; ?>>KONTAKTUA</a>
    </nav>
    <div class="home__languages">
      <a class="home__languages__link" href="?language=es">ESP | </a>
      <a class="home__languages__link" href="?language=eus">EUS</a>
    </div>
    <div class="home__rrss">
      <a class="home__rrss__link" href="https://www.facebook.com/meltdowntaldea/" target="_blank"><?php require('imports/svg/mail.svg') ?></a>
    </div>
    <div><?php require('imports/svg/down-arrow.svg') ?></div>
  </div>
</section>