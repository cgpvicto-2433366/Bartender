
<?php
require("include/configuration.inc");
require("include/entete.inc");
?>

<link rel="stylesheet" href="css/propos.css">

    <div class="container">
        <div class="about-section">
            <div class="profile-photo" id="photo">
            <img src="medias/images/bar.jpg" alt="Photo de barman">
            </div>
            <div class="profile-content" id="content">
                <h1>À propos de moi</h1>
                <p>Bienvenue sur ma page "À propos". Je suis passionné(e) par [votre passion/domaine d'expertise]. Mon parcours m'a amené(e) à développer des compétences solides en [vos compétences].</p>
                <p>Au fil des années, j'ai travaillé sur divers projets qui m'ont permis de [vos réalisations ou expériences]. Je m'efforce toujours de [votre objectif ou mission].</p>
                <p>N'hésitez pas à me contacter pour discuter de collaborations potentielles ou simplement pour échanger sur [vos sujets d'intérêt].</p>
            </div>
        </div>
    </div>
<?php
    require("include/footer.inc");
?>

    <script>
        // Attendre que le DOM soit complètement chargé
        document.addEventListener('DOMContentLoaded', function() {
            // On attend un court instant pour que la page soit visible
            setTimeout(function() {
                // Déclencher l'animation de la photo
                document.getElementById('photo').classList.add('photo-active');
                
                // Déclencher l'animation du contenu
                document.getElementById('content').classList.add('content-active');
            }, 300);
        });
    </script>
<!-- Pied de page -->
<?php
require("include/footer.inc");
