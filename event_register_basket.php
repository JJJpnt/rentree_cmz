<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Inscription Tournoi de Basket</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>

<body>


  <?php include('include/nav.php')?>
  <!-- Evenement register content -->


  <!-- img event -->

  <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Tournoi de Basket</strong></h2></div>
  </div>

  <!-- Second Row -->
  <div id="evenements" class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6 my-auto">
        <h2 class="text-center policetitres">Tournoi de basket</h2>
        <p class="policep text-center">Merci de remplir les champs ci-dessous pour inscrire votre équipe <br>
et participer au Tournoi de basket qui pourra vous permettre <br>
de gagner de nombreux lots. Pour constituer une équipe, vous devez être 5 à 7 participants.<br>
Opérez votre inscription ensemble.<br>
Le tournoi de basket aura lieu le vendredi 25 septembre à partir de 17h à l’Arena de Charleville-Mézières.</p>
      </div>
      <div class="col-12 col-md-6 mt-5">
        <img class="rdeimg" src="img/event_2019/1.jpg">
      </div>
    </div>
  </div>

  <!-- Formumaire -->

  <section class="get-in-touch container-lg">
    <h1 class="title">Inscription Tournoi de basket</h1><br>
    <h2 class="title2 mt-3">Etablissement</h2>
    <form id="inscription" class="contact-form row w-100 justify-content-center" action="include/basketregister.php" method="post">
      <div class="form-field col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7">
        <center><select class="custom-select" name="etablissement" id="etablissement-font-2">
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
            <option value="SCBS">SCBS – Y Schools</option>
          </select></center>
      </div>
      <div class="contact-form row w-100 justify-content-center">
        <div class="col-12 form-field">
          <h2 class="title2">Nom de l'équipe (à votre choix)</h2>
        </div>
      </div>
      <div class="contact-form row w-100 justify-content-center">
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input class="input-text js-input" name="teamname" type="text" required>
          <label class="label">Nom d'équipe</label>
        </div>
      </div>

      <h2 class="title2 mt-3">Merci de bien vouloir inscrire un mot de passe de votre choix qui vous sera nécessaire le jour de la manifestation</h2>
      <div class="contact-form row w-100 justify-content-center">
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input name="password" class="input-text js-input" type="password" required>
          <label class="label">Mot de passe</label>
        </div>
        <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
          <input name="verifpassword" class="input-text js-input" type="password" required>
          <label class="label">Confirmer le mot de passe</label>
        </div>
      </div>

      <div class="container-fluid mt-5">
        <div class="row justify-content-center">
          <ul class="nav nav-tabs" id="register" role="tablist">
            <li class="nav-item mr-2">
              <a class="nav-link active" id="part1" data-toggle="tab" href="#register1" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Participant 1</p><p class="tabgalerietxt inscripmobile">1</p></a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" id="part2" data-toggle="tab" href="#register2" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Participant 2</p><p class="tabgalerietxt inscripmobile">2</p></a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" id="part3" data-toggle="tab" href="#register3" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Participant 3</p><p class="tabgalerietxt inscripmobile">3</p></a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" id="part4" data-toggle="tab" href="#register4" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Participant 4</p><p class="tabgalerietxt inscripmobile">4</p></a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" id="part5" data-toggle="tab" href="#register5" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Participant 5</p><p class="tabgalerietxt inscripmobile">5</p></a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" id="part6" data-toggle="tab" href="#register6" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Participant 6</p><p class="tabgalerietxt inscripmobile">6</p></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="part7" data-toggle="tab" href="#register7" role="tab" aria-controls="home" aria-selected="true"><p class="tabgalerietxt inscripdesktop">Participant 7</p><p class="tabgalerietxt inscripmobile">7</p></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="mb-5"></div>
      <div class="row justify-content-center">
        <div class="tab-content" id="myTabContent">
          <!-- Tabs participants -->
            <div class="tab-pane fade show active" id="register1" role="tabpanel" aria-labelledby="register1-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 1</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name1" class="input-text js-input" type="text" required>
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname1" class="input-text js-input" type="text" required>
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel1" class="input-text js-input" type="text" required>
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail1" class="input-text js-input" type="email" required>
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail1" class="input-text js-input" type="email" required>
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade show" id="register2" role="tabpanel" aria-labelledby="register2-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3 text-center">Participant 2</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name2" class="input-text js-input" type="text" required>
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname2" class="input-text js-input" type="text" required>
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel2" class="input-text js-input" type="text" required>
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail2" class="input-text js-input" type="email" required>
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail2" class="input-text js-input" type="email" required>
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="tab-pane fade show" id="register3" role="tabpanel" aria-labelledby="register3-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 3</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name3" class="input-text js-input" type="text" required>
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname3" class="input-text js-input" type="text" required>
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel3" class="input-text js-input" type="text" required>
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail3" class="input-text js-input" type="email" required>
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail3" class="input-text js-input" type="email" required>
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="tab-pane fade show" id="register4" role="tabpanel" aria-labelledby="register4-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 4</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name4" class="input-text js-input" type="text" required>
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname4" class="input-text js-input" type="text" required>
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel4" class="input-text js-input" type="text" required>
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail4" class="input-text js-input" type="email" required>
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail4" class="input-text js-input" type="email" required>
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show" id="register5" role="tabpanel" aria-labelledby="register5-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 5</h2>
                  <div class="contact-form row w-100 justify-content-center">
                  <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name5" class="input-text js-input" type="text" required>
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname5" class="input-text js-input" type="text" required>
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel5" class="input-text js-input" type="text" required>
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail5" class="input-text js-input" type="email" required>
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail5" class="input-text js-input" type="email" required>
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show" id="register6" role="tabpanel" aria-labelledby="register6-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 6</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name6" class="input-text js-input" type="text">
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname6" class="input-text js-input" type="text">
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel6" class="input-text js-input" type="text">
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail6" class="input-text js-input" type="email">
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail6" class="input-text js-input" type="email">
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade show" id="register7" role="tabpanel" aria-labelledby="register7-tab">
              <div class="container-fluid pl-5 pr-5">
                <div class="row justify-content-center mt-5 mb-5">
                  <h2 class="title2 mt-3">Participant 7</h2>
                  <div class="contact-form row w-100 justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="name7" class="input-text js-input" type="text">
                      <label class="label">Nom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="firstname7" class="input-text js-input" type="text">
                      <label class="label">Prénom</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="tel7" class="input-text js-input" type="text">
                      <label class="label">Mobile</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="mail7" class="input-text js-input" type="email">
                      <label class="label">Email</label>
                    </div>
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                      <input name="verifmail7" class="input-text js-input" type="email">
                      <label class="label">Veuillez resaisir votre email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-field col-12">
              <center><input class="submit-btn" type="submit" value="Valider"></center>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

  <!-- Parrallaxe -->
  <?php include('include/parallax.php')?>

  <!-- Event Cards -->
  <div class="row my-4 justify-content-center align-items-center w-100 mx-auto">
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/1.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Express</p>
        <hr class="style-five">
        <div class="dropdown">
        <center><a href="event_register_caroloexpress.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/6.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Carolo Warrior</p>
        <hr class="style-five">
        <center><a href="event_register_carolowarrior.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/3.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Concours De Cuisine</p>
        <hr class="style-five">
        <center><a href="event_register_concourscuisine.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/12.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Pique-Nique</p>
        <hr class="style-five">
        <center><a href="event_register_piquenique.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 mb-4">
      <div class="card-polaroid mx-auto">
        <img class="img-fluid" src="img/event_2019/14.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Bal de Rentrée</p>
        <hr class="style-five">
        <center><a href="event_register_bal.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
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
        <img class="img-fluid" src="img/event_2019/9.jpg">
        <p class="policetitres-proginc text-center" style="color: var(--color-blue-middle);">Escape Game</p>
        <hr class="style-five">
        <center><a href="event_register_escape.php" class="btn btn-secondary mb-2">S'inscrire</a></center>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include('include/footer.php')?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
  </script>
  <!-- Ajax -->
 <script>
    $("#inscription").submit(function(e) {

e.preventDefault(); // avoid to execute the actual submit of the form.

var form = $(this);
    // Envoie un mail
    $.ajax({        // On check en ajax en appelant check_submit.php, en lui passant les champs en POST
        type: "POST",
        url: "include/basketregister.php",
        data: form.serialize(), // sérialises les éléments du formulaire
        success: function(data)
        {
            alert("Votre inscription a bien été prise en compte.");
        }
    });

$('#inscription')[0].reset();

});
  </script>
</body>

</html>