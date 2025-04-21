<?php
    /**
    *   fichier contenant les différentes configuration pour se connecter a la base de données 
    *   les informations relatives au la phase developpement
    *
    */

    define('DEVEL',true);

    //fichier pour la journalisation des erreurs
    $dossierRacine= dirname(__FILE__);
    define('LOG_FILE', $dossierRacine.'log'. DIRECTORY_SEPARATOR.'bartender.log');

    //Nom de la page actuelle
    $pageActuelle= basename($_SERVER['SCRIPT_NAME']);

    //connexion à la base de données
    try {
        $mysqli = new mysqli('localhost','root','mysql','Allan');
    }
    catch (Exception $e) {
        //erreur de connexion
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }

    //Récuperer les informations propres à la page
    if($pageActuelle){
        $requete="SELECT titre, description, accroche, texte FROM pages WHERE url=?";
        $stmt = $mysqli->prepare($requete);
        if($stmt) {
            $stmt->bind_param('s', $pageActuelle);
            $stmt->execute();
            $stmt->store_result();

            if(0==$stmt->errno){
                
                if($stmt->num_rows !=0) {
                    $stmt->bind_result($titre, $description, $accroche, $texte);
                    $stmt->fetch();
                } 
                else {
                    //erreur de page
                    echo'<div class="alert alert-danger" role="alert"><strong>Erreur 404</strong> : La page demandée n\'existe pas.</div>';
                }
            } 
            else {
                //erreur de requete
                echo'<div class="alert alert-danger" role="alert"><strong>Nous sommes désolé un probleme techniques nous empêche d\'acceder a la donnée</strong></div>';
                echo_debug($stmt->error);
            }
            $stmt->close();
            
        }
        else {
            //erreur de requete
            echo'<div class="alert alert-danger" role="alert"><strong>Nous sommes désolé un probleme techniques nous empêche d\'acceder a la donnée</strong></div>';
            echo_debug($mysqli->error);
        }
    }
    else{
        echo '<div class="alert alert-danger" role="alert"><strong>Erreur 404</strong> : La page demandée n\'existe pas111.</div>';
    }

    $mysqli->set_charset('utf8');
    require_once 'include/ma-bibliotheque.php';

?>