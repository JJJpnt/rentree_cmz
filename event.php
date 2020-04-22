<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- PrettyPhoto css -->
  <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css">

  <link rel="stylesheet" href="assets/css/style.css">

  <title>Evenement</title>
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
  </div>
  <!-- parallax -->

  <?php include("include/parallax.php"); ?>

  <!--gallery <img src="img/pique_nique.png" class="img-fluid mt-1 ">-->

  <div class="row text-center mt-5 mb-5">
    <div class="col-lg-1"></div>
    <div class="col-xs-6 col-md-6 col-lg-2 mx-auto my-auto"><img src="img/carolo_express.png" class="img-fluid mt-1 "></div>
    <div class="col-xs-6 col-md-6 col-lg-2 mx-auto my-auto"><img src="img/carolo_warrior.png" class="img-fluid mt-1 "></div>
    <div class="col-xs-6 col-md-6 col-lg-2 mx-auto my-auto"><img src="img/concours_cuisine.png" class="img-fluid mt-1 "></div>
    <div class="col-xs-6 col-md-6 col-lg-2 mx-auto my-auto"><img src="img/pique_nique.png" class="img-fluid mt-1 "></div>
    <div class="col-lg-1"></div>
  </div>

  <div class="row text-center m-5">
    <div class="col-xs-6 col-md-7 col-lg-2 mx-auto my-auto"></div>
    <div class="col-xs-6 col-md-7 col-lg-2 mx-auto my-auto"><a href="event.php"><img src="img/2019.png" class="mt-1"></a></div>
    <div class="col-xs-7 col-md-7 col-lg-1"></div>
    <div class="col-xs-6 col-md-7 col-lg-2 mx-auto my-auto"><a href="event.php"><img src="img/2020.png" class="mt-1"></a></div>
    <div class="col-xs-6 col-md-7 col-lg-2 mx-auto my-auto"></div>
  </div>
  <div class="row height-mid text-center">
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/1.jfif" rel="prettyPhoto[Gallery1]" data-lightbox="mygallery"><img src="img/event_2019/1.jfif" class="img-fluid mt-1"></a></div>
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/2.jfif" rel="prettyPhoto[Gallery1]" data-lightbox="mygallery"><img src="img/event_2019/2.jfif" class="img-fluid mt-1"></a></div>
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/3.jfif" rel="prettyPhoto[Gallery1]" data-lightbox="mygallery"><img src="img/event_2019/3.jfif" class="img-fluid mt-1"></a></div>
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/4.jfif" rel="prettyPhoto[Gallery1]" data-lightbox="mygallery"><img src="img/event_2019/4.jfif" class="img-fluid mt-1"></a></div>
  </div>
  <div class="row height-mid text-center">
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/5.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/5.jfif" class="img-fluid mt-1 "></a></div>
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/6.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/6.jfif" class="img-fluid mt-1 "></a></div>
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/7.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/7.jfif" class="img-fluid mt-1 "></a></div>
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/8.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/8.jfif" class="img-fluid mt-1 "></a></div>
  </div>
  <div class="row height-mid text-center">
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/9.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/9.jfif" class="img-fluid mt-1 "></a></div>
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/10.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/10.jfif" class="img-fluid mt-1 "></a></div>
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/11.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/11.jfif" class="img-fluid mt-1 "></a></div>
    <div class="col-2 height-small mx-auto my-auto"><a href="img/event_2019/12.jfif" rel="prettyPhoto[Gallery]" data-lightbox="mygallery"><img src="img/event_2019/12.jfif" class="img-fluid mt-1 "></a></div>
  </div>
  <!-- footer -->

  <?php include("include/footer.php"); ?>


  <!-- PrettyPhoto js -->
  <script src="assets/lightbox-plus-jquery.min.js"></script>

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
</body>

</html>