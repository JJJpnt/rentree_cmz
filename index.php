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

<link rel="stylesheet" href="assets/css/style.css">

<title>Rentrée des étudiants - CMZ</title>
</head>

<body>

  <script>
    var navCloud = true;
  </script>
  <?php include('include/nav.php')?>

  <!-- <div class="animindex bg-azur-light height-big text-center">Animation Slider</div> -->
  <?php include('include/slider.php'); ?>


  <!-- Texte RDE / Evenements -->

  <div id="evenements" class="container-fluid">
    <div class="row w-100">
      <div class="col-xl-6 my-auto col-mb-10  order-1 p-0 m-0">
        <h2 class="text-center policetitres">Quésaco ?</h2>
        <div class="w-75 mx-auto">
          <p class="policep">A l'initiative de la Ville de Charleville-Mézières et en partenariat avec les associations étudiantes, cette manifestation vise à souhaiter la bienvenue à tous les étudiants du territoire. <br>

Jusque-là organisée sur une journée unique, l’édition 2020 aura lieu durant 4 jours intégrant notamment des manifestations qui auraient dû se tenir durant le Printemps des étudiants !

Ainsi, nous vous proposons cette année un format XXL de la Rentrée des étudiants avec les incontournables Carolo Express et Carolo Warrior mais également le Tournoi de basket inter-établissements, un Escape Game, le Bal de rentrée, la fameuse et attendue GACOLOR et bien d’autres manifestations !

La Rentrée des étudiants est une manifestation ouverte à tous les étudiants du territoire mais également à ceux qui veulent fêter les étudiants en participant notamment à la Gacolor, événement coloré et grand public.

La Rentrée des étudiants est une occasion festive, ludique, sportive et culturelle de découvrir la ville, de rencontrer d'autres étudiants issus des différents établissements du territoire et d’affirmer notre ambition étudiante.</p>
        </div>
      </div>
      <div class="col-xl-6 col-mb-10  order-2 p-0 m-0">
        <img class="rdeimg" src="img/event_2019/1.jfif">
      </div>
    </div>
  

  
    <div class="row w-100">
      <div class="col-xl-6 col-mb-10 order-xl-3 order-4 p-0 m-0">
        <img class="evenementimg" src="img/event_2019/1.jfif">
      </div>
      <div class="col-xl-6 col-mb-10 order-xl-4 order-3 my-auto p-0 m-0">
        <h2 class="text-center policetitres">Qui ? Quand ? Où ?</h2>
        <div class="w-75 mx-auto">
          <p class="policep">La Rentrée des étudiants est proposée à tous les étudiants du territoire de Charleville-Mézières jusqu’à Sedan. 
Tous les étudiants qui entament ou poursuivent une formation post bac sur le territoire peuvent participer à cette manifestation. Par ailleurs, quelques manifestations sont ouvertes au grand public. Ce faisant, n’hésitez pas à vous renseigner.

La Rentrée des étudiants 2020 aura lieu du jeudi 24 septembre avec pour commencer le « Carolo Express » jusqu’ au dimanche 27 septembre avec la fameuse GACOLOR.. 

Toutes les manifestations de l’édition 2020 se dérouleront à Charleville-Mézières dans l’hyper-centre, à la Plaine du Mont Olympe, au Campus Sup Ardenne et dans toute la ville.

Durant 4 jours, la Ville de Charleville-Mézières sera 100% festive, 100% étudiante !</p>
        </div>
      </div>
    </div>
  </div>


  <?php include ('include/video.php'); ?>


  <!-- Image / Motif / Editions -->
  <div class="container-fluid">
    <div class="row motifimg">
      <img src="img/imgmotifetudiants.jpg" style="width: 100%;">
      <div class="col-8 motiftest">
        <div class="row">
          <div class="col-md-3 col-5 mx-auto ">
          <button class="btn dropbtn" style="color: black;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <h2 class="policetitres text-center">PROGRAMME</h2>
            </button>
            <!-- Collapse -->
            <div class="collapse" id="collapseExample">
              <div class="card card-body dropitem">
                <h4 class="policetitres">En attente de communication</h4>
              </div>
            </div>
            <!-- /Collapse -->
          </div>
          <div class="col-md-3 col-5 mx-auto">
            <button class="btn dropbtn" style="color: black;" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
              <h2 class="policetitres text-center ">INSCRIPTIONS</h2>
            </button>
            <!-- Collapse 2 -->
            <div class="collapse" id="collapseExample2">
              <div class="card card-body dropitem">
                <a class="mb-2" style="text-decoration: none; color: black;" href="event_register_caroloexpress.php"><h4 class="policetitres">Carolo Express</h4></a>
                <a class="mb-2" style="text-decoration: none; color: black;" href="event_register_carolowarrior.php"><h4 class="policetitres">Carolo Warrior</h4></a>
                <a class="mb-2" style="text-decoration: none; color: black;" href="event_register_concourscuisine.php"><h4 class="policetitres">Concours de Cuisine</h4></a>
                <a class="mb-2" style="text-decoration: none; color: black;" href="event_register_piquenique.php"><h4 class="policetitres">Pique-Nique</h4></a>
                <a class="mb-2" style="text-decoration: none; color: black;" href="event_register_basket.php"><h4 class="policetitres">Tournoi de Basket</h4></a>
                <a class="mb-2" style="text-decoration: none; color: black;" href="event_register_gacolor.php"><h4 class="policetitres">Gacolor</h4></a>
                <a class="mb-2" style="text-decoration: none; color: black;" href="event_register_escapegame.php"><h4 class="policetitres">Escape Game</h4></a>
                <a class="mb-2" style="text-decoration: none; color: black;" href="event_register_balrentree.php"><h4 class="policetitres">Bal de Rentrée</h4></a>
              </div>
            </div>
            <!-- /Collapse 2 -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Carousel Testimonials -->
  <div id="carouseltestimonials" class="carousel slide" data-ride="carousel"
    style="background-image: url(img/motif2.gif);">
    <div class="carousel-inner">
      <div class="carousel-item active mt-4 mb-4">
        <!-- Ici chaque item -->
        <div class="row d-flex">
          <div class="col-2"></div>
          <div class="col-2">
            <img src="img/logoetudiantcarolo.png" class="d-block w-100" alt="Logo étudiant carolo">
          </div>
          <div class="col-1"></div>
          <div class="col-5 align-self-center">
            <p class="policep">Guillaume, 21 ans (EGC) :<br><br>J’ai apprécié cette journée et toutes les villes
              devraient
              organiser ce genre de manifestation pour les étudiants. Moi j’ai participé au Carolo Express, c’était
              fun !</p>
          </div>
        </div>
      </div>
      <div class="carousel-item mt-4 mb-4">
        <!-- Ici chaque item -->
        <div class="row d-flex">
          <div class="col-2"></div>
          <div class="col-2">
            <img src="img/logoetudiantcarolo.png" class="carou-img d-block w-100" alt="Logo étudiant carolo">
          </div>
          <div class="col-1"></div>
          <div class="col-5 align-self-center">
            <p class="policep">Guillaume, 21 ans (EGC) :<br>J’ai apprécié cette journée et toutes les villes devraient
              organiser ce genre de manifestation pour les étudiants. Moi j’ai participé au Carolo Express, c’était
              fun !</p>
          </div>
        </div>
      </div>
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

  <?php include ('include/parallax.php'); ?>

  <div class="container-fluid mt-2 mb-5 pr-5 pl-5">
    <h2 class="text-center policetitres mt-3 mb-3">EDITION 2019</h2>
    <div class="row">
      <div class="col-3">
        <a class="edition2019index" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/1.jfif"></a>
        <p class="policep text-center">Carolo Warrior</p>
      </div>
      <div class="col-3">
        <a class="edition2019index" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/1.jfif"></a>
        <p class="policep text-center">Carolo Express</p>
      </div>
      <div class="col-3">
        <a class="edition2019index" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/1.jfif"></a>
        <p class="policep text-center">Concours de Cuisine</p>
      </div>
      <div class="col-3">
        <a class="edition2019index" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/1.jfif"></a>
        <p class="policep text-center">Pique-Nique</p>
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <a class="edition2019index" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/1.jfif"></a>
        <p class="policep text-center">Tournoi de Basket</p>
      </div>
      <div class="col-3">
        <a class="edition2019index" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/1.jfif"></a>
        <p class="policep text-center">Gacolor</p>
      </div>
      <div class="col-3">
        <a class="edition2019index" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/1.jfif"></a>
        <p class="policep text-center">Escape Game</p>
      </div>
      <div class="col-3">
        <a class="edition2019index" href="event.php#galerie"><img class="img-fluid" src="img/event_2019/1.jfif"></a>
        <p class="policep text-center">Bam de Rentrée</p>
      </div>
    </div>
  </div>

  <!-- Partenaires -->
  <div class="container-fluid">
    <div class="row flexpartenaires" style="background-image: url(img/motif2.gif);">
      <h2 class="policetitres mt-3 mb-3">Nos partenaires</h2>
      <div class="row col-sm-12 col-md-10 col-lg-9 col-xl-8" style="padding-right: 0px; padding-left: 0px;">
        <div class="container">
          <div class="slicktest mb-5">
            <div class="col-2"><img src="img/ardennemetropole.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/campussupardennes.jpg" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/crous.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/cv.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/decathlon.jpg" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/flap.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/grandest.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/intercampus.jpg" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/jeanteur.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/leroymerlin.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/mcdo.jpg" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/orange.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/prefecture.jpg" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/tacos.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/terraltitude.jpg" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/vitrines.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
            <div class="col-2"><img src="img/yvesrocher.png" class="d-block w-100" alt="Logo étudiant carolo">
            </div>
          </div>
        </div>
      </div>
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
      slidesToShow: 5,
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

</body>

</html>