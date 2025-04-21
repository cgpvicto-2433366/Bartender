<?php
require("include/configuration.inc");
require("include/entete.inc");
?>

<link rel="stylesheet" href="css/categorie.css">


<h1 class="page-title">Nos Catégories de Produits</h1>
    
    <div class="categories-container">
        <!-- Catégorie 1 -->
        <div class="category-card">
            <img src="medias\images/pro.jpg" alt="Électronique" class="category-image">
            <div class="category-label">Populaire</div>
            <div class="category-info">
                <h3 class="category-name">Électronique</h3>
                <p class="category-description">Découvrez notre gamme d'appareils électroniques de haute qualité, des derniers smartphones aux accessoires audio innovants.</p>
            </div>
            <button class="view-button" onclick="window.location.href='produits.php'">Voir plus</button>
        </div>

        <!-- Catégorie 2 -->
        <div class="category-card">
            <img src="medias\images/cok.jpg" alt="Mode" class="category-image">
            <div class="category-info">
                <h3 class="category-name">Mode</h3>
                <p class="category-description">Parcourez notre collection de vêtements et accessoires tendance pour hommes et femmes, des basiques aux pièces de créateurs.</p>
            </div>
            <button class="view-button" onclick="window.location.href='categorie-mode.php'">Voir plus</button>
        </div>

        <!-- Catégorie 3 -->
        <div class="category-card">
            <img src="medias\images/ver.jpg" alt="Maison" class="category-image">
            <div class="category-label">Nouveauté</div>
            <div class="category-info">
                <h3 class="category-name">Maison & Déco</h3>
                <p class="category-description">Embellissez votre intérieur avec notre sélection de meubles modernes, luminaires design et objets décoratifs.</p>
            </div>
            <button class="view-button" onclick="window.location.href='categorie-maison.php'">Voir plus</button>
        </div>

        <!-- Catégorie 4 -->
        <div class="category-card">
            <img src="medias\images/cul.jpg" alt="Beauté" class="category-image">
            <div class="category-info">
                <h3 class="category-name">Beauté & Bien-être</h3>
                <p class="category-description">Découvrez nos produits de soins, cosmétiques et parfums des marques les plus prestigieuses pour votre routine beauté.</p>
            </div>
            <button class="view-button" onclick="window.location.href='categorie-beaute.php'">Voir plus</button>
        </div>

        <!-- Catégorie 5 -->
        <div class="category-card">
            <img src="medias\images/gla.jpg" alt="Sports" class="category-image">
            <div class="category-info">
                <h3 class="category-name">Sports & Loisirs</h3>
                <p class="category-description">Équipez-vous avec notre gamme d'articles de sport, vêtements techniques et accessoires pour toutes vos activités.</p>
            </div>
            <button class="view-button" onclick="window.location.href='categorie-sports.php'">Voir plus</button>
        </div>

        <!-- Catégorie 6 -->
        <div class="category-card">
            <img src="medias\images/vin.jpg" alt="Cuisine" class="category-image">
            <div class="category-label">Promotion</div>
            <div class="category-info">
                <h3 class="category-name">Cuisine & Gastronomie</h3>
                <p class="category-description">Équipez votre cuisine avec nos ustensiles, appareils de cuisine et accessoires pour des préparations culinaires réussies.</p>
            </div>
            <button class="view-button" onclick="window.location.href='categorie-cuisine.php'">Voir plus</button>
        </div>
    </div>

<?php
require("include/footer.inc");

