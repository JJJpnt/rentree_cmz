<?php
include ('../../../include/connexiondbval.php');

$image = !empty($_POST['image']) ? $_POST['image'] : NULL;
$alt = !empty($_POST['alt']) ? $_POST['alt'] : NULL;
$website_link = !empty($_POST['website_link']) ? $_POST['website_link'] : NULL;

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
        $newpartner = $bdd->prepare("INSERT INTO RDEPartners (image, alt, website_link)
                                        VALUES ( :image, :alt, :website_link)");

        $newpartner->execute(array(
            ':image' => $fichier,
            ':alt' => $alt,
            ':website_link' => $website_link
        ));
        $newpartner->closeCursor();

        header("Location: ../../admin.php?success=partneradd");

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