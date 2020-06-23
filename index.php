<?php include('include/connexiondbval.php'); ?>
<!doctype html>
<html lang="fr">

<!-- Revolution includes -->
<?php include('include/revolution_head.php'); ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">

<!-- Fonts CSS -->
<link href="https://fonts.googleapis.com/css?family=Bangers|Days+One&display=swap" rel="stylesheet">
<!-- Slick pour carousel partenaires -->
<link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css" />

<!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

<link rel="stylesheet" href="assets/css/style.css">

<script src="assets/js/jquery.countdown.min.js"></script>

<title>Rentrée des étudiants - CMZ</title>
</head>

<body>
<!-- Preloader -->
<div class="spinner-wrapper">
  <div class="sk-chase">
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
    <div class="sk-chase-dot"></div>
  </div>
</div>

  <script>
    var navCloud = true;
  </script>
  <?php include('include/nav.php') ?>

  <!-- <div class="animindex bg-azur-light height-big text-center">Animation Slider</div> -->
  <?php include('include/slider2.php'); ?>


  <!-- Texte RDE / Evenements -->

  <div id="evenements" class="container-fluid my-5">
    <div class="row w-100 mb-5 mb-xl-0">
      <div class="col-xl-6 my-auto col-mb-10 order-1 p-0 m-0">
        <h2 class="text-center policetitres">Quésaco ?</h2>
        <div class="w-75 mx-auto">
          <p class="policep indentp">A l'initiative de la Ville de Charleville-Mézières et en partenariat avec les associations étudiantes, cette manifestation vise à souhaiter la bienvenue à tous les étudiants du territoire. </p>

          <p class="policep indentp">Jusque-là organisée sur une journée unique, l’édition 2020 aura lieu durant 4 jours intégrant notamment des manifestations qui auraient dû se tenir durant le Printemps des étudiants !</p>

          <p class="policep indentp">Ainsi, nous vous proposons cette année un format XXL de la Rentrée des étudiants avec les incontournables Carolo Express et Carolo Warrior mais également le Tournoi de basket inter-établissements, un Escape Game, le Bal de rentrée, la fameuse et attendue GACOLOR et bien d’autres <span style="white-space: nowrap">manifestations !</span></p>

          <p class="policep indentp">La Rentrée des étudiants est une manifestation ouverte à tous les étudiants du territoire mais également à ceux qui veulent fêter les étudiants en participant notamment à la Gacolor, événement coloré et grand public.</p>

          <p class="policep indentp mb-5 mb-xl-0">La Rentrée des étudiants est une occasion festive, ludique, sportive et culturelle de découvrir la ville, de rencontrer d'autres étudiants issus des différents établissements du territoire et d’affirmer notre ambition étudiante.</p>
        </div>
      </div>
      <div class="col-xl-6 col-mb-10 order-2 p-0 m-auto">
        <img class="evenementimg evenementimg-2 img-fluid d-block" src="img/event_2019/1.jpg">
      </div>
    </div>
  

  
    <div class="row w-100 mb-5  mt-5 mt-xl-0">
      <div class="col-xl-6 col-mb-10 order-xl-3 order-4 p-0 m-auto">
        <img class="evenementimg evenementimg-1 img-fluid d-block" src="img/event_2019/1.jpg">
      </div>
      <div class="col-xl-6 col-mb-10 order-xl-4 order-3 my-auto p-0 m-0">
        <h2 class="text-center policetitres">Qui ? Quand ? Où ?</h2>
        <div class="w-75 mx-auto">
          <p class="policep indentp">La Rentrée des étudiants est proposée à tous les étudiants du territoire de Charleville-Mézières jusqu’à Sedan. </p>
          <p class="policep indentp">Tous les étudiants qui entament ou poursuivent une formation post bac sur le territoire peuvent participer à cette manifestation. Par ailleurs, quelques manifestations sont ouvertes au grand public. Ce faisant, n’hésitez pas à vous renseigner.</p>

          <p class="policep indentp">La Rentrée des étudiants 2020 aura lieu du jeudi 24 septembre avec pour commencer le « Carolo Express » jusqu’au dimanche 27 septembre avec la fameuse GACOLOR. </p>

          <p class="policep indentp">Toutes les manifestations de l’édition 2020 se dérouleront à Charleville-Mézières dans l’hyper-centre, à la Plaine du Mont Olympe, au Campus Sup Ardenne et dans toute la ville.</p>

          <p class="policep indentp  mb-5 mb-xl-0">Durant 4 jours, la Ville de Charleville-Mézières sera 100% festive, 100% étudiante !</p>
        </div>
      </div>
    </div>
  </div>

  <div id="videoaccueil"></div>
  <?php include ('include/video.php'); ?>
  
  
  <!-- Image / Motif / Editions -->
  
  <div class="container-fluid">
    <div class="row motifimg">
      <div data-bs-parallax-bg="true" class="backgroundimages" style="background-image: url(img/gacolor.jpeg);"></div>
      <!-- Carousel Testimonials -->
      <div id="carouseltestimonials" class="carousel slide" data-ride="carousel"  data-interval="3500"
        style="background-color: transparent !important; font-size:1.8em;">
        <div class="carousel-inner">
      
          <?php $req = $bdd->prepare("SELECT * FROM RDETestimonials");
          $req->execute();
      
          while( $testimonial = $req->fetch() ) { ?>
      
                <div class="carousel-item mt-4 mb-4">
                  <!-- Ici chaque item -->
                  <div class="row d-flex">
                    <div class="col-2"></div>
                    <div class="col-2 carou_img">
                      <img src="img/logoetudiantcarolo_bleu.png" class="d-block w-100" alt="<?= $testimonial['alt'] ?>">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-md-12 col-lg-5 align-self-center m-2">
                      <center><p class="testiresponsif"><strong><?= $testimonial['first_name'] ?>, <?= $testimonial['age'] ?> ans (<?= $testimonial['establishment'] ?></strong>) :</p><p class="testiresponsifmini"><?= $testimonial['text'] ?></p></center>
                    </div>
                  </div>
                </div>
      
          <?php } $req->closeCursor(); ?>

          <a class="carousel-control-prev" href="#carouseltestimonials" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Précédent</span>
          </a>
          <a class="carousel-control-next" href="#carouseltestimonials" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
          </a>
        </div>
      </div>

    </div>
  </div>


  <?php include ('include/parallax.php'); ?>

  <div class="container-fluid mt-2 mb-5 pr-5 pl-5 persp">
    <h2 class="text-center policetitres mt-3 mb-3">EDITION 2019</h2>
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3 p-2"><div class="polaroid mx-auto">
        <a class="" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/1.jpg"></a>
        <p class="policep text-center">Carolo Warrior</p>
      </div></div>
      <div class="col-12 col-sm-6 col-lg-3 p-2"><div class="polaroid mx-auto">
        <a class="" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/2.jpg"></a>
        <p class="policep text-center">Carolo Express</p>
      </div></div>
      <div class="col-12 col-sm-6 col-lg-3 p-2"><div class="polaroid mx-auto">
        <a class="" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/3.jpg"></a>
        <p class="policep text-center">Concours de Cuisine</p>
      </div></div>
      <div class="col-12 col-sm-6 col-lg-3 p-2"><div class="polaroid mx-auto">
        <a class="" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/4.jpg"></a>
        <p class="policep text-center">Pique-Nique</p>
      </div></div>
    </div>
  </div>

  <!-- Page d'acceuil content end -->

  <?php include('include/footer.php')?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <!-- Scripts required carousel slick -->
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>
  <!-- Script carousel slick -->
  <script type="text/javascript">
    $('.slicktest').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]

    });
  </script>

<script>
  $(document).ready(function() {
  //Preloader
  preloaderFadeOutTime = 500;
  function hidePreloader() {
  var preloader = $('.spinner-wrapper');
  preloader.fadeOut(preloaderFadeOutTime);
  }
  hidePreloader();
  });
</script>

<!-- Script qui prend l'itération du carousel testimonials, et ajoute la classe active sur chaque -->
<script>
  $(document).ready(function () {
    $('#carouseltestimonials').find('.carousel-item').first().addClass('active');
  });
</script>

</body>

</html>