<!doctype html>
<html lang="en">

<!-- Revolution includes -->
<?php include('include/revolution_head.php'); ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Bangers|Days+One&display=swap" rel="stylesheet">
<!-- Slick pour carousel partenaires -->
<link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css" />

<link rel="stylesheet" href="assets/css/style.css">

<title>Rentrée des étudiants - CMZ</title>
</head>

<body>

  <?php include('include/nav.php')?>

  <!-- <div class="animindex bg-azur-light height-big text-center">Animation Slider</div> -->
  <?php include('include/slider.php'); ?>


  <!-- Texte RDE / Evenements -->

  <div id="evenements" class="container-fluid">
    <div class="row">
      <div class="col-6 my-auto">
        <h2 class="text-center policetitres">Rentrée des étudiants</h2>
        <p class="policep">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga quaerat maxime vero minus!
          Sunt veritatis architecto, amet deserunt harum eum pariatur? Similique natus tempore quidem. Voluptate aperiam
          expedita repellendus quod? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium nemo quas,
          illo repellendus sunt voluptates nam mollitia. Libero magni deleniti a asperiores nihil quae voluptas sapiente
          quos consequatur inventore? Voluptatibus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit
          similique harum repudiandae atque, a quae voluptatum modi reiciendis nobis cumque, voluptas recusandae ratione
          natus, eum tempora vitae architecto? Deserunt, dolorem?</p>
      </div>
      <div class="col-6">
        <img class="rdeimg" src="img/imgetudiantspiscine.jpg">
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <img class="evenementimg" src="img/imgetudiantspiscine.jpg">
      </div>
      <div class="col-6 my-auto">
        <h2 class="text-center policetitres">Les évènements</h2>
        <p class="policep">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga quaerat maxime vero minus!
          Sunt veritatis architecto, amet deserunt harum eum pariatur? Similique natus tempore quidem. Voluptate aperiam
          expedita repellendus quod? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium nemo quas,
          illo repellendus sunt voluptates nam mollitia. Libero magni deleniti a asperiores nihil quae voluptas sapiente
          quos consequatur inventore? Voluptatibus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit
          similique harum repudiandae atque, a quae voluptatum modi reiciendis nobis cumque, voluptas recusandae ratione
          natus, eum tempora vitae architecto? Deserunt, dolorem?</p>
      </div>
    </div>
  </div>

  <!-- Image / Motif / Editions -->
  <div class="container-fluid">
    <div class="row motifimg">
      <img src="img/imgmotifetudiants.jpg" style="width: 100%;">
      <div class="col-8 motiftest">
        <div class="row">
          <div class="bg-yellow-light col-3 mx-auto">
            <h2 class="policetitres text-center">Edition 2020</h2>
          </div>
          <div class="bg-yellow-light col-3 mx-auto">
            <a href="https://rentree-etudiants-cmz.fr/" style="text-decoration: none;">
              <h2 class="policetitres text-center">Edition 2019</h2>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Carousel Testimonials -->
  <div id="carouseltestimonials" class="carousel slide" data-ride="carousel"
    style="background-image: url(img/motif.jpg);">
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
            <img src="img/logoetudiantcarolo.png" class="d-block w-100" alt="Logo étudiant carolo">
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

  <!-- Partenaires -->
  <div class="container-fluid">
    <div class="row height-mid flexpartenaires" style="background-image: url(img/motif.jpg);">
      <h2 class="policetitres">Nos partenaires</h2>
      <div class="row col-sm-12 col-md-10 col-lg-9 col-xl-8" style="padding-right: 0px; padding-left: 0px;">
        <div class="container">
          <div class="slicktest">
            <div class="col-2"><img src="img/logoetudiantcarolo.png" class="d-block w-100" alt="Logo étudiant carolo"></div>
            <div class="col-2"><img src="img/logoetudiantcarolo.png" class="d-block w-100" alt="Logo étudiant carolo"></div>
            <div class="col-2"><img src="img/logoetudiantcarolo.png" class="d-block w-100" alt="Logo étudiant carolo"></div>
            <div class="col-2"><img src="img/logoetudiantcarolo.png" class="d-block w-100" alt="Logo étudiant carolo"></div>
            <div class="col-2"><img src="img/logoetudiantcarolo.png" class="d-block w-100" alt="Logo étudiant carolo"></div>
            <div class="col-2"><img src="img/logoetudiantcarolo.png" class="d-block w-100" alt="Logo étudiant carolo"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Page d'acceuil content end -->

  <?php include('include/footer.php')?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
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
      responsive: [
    {
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