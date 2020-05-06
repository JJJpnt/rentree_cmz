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

    <title>Inscription Gacolor</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>


    <?php include('include/nav.php')?>
    <!-- Evenement register content -->


    <!-- Image header -->
    <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Gacolor</strong></h2></div>
  </div>

    <!-- Second Row -->
    <div id="evenements" class="container-fluid">
        <div class="row">
            <div class="col-6 my-auto">
                <h2 class="text-center policetitres">Gacolor</h2>
                <p class="policep text-center"><br>La Gacolor est l’événement phare de la vie étudiante à
                    Charleville-Mézières. Cette manifestation, grand public, est ouverte à tous. <br>
                    La Gacolor aura lieu le dimanche 27 septembre 2020 entre 14h et 20h.</p>
            </div>
            <div class="col-6">
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


    <div class="row my-4 justify-content-center w-100">
        <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Carolo Express</h5>

                    <center><a href="event_register_caroloexpress.php" class="btn btn-primary">S'inscrire</a></center>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Carolo Warrior</h5>

                    <center><a href="event_register_carolowarrior.php" class="btn btn-primary">S'inscrire</a></center>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
            <div class="card mx-auto" style="width: 18rem;">
                <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Pique-Nique</h5>

                    <center><a href="event_register_piquenique.php" class="btn btn-primary">S'inscrire</a></center>
                </div>
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