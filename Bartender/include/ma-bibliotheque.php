
<?php
/**
 *
 * @author Ben Schalom KAMGA 
 * Affiche une information de débogage seulement lorsque DEVEL est à true.
 * @source Note de cours : https://apical.xyz/fiches/echo_debug/Fonction_de_debogage
 *
 * Utilisation : echo_debug($mysqli->error);
 * Suppositions critiques : pour un meilleur affichage, définir la classe debug dans la feuille de style.
 * @param String $message Information à afficher. Affichera "débogage" si ne reçoit aucun paramètre.
 */
?>
<?php
/*
 * Function pour savoir si nous sommes en mode developpement ou production
 */
function echo_debug($message = 'débogage') {

    if (defined('DEVEL') && DEVEL === true) {
        echo '<div class="debug">';

        if (is_array($message) || is_object($message)) {
            print_r($message);
        }
        else {
            echo $message;
        }
        echo '</div>';
    }
    log_debug($message);
}

/*
 * Enregistre la date suivie d'une information de débogage dans le fichier journal (log)
 * @source: note de cours https://apical.xyz/fiches/debogage_php/Utilisation_d_un_registre_des_erreurs_log_file_p
 * @modifier: par Ben Schalom
 */
function log_debug($message) {

    if (is_array($message) || is_object($message)) {
        $message = print_r($message, true);
    }

    if (defined('DEBUG_LOG_FILE')) {
        error_log(date("F j, Y, g:i a") . " - Message de débogage: $message" . PHP_EOL, 3, LOG_FILE);
    }
    else {
        error_log(date("F j, Y, g:i a") . " - Message de débogage: $message" . PHP_EOL);
    }
}

/**
 * Ajoute une balise <script> pour un fichier .js qui porte le même nom que la page actuelle,
 * seulement si ce script existe.
 * @author Christiane Lagacé <christiane.lagace@hotmail.com>
 * @modifier: Ben Schalom KAMGA
 * Supposition critique : le fichier doit être placé dans le sous-dossier js/scriptspages pour pouvoir être inclus.
 * Ex : le script pour la page d'accueil sera js/scriptspages/index.js.
 *
 * @return void
 *
 */
function inclureJsPropreALaPageActuelle(){
    $dossierRacineSite = dirname(__FILE__, 2);

    // Le deuxième paramètre de basename permet de supprimer cette chaîne de la valeur retournée
    $pageActuelleSansExtension = basename( $_SERVER['SCRIPT_NAME'], '.php' );

    if ( file_exists( $dossierRacineSite . '/js/scriptspages/' . $pageActuelleSansExtension . '.js' ) ) {
        echo "<script src='js/scriptspages/$pageActuelleSansExtension.js' defer></script>";
    }
}