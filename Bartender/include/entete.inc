
<?php
/**
 * Entête commune à toutes les pages du site
 * @author Ben Schalom Kamga 
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html lang="fr-CA">

<head>
    <title>
        <?php
            echo"$titre";
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        echo"<meta property='og:description' name='description' content='$description'>"
    ?>
    <meta name="author" content="Ben Schalom">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <script defer src="js/script.js"></script>
    <meta property="og:title" content="LAN-PARTY" />
    <meta property="og:image" content="medias/commun/partage.png"
    <meta property="og:type" content="website" />
    <?php //inclureJsPropreALaPageActuelle(); ?>
</head>
<body>
    <nav>
        <div id="logo">
            <img src="medias/images/logo-nobg.png" alt="Logo de l'entreprise">
        </div>
        <div id="menus">
            <ul>
     <?php
        $liens=array("Accueil"=>"index.php", "A propos"=>"apropos.php", "Projets"=>"projets.php", "Avis"=>"avis.php","Contact"=>"contact.php");
        foreach($liens as $onglet => $lien){
            //Ajout de la classe active a l'onglet de la barre de navigation dont la page est celle devant être affiché
            if($lien==$pageActuelle){
                echo("<li class='active'><a href='$lien' class='menu'>$onglet</a></li>");
            }
            //Si l'onglet n'est pas la page active
            else{
                echo("<li><a href='$lien' class='menu'>$onglet</a></li>");
            }
        }
    ?>
                </ul>
        </div>
    </nav>

