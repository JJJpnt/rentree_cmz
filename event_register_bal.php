<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Inscription Bal de rentée</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>


    <?php include('include/nav.php')?>
    <!-- Evenement register content -->


     <!-- img event -->

     <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Bal de la Rentrée</strong></h2></div>
  </div>

    <!-- Second Row -->
    <div id="evenements" class="container-fluid">
        <div class="row">
            <div class="col-6 my-auto">
                <h2 class="text-center policetitres">Bal de rentée </h2>
                <p class="policep text-center"><br>La Gacolor est l’événement phare de la vie étudiante à
                    Charleville-Mézières. Cette manifestation, grand public, est ouverte à tous. <br>
                    La Gacolor aura lieu le dimanche 27 septembre 2020 entre 14h et 20h.</p>
            </div>
            <div class="col-6 mt-5">
                <img class="rdeimg" src="img/event_2019/1.jfif">
            </div>
        </div>
    </div>

    <!-- Formumaire -->

    <section class="get-in-touch container-lg">
        <h1 class="title">Inscription Gacolor</h1><br>
        <p class="policep text-center">Pour opérer votre inscription, merci de cliquer sur le boutton ci-dessous & de
            vous laisser guider :<br><br>

            <a href="https://www.helloasso.com/associations/gacolor/evenements/gacolor-2020" type="button" class="btn btn-primary mx-auto my-auto">S'inscrire</a>

           
    </section>

    <!-- Parrallaxe -->
    <?php include('include/parallax.php')?>

    <!-- Event Cards -->


  <div class="row my-4 justify-content-center align-items-center w-100">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/1.jfif">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Express</p>
        <hr class="style-five">
        <div class="dropdown">
        <center><a href="event_register_caroloexpress.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/6.jfif">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Warrior</p>
        <hr class="style-five">
        <center><a href="event_register_carolowarrior.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/3.jfif">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Concours De Cuisine</p>
        <hr class="style-five">
        <center><a href="event_register_concourscuisine.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/12.jfif">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Pique-Nique</p>
        <hr class="style-five">
        <center><a href="event_register_piquenique.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/14.jfif">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Tournoi de Basket</p>
        <hr class="style-five">
        <center><a href="event_register_basket.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/gacolor.jpeg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Gacolor</p>
        <hr class="style-five">
        <center><a href="event_register_gacolor.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/9.jfif">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Escape Game</p>
        <hr class="style-five">
        <center><a href="event_register_escape.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
  </div>


    <!-- Event register content end -->
    <?php include('include/footer.php')?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
</body>

</html>