<?php require_once('include/connexiondbval.php'); ?>
<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- PrettyPhoto css -->
  <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css">

  <link rel="stylesheet" href="assets/css/style.css">

  <title>Programme</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>

<body>

  <!-- navbar -->

  <?php include("include/nav.php"); ?>

  <!-- img event -->

  <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Le Programme de la Rentrée</strong></h2></div>
  </div>

  <!--carte-->

  <div class="row my-4 justify-content-center align-items-center w-100 mx-auto persp">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/1.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Express</p>
        <hr class="style-five">
        <p class="card-text policecards text-center">Le Carolo Express permet aux étudiants de découvrir la ville autrement.</p>
        <div class="dropdown">
        <center><a href="events_express.php" class="btn btn-secondary mb-2">Voir plus</a></center>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/6.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Warrior</p>
        <hr class="style-five">
        <p class="card-text policecards text-center">Carolo Warrior est un relai sportif composé de nombreuses activités sportives et/ou ludiques.</p>
        <center><a href="events_warrior.php" class="btn btn-secondary mb-2">Voir plus</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/3.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Concours De Cuisine</p>
        <hr class="style-five">
        <p class="card-text policecards text-center">Concours de cuisine sur la Place Ducale en partenariat avec l’association INTERCampus.</p>
        <center><a href="events_cuisine.php" class="btn btn-secondary mb-2">Voir plus</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/12.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Pique-Nique</p>
        <hr class="style-five">
        <p class="card-text policecards text-center">Vous avez la possibilité de venir avec votre déjeuner, des chaises et des tables seront à disposition.</p>
        <center><a href="events_pique-nique.php" class="btn btn-secondary mb-2">Voir plus</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/14.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Tournoi de Basket</p>
        <hr class="style-five">
        <p class="card-text policecards text-center">Tournoi de basket, 5 à 7 participants.</p>
        <center><a href="events_basket.php" class="btn btn-secondary mb-2">Voir plus</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/gacolor.jpeg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Gacolor</p>
        <hr class="style-five">
        <p class="card-text policecards text-center">Vous souhaitez passer un moment convivial, festif et haut en couleurs ?</p>
        <center><a href="events_gacolor.php" class="btn btn-secondary mb-2">Voir plus</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/2.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Bal de Rentrée</p>
        <hr class="style-five">
        <p class="card-text policecards text-center">Le Bal de Rentrée est ouvert à tous les étudiants.</p>
        <center><a href="events_bal.php" class="btn btn-secondary mb-2">Voir plus</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/9.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Escape Game</p>
        <hr class="style-five">
        <p class="card-text policecards text-center">Venez tester votre logique à notre nouvel Escape Game</p>
        <center><a href="events_escape.php" class="btn btn-secondary mb-2">Voir plus</a></center>
      </div>
    </div>
  </div>

<!-- parallax -->

  <?php include("include/parallax.php"); ?>

  <div class="mb-5"></div>

  <div class="container-fluid">
    <h2 class="policetitres text-center">2019</h2>
  </div>

<!-- Tabs pour galerie photos -->
  <div class="container-fluid">
    <div class="row justify-content-center">
      <ul class="nav nav-tabs" id="galerie" role="tablist">
        <li class="nav-item tabeventmr">
          <a class="nav-link active tabeventpadding" id="tabcaroloexpress" data-toggle="tab" href="#caroloexpresscontent" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt">Carolo Express</p></a>
        </li>
        <li class="nav-item tabeventmr">
          <a class="nav-link tabeventpadding" id="tabcarolowarrior" data-toggle="tab" href="#carolowarriorcontent" role="tab" aria-controls="profile" aria-selected="false"><p class="tabgalerietxt">Carolo Warrior</p></a>
        </li>
        <li class="nav-item tabeventmr">
          <a class="nav-link tabeventpadding" id="tabcuisine" data-toggle="tab" href="#concourscuisinecontent" role="tab" aria-controls="contact" aria-selected="false"><p class="tabgalerietxt">Concours de Cuisine</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link tabeventpadding" id="tabpiquenique" data-toggle="tab" href="#piqueniquecontent" role="tab" aria-controls="contact" aria-selected="false"><p class="tabgalerietxt">Pique-Nique</p></a>
        </li>
      </ul>
    </div>
    <div class="mb-5"></div>
    <div class="row justify-content-center">
      <div class="tab-content" id="myTabContent">
        <!-- Tab carolo express -->
        <div class="tab-pane fade show active" id="caroloexpresscontent" role="tabpanel" aria-labelledby="caroloexpress-tab">
          <div class="container-fluid pl-5 pr-5">
            <div class="row mb-5">
            <?php 
            
            $req = $bdd->prepare("SELECT * FROM RDEGallery WHERE category = 'Carolo Express' ");
            $req->execute();

            while( $img = $req->fetch() ) {
            
            ?>
              <div class="col-lg-3 col-md-6 col-sm-6 photogallerytabs mx-auto my-auto mb-3 hovergallery"><a href="img/<?= $img['image_link'] ?>" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/<?= $img['image_link'] ?>" class="img-fluid mt-1" alt="<?= $img['alt'] ?>"></a></div>
              <?php } ?>
            </div>
          </div>
        </div>
        <!-- /Tab carolo express -->

        <!-- Tab carolo warrior -->
        <div class="tab-pane fade" id="carolowarriorcontent" role="tabpanel" aria-labelledby="carolowarrior-tab">
          <div class="container-fluid pl-5 pr-5">
            <div class="row mb-5">
            <?php 
            
            $req = $bdd->prepare("SELECT * FROM RDEGallery WHERE category = 'Carolo Warrior' ");
            $req->execute();

            while( $img = $req->fetch() ) {
            
            ?>
              <div class="col-lg-3 col-md-6 col-sm-6 photogallerytabs mx-auto my-auto mb-3 hovergallery"><a href="img/<?= $img['image_link'] ?>" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/<?= $img['image_link'] ?>" class="img-fluid mt-1" alt="<?= $img['alt'] ?>"></a></div>
              <?php } ?>
            </div>
          </div>
        </div>
        <!-- /Tab carolo warrior -->

        <!-- Tab concours de cuisine -->
        <div class="tab-pane fade" id="concourscuisinecontent" role="tabpanel" aria-labelledby="concourscuisine-tab">
          <div class="container-fluid pl-5 pr-5">
            <div class="row mb-5">
            <?php 
            
            $req = $bdd->prepare("SELECT * FROM RDEGallery WHERE category = 'Concours de Cuisine' ");
            $req->execute();

            while( $img = $req->fetch() ) {
            
            ?>
              <div class="col-lg-3 col-md-6 col-sm-6 photogallerytabs mx-auto my-auto mb-3 hovergallery"><a href="img/<?= $img['image_link'] ?>" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/<?= $img['image_link'] ?>" class="img-fluid mt-1" alt="<?= $img['alt'] ?>"></a></div>

              <?php } ?>
            </div>
          </div>
        </div>
        <!-- /Tab concours de cuisine -->

        <!-- Tab pique-nique -->
        <div class="tab-pane fade" id="piqueniquecontent" role="tabpanel" aria-labelledby="piquenique-tab">
          <div class="container-fluid pl-5 pr-5">
            <div class="row mb-5">
            <?php 
            
            $req = $bdd->prepare("SELECT * FROM RDEGallery WHERE category = 'Pique-Nique' ");
            $req->execute();

            while( $img = $req->fetch() ) {
            
            ?>
              <div class="col-lg-3 col-md-6 col-sm-6 photogallerytabs mx-auto my-auto mb-3 hovergallery"><a href="img/<?= $img['image_link'] ?>" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/<?= $img['image_link'] ?>" class="img-fluid mt-1" alt="<?= $img['alt'] ?>"></a></div>

              <?php } ?>
            </div>
          </div>
        </div>
        <!-- /Tab pique-nique -->
      </div>
    </div>
  </div>

  <!-- footer -->

  <?php include("include/footer.php"); ?>

  <!-- PrettyPhoto js -->
  <script src="assets/lightbox-plus-jquery.min.js"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>