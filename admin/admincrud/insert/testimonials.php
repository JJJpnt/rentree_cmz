<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie Administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
</head>

<body class="bg-light">

    <h3 class="font-weight-light text-black-50 mt-4 mb-5">
        <center>Ajouter un témoignage</center>
    </h3>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="testimonialstraitement.php" method="post">
                    <div class="form-group">
                        <label>Prénom</label>
                        <input type="text" class="form-control" name="first_name" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" class="form-control" name="age" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label>Etablissement</label>
                        <input type="text" class="form-control" name="establishment" tabindex="3" required>
                    </div>
                    <div class="form-group">
                        <label>Texte du témoignage</label>
                        <input type="text" class="form-control" name="text" tabindex="4" required>
                    </div>
                    <div class="form-group">
                        <label>URL de la photo</label>
                        <input type="text" class="form-control" name="image" tabindex="5" required>
                    </div>
                    <div class="form-group">
                        <label>Entrez une brève description de la photo</label>
                        <input type="text" class="form-control" name="alt" tabindex="6" required>
                    </div>
                    <center><button type="submit" class="btn btn-outline-secondary mb-5" value="submit">Valider</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

</body>

</html>