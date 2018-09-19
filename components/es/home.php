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
    <div><img class="home__img" src="img/meltdown-logos/meltdown-white.png" alt=""/></div>
    <nav class="home__menu">
      <a class="home__menu__link" <?php echo 'href="store.php?language=' . $language . '"'; ?>>TIENDA</a>
      <a class="home__menu__link" <?php echo 'href="videos.php?language=' . $language . '"'; ?>>VIDEOS</a>
      <a class="home__menu__link" <?php echo 'href="music.php?language=' . $language . '"'; ?>>MUSICA</a>
      <a class="home__menu__link" <?php echo 'href="shows.php?language=' . $language . '"'; ?>>CONCIERTOS</a>
      <a class="home__menu__link" <?php echo 'href="about.php?language=' . $language . '"'; ?>>INFO</a>
      <a class="home__menu__link" <?php echo 'href="contact.php?language=' . $language . '"'; ?>">CONTACTO</a>  
    </nav>
    <div class="home__languages">
      <a class="home__languages__link" href="?language=es">ESP | </a>
      <a class="home__languages__link" href="?language=eng">ENG | </a>
      <a class="home__languages__link" href="?language=eus">EUS</a>
    </div>
    <div class="home__rrss">
      <a class="home__rrss__link" href="https://www.facebook.com/meltdowntaldea/" target="_blank"><?php require('imports/svg/facebook.svg') ?></a>
      <a class="home__rrss__link" href="https://www.instagram.com/meltdownband/" target="_blank"><?php require('imports/svg/instagram.svg') ?></a>
      <a class="home__rrss__link" href="https://open.spotify.com/artist/1wDfoSmnEVDw3D1hgzi4v7" target="_blank"><?php require('imports/svg/spotify.svg') ?></a>
      <a class="home__rrss__link" href="https://www.youtube.com/channel/UCDkyNOMrkprcsUsArS9foFw" target="_blank"><?php require('imports/svg/youtube.svg') ?></a>
    </div>
    <div><?php require('imports/svg/down-arrow.svg') ?></div>
  </div>
</section>