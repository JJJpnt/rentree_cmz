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
        <center>Ajouter une photo à la galerie</center>
    </h3>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="gallerytraitement.php" method="post" enctype="multipart/form-data">
                    <label for="exampleFormControlSelect1">Catégorie</label>
                    <select class="form-control mb-3" name="category" required>
                        <option>Carolo Warrior</option>
                        <option>Carolo Express</option>
                        <option>Pique-Nique</option>
                        <option>Concours de Cuisine</option>
                    </select>
                    <div class="form-group">
                        <label>Choisissez une photo</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000"><br>
                        <input type="file" name="avatar" required>
                    </div>
                    <div class="form-group">
                        <label>Brève description de la photo</label>
                        <input type="text" class="form-control" name="alt" required>
                    </div>
                    <center><button type="submit" class="btn btn-outline-secondary mb-5" value="submit">Valider</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

</body>

</html>