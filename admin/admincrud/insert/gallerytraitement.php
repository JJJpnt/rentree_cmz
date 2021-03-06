<?php
include ('../../../include/connexiondbval.php');

$avatar = !empty($_POST['avatar']) ? $_POST['avatar'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;
$category = !empty($_POST['category']) ? $_POST['category'] : NULL;

$dossier = '../../../img/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 3000000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.'); 

//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
        $newimage = $bdd->prepare("INSERT INTO RDEGallery (image_link, alt, category)
        VALUES ( :avatar, :alt, :category)");

        $newimage->execute(array(
        ':avatar' => $fichier,
        ':alt' => $alt,
        ':category' => $category
        ));

        header("Location: ../../admin.php?success=galleryadd");

     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo "Echec de l'upload !";
     }
}
else
{
     echo $erreur;
}
?>