<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- PrettyPhoto css -->
  <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css">

  <link rel="stylesheet" href="assets/css/style.css">

  <title>Evenement</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

  <!-- navbar -->

  <?php include("include/nav.php"); ?>

  <!-- img event -->

  <div><img class="event_img" src="img/evenement.jpeg"></div>

  <!--carte-->

  <div class="row card_event text-center m-5">
    <div class="cards_events col-xs-6 col-md-6 col-lg-6 col-xl-2 mx-auto my-auto">
      <div class="card height-20em mb-2" >
        <img class="card-img-top" src="img/carolo_express.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Carolo Express</h5>
          <p class="card-text">le Carolo Express permet aux étudiants de découvrir la ville autrement.</p>
          <a href="events_express.php" class="btn btn-primary bg-blue-dark">en savoir plus</a>
        </div>
      </div>
    </div>
    <div class="cards_events col-xs-6 col-md-6 col-lg-6 col-xl-2 mx-auto my-auto">
      <div class="card height-20em mb-2" >
        <img class="card-img-top" src="img/carolo_warrior" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Carolo Warrior</h5>
          <p class="card-text">Carolo Warrior est un relai sportif composé de nombreuses activités sportives et/ou
            ludiques.</p>
          <a href="events_warrior.php" class="btn btn-primary bg-blue-dark ">en savoir plus</a>
        </div>
      </div>
    </div>
    <div class="cards_events col-xs-6 col-md-6 col-lg-6 col-xl-2 mx-auto my-auto">
      <div class="card height-20em mb-2" >
        <img class="card-img-top" src="img/concours_cuisine.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Concours De Cuisine</h5>
          <p class="card-text">Concours de cuisine sur la Place Ducale en partenariat avec l’association INTERCampus.
          </p>
          <a href="events_cuisine.php" class="btn btn-primary bg-blue-dark">en savoir plus</a>
        </div>
      </div>
    </div>
    <div class="cards_events col-xs-6 col-md-6 col-lg-6 col-xl-2 mx-auto my-auto">
      <div class="card height-20em" >
        <img class="card-img-top" src="img/pique_nique.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Pique-Nique</h5>
          <p class="card-text">Vous avez la possibilité de venir avec votre déjeuner, des chaises et des tables seront à
            disposition.</p>
          <a href="events_pique-nique.php" class="btn btn-primary bg-blue-dark">en savoir plus</a>
        </div>
      </div>
    </div>
    <div class="cards_events col-xs-6 col-md-6 col-lg-6 col-xl-2 mx-auto my-auto">
      <div class="card height-20em" >
        <img class="card-img-top" src="img/pique_nique.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Tournoi de basket</h5>
          <p class="card-text">Tournoi de basket 5 à 7 participants.</p>
          <a href="events_basket.php" class="btn btn-primary bg-blue-dark">en savoir plus</a>
        </div>
      </div>
    </div>
    <div class="cards_events col-xs-6 col-md-6 col-lg-6 col-xl-2 mx-auto my-auto">
      <div class="card height-20em" >
        <img class="card-img-top" src="img/pique_nique.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Gacolor</h5>
          <p class="card-text">Vous souhaitez passer un moment convivial, festif et haut en couleurs ?</p>
          <a href="events_gacolor.php" class="btn btn-primary bg-blue-dark">en savoir plus</a>
        </div>
      </div>
    </div>
  </div>
  <!-- parallax -->

  <?php include("include/parallax.php"); ?>

  <!--gallery <img src="img/pique_nique.png" class="img-fluid mt-1 ">-->

  <div class="row mt-5 mb-5">
    <div class="col-lg-1"></div>
    <div class="col-xs-6 col-md-5 col-lg-2 mx-auto my-auto"><img src="img/carolo_express.png" class="img-fluid mt-1 "></div>
    <div class="col-xs-6 col-md-5 col-lg-2 mx-auto my-auto"><img src="img/carolo_warrior.png" class="img-fluid mt-1 "></div>
    <div class="col-xs-6 col-md-5 col-lg-2 mx-auto my-auto"><img src="img/concours_cuisine.png" class="img-fluid mt-1 "></div>
    <div class="col-xs-6 col-md-5 col-lg-2 mx-auto my-auto"><img src="img/pique_nique.png" class="img-fluid mt-1 "></div>
    <div class="col-lg-1"></div>
  </div>

<!-- Test tabs pour galerie photos -->
  <!-- <div class="container-fluid">
    <div class="row justify-content-center">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item mr-5">
          <a class="nav-link active" id="tabcaroloexpress" data-toggle="tab" href="#tabcaroloexpress" role="tab" aria-controls="home" aria-selected="true">Carolo Express</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link" id="tabcarolowarrior" data-toggle="tab" href="#tabcarolowarrior" role="tab" aria-controls="profile" aria-selected="false">Carolo Warrior</a>
        </li>
        <li class="nav-item mr-5">
          <a class="nav-link" id="tabcuisine" data-toggle="tab" href="#tabcuisine" role="tab" aria-controls="contact" aria-selected="false">Concours de Cuisine</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="tabpiquenique" data-toggle="tab" href="#tabpiquenique" role="tab" aria-controls="contact" aria-selected="false">Pique-Nique</a>
        </li>
      </ul>
    </div>
    <div class="row justify-content-center">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="caroloexpresscontent" role="tabpanel" aria-labelledby="caroloexpress-tab">Carolo express content</div>
        <div class="tab-pane fade" id="carolowarriorcontent" role="tabpanel" aria-labelledby="carolowarrior-tab">Carolo warrior content</div>
        <div class="tab-pane fade" id="concourscuisinecontent" role="tabpanel" aria-labelledby="concourscuisine-tab">Concours de cuisine content</div>
        <div class="tab-pane fade" id="piqueniquecontent" role="tabpanel" aria-labelledby="piquenique-tab">Pique-Nique content</div>
      </div>
    </div>
  </div> -->

  <div class="row m-5 d-flex justify-content-center">

    <div class="col-xs-12 col-md-12 col-lg-2 mx-auto my-auto"><a href="event.php"><img src="img/2019.png" class="mt-1"></a></div>

    <div class="col-xs-12 col-md-12 col-lg-2 mx-auto my-auto"><a href="event.php"><img src="img/2020.png" class="mt-1"></a></div>

  </div>

  <!-- Galerie photo -->
  <div class="container-fluid pl-5 pr-5">
    <div class="row mb-5">
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/1.jfif" rel="prettyPhoto[Gallery1]" data-lightbox="mygallery"><img src="img/event_2019/1.jfif" class="img-fluid mt-1"></a></div>
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/2.jfif" rel="prettyPhoto[Gallery1]" data-lightbox="mygallery"><img src="img/event_2019/2.jfif" class="img-fluid mt-1"></a></div>
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/3.jfif" rel="prettyPhoto[Gallery1]" data-lightbox="mygallery"><img src="img/event_2019/3.jfif" class="img-fluid mt-1"></a></div>
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/4.jfif" rel="prettyPhoto[Gallery1]" data-lightbox="mygallery"><img src="img/event_2019/4.jfif" class="img-fluid mt-1"></a></div>

      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/5.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/5.jfif" class="img-fluid mt-1 "></a></div>
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/6.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/6.jfif" class="img-fluid mt-1 "></a></div>
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/7.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/7.jfif" class="img-fluid mt-1 "></a></div>
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/8.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/8.jfif" class="img-fluid mt-1 "></a></div>

      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/9.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/9.jfif" class="img-fluid mt-1 "></a></div>
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/10.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/10.jfif" class="img-fluid mt-1 "></a></div>
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/11.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/11.jfif" class="img-fluid mt-1 "></a></div>
      <div class="col-lg-3 col-md-6 col-sm-6 img-thumbnail mx-auto my-auto mb-3"><a href="img/event_2019/12.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/12.jfif" class="img-fluid mt-1 "></a></div>
    </div>
  </div>
  <!-- footer -->

  <?php include("include/footer.php"); ?>


  <!-- Test script tabs pour galerie photos -->
  <!-- <script>
    $('#myTab a[href="#caroloexpresscontent"]').tab('show') // Select tab by name
    $('#myTab li:first-child a[href="#carolowarriorcontent"]').tab('show') // Select first tab
    $('#myTab li:last-child a[href="#piqueniquecontent"]').tab('show') // Select last tab
    $('#myTab li:nth-child(3) a[href="#concourscuisinecontent"]').tab('show') // Select third tab
  </script> -->


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