<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Inscription Pique-Nique</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>


  <?php include('include/nav.php')?>
  <!-- Evenement register content -->


  <!-- Image header -->
  <div><img class="event_img" src="img/caroloexpress.png"></div>

  <!-- Second Row -->
  <div id="evenements" class="container-fluid">
    <div class="row">
      <div class="col-6 my-auto">
        <h2 class="text-center policetitres">Pique-Nique</h2>
        <p class="policep">Merci de remplir les champs ci-dessous pour reserver votre repas
à la plaine du Mont Olympe pour le prix de 3€ au lieu de 5€
pour les 200 premières réservations.</p>
      </div>
      <div class="col-6">
        <img class="rdeimg" src="img/event_2019/1.jfif">
      </div>
    </div>
  </div>

  <!-- Formumaire -->

  <section class="get-in-touch container-lg">
    <h1 class="title">Inscription au pique-nique</h1><br>
    <p class="policep text-center">Merci de remplir les champs ci-dessous pour reserver votre repas
à la plaine du Mont Olympe pour le prix de 3€ au lieu de 5€
pour les 200 premières réservations.</p><br>
    <h2 class="title2 mt-3">Etablissement</h2>
    <form class="contact-form row w-100 justify-content-center">
      <div class="form-field col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7">
        <center><select class="custom-select" name="etablissement" id="etablissement">
            <option value="IUTRCC">Institut Universitaire de Technologie (IUT RCC)</option>
            <option value="EiSINe">Ecole d’Ingénieurs en Sciences Industrielles et Numérique (EiSINe)</option>
            <option value="INSPE">Institut national Supérieur du Professorat et de l’Education (INSPÉ)</option>
            <option value="EGC">Ecole de gestion et de commerce (EGC)</option>
            <option value="SIMPLON">Ecole Simplon</option>
            <option value="ISCEE">Institut supérieur de comptabilité et d’économie des entreprises (ISCEE)</option>
            <option value="ESNAM">Ecole supérieure nationale des Arts de la marionnettes (ESNAM)</option>
            <option value="IFSI">Institut de formation en soins infirmiers (IFSI)</option>
            <option value="CFAI">Centre de formation des apprentis de l’industrie (CFAI)</option>
            <option value="LABDA">Lycée agricole Balcon des Ardennes</option>
            <option value="LDMDB">Lycée des métiers de Bazeilles</option>
            <option value="LMDS">Lycée Sévigné</option>
            <option value="LDMB">Lycée des métiers Bazin</option>
            <option value="LM">Lycée Monge</option>
            <option value="LJBC">Lycée JB Clément</option>
            <option value="LPB">Lycée Pierre Bayle</option>
            <option value="LSV">Lycée Simone Veil</option>
          </select></center>
      </div>
      <div class="contact-form row w-100 justify-content-center">
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input id="name" name="name" class="input-text js-input" type="text" required>
          <label class="label" for="name">Nom</label>
        </div>
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input id="email" name="firstname" class="input-text js-input" type="email" required>
          <label class="label" for="email">Prenom</label>
        </div>
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input id="email" name="tel" class="input-text js-input" type="email" required>
          <label class="label" for="email">Mobile</label>
        </div>
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input id="email" name="mail" class="input-text js-input" type="email" required>
          <label class="label" for="email">Email</label>
        </div>
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input id="email" name="verifmail" class="input-text js-input" type="email" required>
          <label class="label" for="email">Retapez l'email</label>
        </div>
      </div>
      <h2 class="title2 mt-3">XXX Repas sont déjà réservés sur les 200 repas à 3€, il reste XXX place(s)</h2>
      <div class="form-field col-12">
        <center><input class="submit-btn" type="submit" value="Valider"></center>
      </div>
    </form>
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
        <h5 class="card-title text-center">Concours de cuisine</h5>
          
          <center><a href="event_register_concourscuisine.php" class="btn btn-primary">S'inscrire</a></center>
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</body>

</html>