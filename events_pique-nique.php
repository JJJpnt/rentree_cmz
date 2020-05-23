<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Pique-Nique</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>

<body>

    <?php include('include/nav.php')?>

    <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Pique-Nique</strong></h2></div>
  </div>
    <div class="row w-100 text-center">
      <div class="col-xl-6 col-mb-10 order-xl-3 order-4 p-0 m-auto">
        <img class="evenementimg evenementimg-1 img-fluid d-block" src="img/event_2019/1.jpg">
      </div>
      <div class="col-xl-6 col-mb-10 order-xl-4 order-3 my-auto p-0 m-0">
        <h2 class="text-center policetitres mt-5">Pique-Nique</h2>
        <div class="w-75 mx-auto">
          <p class="policep">Afin de passer tous ensemble une pause déjeuner conviviale, vous avez la
                        possibilité de venir avec votre déjeuner, des chaises et des tables seront à disposition sur un
                        espace de la Plaine du Mont Olympe.
                        <br><br>
                        Sinon, vous avez la possibilité de profiter d’une formule déjeuner à 3€ (au lieu de 5€)
                        pour les 200 premiers les plus rapides !!
                        <br><br>
                        La formule sera composée d’un burger, d’une frite et d’une boisson.
                        <br><br>
                        Afin de bénéficier du repas à 3€, il est impératif de réserver votre repas.
                        <br><br>
                        Vous paierez sur place le jour J.<p class="mb-5">
        </div>
      </div>
    </div>

    <div data-bs-parallax-bg="true" class="backgroundimages" style="height:auto; padding-bottom: 30px; background-image: url(img/gacolor.jpeg);">
    <div class="showeventcarac" id="compteur">
        <h2 class=" policetitres text-center mt-5 text-shadow" style="color: white;">Caractéristiques</h2>
        <div class="row w-100 mt-5">
            <div class="col-xs-6 col-md-6 col-lg-6 col-xl-3 mb-1">
                <div class="rounded-circle mx-auto my-auto">
                    <p class="text-center policetitres-proginc color-yellow-light">Participants</p>
                    <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong id="compteur1">352</strong></p>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6 col-xl-3 mb-1">
                <div class="rounded-circle mx-auto my-auto">
                    <p class="text-center policetitres-proginc color-yellow-light">Horaires</p>
                    <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong><span id="compteur2">14</span>h / <span id="compteur3">20</span>h</strong></p>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6 col-xl-3 mb-1">
                <div class="rounded-circle mx-auto my-auto">
                    <p class="text-center policetitres-proginc color-yellow-light">Lieu</p>
                    <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong>Charleville-Mézières</strong></p>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6 col-xl-3">
                <div class="rounded-circle mx-auto my-auto">
                    <p class="text-center policetitres-proginc color-yellow-light">Date</p>
                    <p class="text-center policep" style="color: white; font-size: 1.5rem;"><strong><span id="compteur4">27</span>/<span id="compteur5">09</span>/20<span id="compteur6">20</span></strong></p>
                </div>
            </div>
        </div>
    </div></div>
    
    <div class="container-fluid my-5">
        <div class="row w-100 mb-5 mb-xl-0">
            <div class="col-xl-6 my-auto col-mb-10 order-1 p-0 m-0">
                <h2 class="text-center policetitres">Règles</h2>
                <div class="w-75 mx-auto">
                    <p class="policep">Afin de passer tous ensemble une pause déjeuner conviviale, vous avez la
                        possibilité de venir avec votre déjeuner, des chaises et des tables seront à disposition sur un
                        espace de la Plaine du Mont Olympe.
                        <br><br>
                        Sinon, vous avez la possibilité de profiter d’une formule déjeuner à 3€ (au lieu de 5€)
                        pour les 200 premiers les plus rapides !!
                        <br><br>
                        La formule sera composée d’un burger, d’une frite et d’une boisson.
                        <br><br>
                        Afin de bénéficier du repas à 3€, il est impératif de réserver votre repas.
                        <br><br>
                        Vous paierez sur place le jour J. </p>
                </div>
            </div>
            <div class="txt_faq col-xl-6 col-mb-10 order-2 p-0 m-auto">
            <div class="d-flex align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6"><img src="img/mascotte_montre.png" style="width:100%;"></div>
                <a class="btn-sinscrire" href="event_register_piquenique.php"><button class="btn btn-secondary"><h2 class="policetitres" style="color: var(--color-yellow-middle); margin-bottom: 0!important;">S'inscrire</h2></button></a>
            </div>
            </div>
        </div>
    </div>

    <?php include('include/parallax.php')?>

    <div class="row my-4 justify-content-center align-items-center w-100 mx-auto">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/1.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Escape Game</p>
        <hr class="style-five">
        <div class="dropdown">
        <center><a href="events_escape.php" class="btn btn-secondary mb-2">Détails</a></center>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/6.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Warrior</p>
        <hr class="style-five">
        <center><a href="events_warrior.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/3.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Tournoi de Basket</p>
        <hr class="style-five">
        <center><a href="events_basket.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/15.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Express</p>
        <hr class="style-five">
        <center><a href="events_express.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/11.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Bal</p>
        <hr class="style-five">
        <center><a href="events_bal.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/gacolor.jpeg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Gacolor</p>
        <hr class="style-five">
        <center><a href="events_gacolor.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/9.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Concours de Cuisine</p>
        <hr class="style-five">
        <center><a href="events_cuisine.php" class="btn btn-secondary mb-2">Détails</a></center>
      </div>
    </div>
  </div>

    <?php include('include/footer.php')?>

    <script src="./assets/js/noframework.waypoints.min.js"></script>
    <script type="text/javascript">

function gocompteur(startcount, endcount, duration, idTarget) {

    var b = endcount; // Nombre final du compteur
    var ctb = startcount; // Initialisation du compteur
    var bravo = Math.ceil((duration * 1000) / b); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
    var nodes = document.getElementById(
        idTarget); // On récupère notre noeud où sera rafraîchi la valeur du compteur

    function countdown2() {
        nodes.innerHTML = ++ctb;
        if (ctb < b) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
            setTimeout(countdown2, bravo);
        }
    }

    setTimeout(countdown2, bravo);

}

var waypoint1 = new Waypoint({
  element: document.getElementById('compteur1'),
  handler: function(direction) {
        gocompteur(0,352,1,"compteur1");
  },
  offset: 'bottom-in-view' 
})

var waypoint2 = new Waypoint({
  element: document.getElementById('compteur2'),
  handler: function(direction) {
        gocompteur(0,14,0.7,"compteur2");
  },
  offset: 'bottom-in-view' 
})

var waypoint3 = new Waypoint({
  element: document.getElementById('compteur3'),
  handler: function(direction) {
        gocompteur(0,20,1,"compteur3");
  },
  offset: 'bottom-in-view' 
})

var waypoint3 = new Waypoint({
  element: document.getElementById('compteur4'),
  handler: function(direction) {
        gocompteur(0,27,1.4,"compteur4");
  },
  offset: 'bottom-in-view' 
})

var waypoint3 = new Waypoint({
  element: document.getElementById('compteur5'),
  handler: function(direction) {
        gocompteur(0,9,0.9,"compteur5");
  },
  offset: 'bottom-in-view' 
})

var waypoint3 = new Waypoint({
  element: document.getElementById('compteur6'),
  handler: function(direction) {
        gocompteur(0,20,1,"compteur6");
  },
  offset: 'bottom-in-view' 
})

</script>

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