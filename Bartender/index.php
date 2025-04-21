
<?php
    require("include/configuration.inc");
    require("include/entete.inc");
?>

<link rel="stylesheet" href="css/accueil.css">

  <div class="site-wrapper">
    <!-- Ton contenu ici : logo, hero-section, containers, etc. -->
  </div>
    
<!-- Section Hero avec image d'arrière-plan -->
<!-- Section Hero avec image d'arrière-plan -->
<section class="hero-section">
    <div class="hero-content">
        <h1>Bienvenue sur notre site</h1>
        <p>Découvrez nos services et produits de qualité conçus pour répondre à vos besoins.</p>
    </div>
</section>

<!-- Section avec les conteneurs rectangulaires flottants -->
<section class="container-section">
    <div class="container-grid">
        <!-- Premier conteneur -->
        <div class="container-box">
            <a href="apropos.php">
                <div class="container-box-content">
                    <h2>A propos</h2>
                    <p>Description du premier conteneur avec des informations pertinentes.</p>
                    
                </div>
            </a>
        </div>
        
        <!-- Deuxième conteneur -->
        <div class="container-box">
            <a href="categorie.php">
                <div class="container-box-content">
                    <h2>Nos produits</h2>
                    <p>Description du deuxième conteneur avec des informations pertinentes.</p>
                    
                </div>
            </a>
        </div>
        <div class="container-box">
            <a href="avis.php">
                <div class="container-box-content">
                    <h2>Vos avis</h2>
                    <p>Description du deuxième conteneur avec des informations pertinentes.</p>
                    
                </div>
            </a>
        </div>

        <div class="container-box">
            <a href="contact.php">
                <div class="container-box-content">
                    <h2>Contact</h2>
                    <p>Description du deuxième conteneur avec des informations pertinentes.</p>
                    
                </div>
            </a>
        </div>
        
        <!-- Ajoutez d'autres conteneurs selon vos besoins -->
    </div>
</section>

<!-- Pied de page -->
<?php
    require("include/footer.inc");
