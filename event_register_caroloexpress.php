<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Inscription Carolo Express</title>
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
        <h2 class="text-center policetitres">Le Carolo Express</h2>
        <p class="policep">Merci de remplir les champs ci-dessous pour inscrire votre équipe
          et participer au Carolo express (course d’orientation) qui pourra vous permettre
          de gagner de nombreux lots. Pour constituer une équipe, vous devez être 5 participants.
          Un mot de passe à choisir vous sera demandé pour l’équipe. Ce dernier vous sera utile
          le jour de la manifestation. Merci de bien retenir le mot de passe que vous allez choisir !
          Opérez votre inscription ensemble.</p>
      </div>
      <div class="col-6">
        <img class="rdeimg" src="img/imgetudiantspiscine.jpg">
      </div>
    </div>
  </div>

  <!-- Formumaire -->

  <section class="get-in-touch">
    <center>
      <h1 class="title">Inscription Carolo Express</h1><br><br>
      <p class="text_text policep">Merci de remplir les champs ci-dessous pour inscrire votre équipe
        et participer au Carolo express (course d’orientation) qui pourra vous permettre
        de gagner de nombreux lots. Pour constituer une équipe, vous devez être 5 participants.
        Un mot de passe à choisir vous sera demandé pour l’équipe. Ce dernier vous sera utile
        le jour de la manifestation. Merci de bien retenir le mot de passe que vous allez choisir !
        Opérez votre inscription ensemble.</p>
    </center><br><br><br>
    <h2 class="title2">Etablissement</h2>
    <form class="contact-form row">
      <div class="form-field col-lg-12">
        <center><select name="etablissement" id="etablissement">
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
      <div class="contact-form row">
        <div class="form-field col-lg-12">
          <input id="name" class="input-text js-input" type="text" required>
          <label class="label" for="name">Nom d'équipe</label>
        </div>
        <div class="contact-form row">
          <div class="form-field col-lg-6">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Nom d'équipe</label>
          </div>
        </div>
        <h2 class="title2">Mot de passe</h2>
        <div class="contact-form row">
          <div class="form-field col-lg-6">
            <input id="name" class="input-text js-input" type="password" required>
            <label class="label" for="name">mot de passe</label>
          </div>
        </div>
        <h2 class="title2">Participant 1</h2>
        <div class="contact-form row">
          <div class="form-field col-lg-6">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Nom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">Prenom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="company" class="input-text js-input" type="text" required>
            <label class="label" for="company">Mobile</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="phone" class="input-text js-input" type="text" required>
            <label class="label" for="phone">E-mail</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="message" class="input-text js-input" type="text" required>
            <label class="label" for="message">Retapez l'e-mail</label>
          </div>
        </div>
        <h2 class="title2">Participant 2</h2>
        <div class="contact-form row">
          <div class="form-field col-lg-6">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Nom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">Prenom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="company" class="input-text js-input" type="text" required>
            <label class="label" for="company">Mobile</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="phone" class="input-text js-input" type="text" required>
            <label class="label" for="phone">E-mail</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="message" class="input-text js-input" type="text" required>
            <label class="label" for="message">Retapez l'e-mail</label>
          </div>
        </div>
        <h2 class="title2">Participant 3</h2>
        <div class="contact-form row">
          <div class="form-field col-lg-6">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Nom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">Prenom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="company" class="input-text js-input" type="text" required>
            <label class="label" for="company">Mobile</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="phone" class="input-text js-input" type="text" required>
            <label class="label" for="phone">E-mail</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="message" class="input-text js-input" type="text" required>
            <label class="label" for="message">Retapez l'e-mail</label>
          </div>
        </div>
        <h2 class="title2">Participant 4</h2>
        <div class="contact-form row">
          <div class="form-field col-lg-6">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Nom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">Prenom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="company" class="input-text js-input" type="text" required>
            <label class="label" for="company">Mobile</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="phone" class="input-text js-input" type="text" required>
            <label class="label" for="phone">E-mail</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="message" class="input-text js-input" type="text" required>
            <label class="label" for="message">Retapez l'e-mail</label>
          </div>
        </div>
        <h2 class="title2">Participant 5</h2>
        <div class="contact-form row">
          <div class="form-field col-lg-6">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Nom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">Prenom</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="company" class="input-text js-input" type="text" required>
            <label class="label" for="company">Mobile</label>
          </div>
          <div class="form-field col-lg-6 ">
            <input id="phone" class="input-text js-input" type="text" required>
            <label class="label" for="phone">E-mail</label>
          </div>
          <div class="form-field col-lg-12">
            <input id="message" class="input-text js-input" type="text" required>
            <label class="label" for="message">Retapez l'e-mail</label>
          </div>
          <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
          </div>
        </div>
    </form>
  </section>
  <!-- Parrallaxe -->
  <?php include('include/parallax.php')?>

  <!-- Event Cards -->
  <div class="row my-4 mx-auto">
    <div class="col-6 col-md-4 mb-2">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Carolo Warrior</h5>

          <center><a href="event_register_carolowarrior.php" class="btn btn-primary">S'inscrire</a></center>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 mb-2">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Concours de cuisine</h5>

          <center><a href="event_register_concourscuisine.php" class="btn btn-primary">S'inscrire</a></center>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-4 mb-2">
      <div class="card mx-auto" style="width: 18rem;">
        <img class="card-img-top" src="img/event_2019/1.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Pique-nique</h5>

          <center><a href="event_register_piquenique.php" class="btn btn-primary">S'inscrire</a></center>
        </div>
      </div>
    </div>
  </div>

  <!-- Event register content end -->
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
</body>

</html>