<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Contact</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    
  <!-- FontAwesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

</head>
  <body>
    <?php include('include/nav.php')?>

    <div class="header_img">
    <div class="d-flex align-items-end justify-content-center" style="height:250px;"><h2 class="header_text display-2 text-white"><strong>Contact</strong></h2></div>
  </div>

        <section class="get-in-touch container-fluid">
            <?php

            if(isset($_GET['success'])) {
                if($_GET['success'] == 1) { ?>
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7">
                        <div class="alert alert-danger text-center" role="alert">
                            Votre mail a bien été envoyé.
                        </div>
                    </div>
                </div>
                <?php }
            }

            ?>
            <h1 class="title">Contactez-nous</h1>
            <form id="formcontact" class="contact-form row justify-content-center" action="include/traitementcontact.php" method="post">
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="name" autofocus tabindex="1" required>
                    <label class="label">Nom</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="firstname" tabindex="2" required>
                    <label class="label">Prénom</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <label class="label mb-4">Établissement</label>

                    <select class="custom-select" name="etablissement" required>
                        <option value="0">Veuillez choisir un établissement</option>
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
                    </select>

                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="mail" tabindex="4" required>
                    <label class="label">Mail</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="tel" tabindex="5" required>
                    <label class="label">Téléphone</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="objet" tabindex="6" required>
                    <label class="label">Objet du message</label>
                </div>
                <div class="col-11 col-sm-11 col-md-10 col-lg-8 col-xl-7 form-field">
                    <input class="input-text js-input" type="text" name="message" tabindex="7" required>
                    <label class="label">Message</label>
                </div>
                <div class="form-field col-12">
                    <center><button class="submit-btn" type="submit" value="submit">Envoyer</button></center>
                </div>
            </form>
        </section>

    <div class="contactfontawesome container-fluid">
        <h2 class="text-center policetitres mt-2">Ou alors</h2>
        <div class="row">

        <div class="spoiler col-sm-4 mx-auto text-center m-2" onclick="ouvrirFermerSpoiler(this);">
        <i class="fas fa-envelope fa-2x contact-fa" style="color: var(--color-blue-middle)"></i><br>
        <i class="fas fa-angle-down fa-2x" style="color: var(--color-blue-middle)"></i>
            <div class="contenuSpoiler">
            <p class="policep"><br><br>etudiants@mairie-charlevillemezieres.fr</p>
            </div>
        </div>
        <div class="spoiler col-sm-4 mx-auto text-center m-2" onclick="ouvrirFermerSpoiler(this);">
        <i class="fas fa-map-marked-alt fa-2x contact-fa" style="color: var(--color-blue-middle)"></i><br>
        <i class="fas fa-angle-down fa-2x" style="color: var(--color-blue-middle)"></i>
            <div class="contenuSpoiler">
            <p class="policep"><br><br>Place du Théâtre CS 40490 08109 Charleville-Mézières Cedex</p>
            </div>
        </div>
        <div class="spoiler col-sm-4 mx-auto text-center m-2" onclick="ouvrirFermerSpoiler(this);">
        <i class="fas fa-phone fa-2x contact-fa" style="color: var(--color-blue-middle)"></i><br>
        <i class="fas fa-angle-down fa-2x" style="color: var(--color-blue-middle)"></i>
            <div class="contenuSpoiler">
            <p class="policep"><br><br>Tel: 03 24 32 44 91</p>
            </div>
        </div>
        </div>
    </div>

    <!-- Page d'acceuil content end -->

    <?php include('include/footer.php')?>

    <!-- Masonry -->
    <!-- <script src="assets/masonry.pkgd.min.js"></script> -->

    <script>
    $(function(){
        $('.grid').masonry({
            // options
            itemSelector: '.grid-item',
            columnWidth: 200,
            gutter: 20
        });

    });

    function ouvrirFermerSpoiler(div) {
        var divContenu = div.getElementsByTagName('div')[0];
        if(divContenu.style.display == 'none') {
            divContenu.style.display = 'block';
        } else {
            divContenu.style.display = 'none';
        }
    }
    </script>

      <!-- Ajax -->
 <script>
    $("#formcontact").submit(function(e) {

e.preventDefault(); // avoid to execute the actual submit of the form.

var form = $(this);
    // Envoie un mail
    $.ajax({        // On check en ajax en appelant check_submit.php, en lui passant les champs en POST
        type: "POST",
        url: "include/traitementcontact.php",
        data: form.serialize(), // sérialises les éléments du formulaire
        success: function(data)
        {
            alert("Nous avons reçu votre mail, nous vous répondrons au plus vite.");
        }
    });

$('#formcontact')[0].reset();

});
  </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>