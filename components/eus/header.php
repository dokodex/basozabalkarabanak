<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head profile="http://www.w3.org/2005/10/profile">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="en" />

    <title>BASOZABAL | KARABANEN ZAINTZA ETA PARKINA - PARKING DE CARABANAS</title>
    
    <meta name="description" content="My projects to date" />
    <meta name="author" content="Dokodex" />
    
    <meta name="keywords" content="Dokodex" />
    <meta name="copyrite" content="Copyrite Dokodex 2018" />
    
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="shortcut icon" href="img/gear.png" />

  </head>

  <body>
    <div class="header">
      <div class="header__grid">
        <div class="header__title"><a class="header__title__link" <?php echo 'href="index.php?language=' . $language . '"'; ?>><img class="header__img" src="img/meltdown-logos/meltdown-white.png" alt=""></a></div>
        <nav class="header__menu" id="header__mymenu">
          <a class="header__menu__responsive" href="javascript:void(0);" onclick="menuResponsive()"><?php require('imports/svg/menu.svg'); ?></a>
          <a class="header__menu__link header__menu__link--languages active" href="?language=es">ESP</a>
          <a class="header__menu__link header__menu__link--languages active" href="?language=eus">EUS</a>
          <a class="header__menu__link active" <?php echo 'href="store.php?language=' . $language . '"'; ?>>ZERBITZUA</a>
          <a class="header__menu__link active" <?php echo 'href="videos.php?language=' . $language . '"'; ?>>KONTAKTUA</a>
        </nav>
      </div>
    </div>  


    <script>
      function menuResponsive() {
          var x = document.getElementById("header__mymenu");
          if (x.className === "header__menu") {
              x.className += " responsive";
          } else {
              x.className = "header__menu";
          }
      }
    </script>