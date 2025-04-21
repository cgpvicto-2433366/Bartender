<?php
require("include/configuration.inc");
require("include/entete.inc");
?>

<link rel="stylesheet" href="css/produits.css">

<body>
    <h1>Nos Produits</h1>
    
    <div class="products-container">
        <!-- Produit 1 -->
        <div class="category-header">La catégorie xyz</div>
        <div class="product-card">
        <div class="product-image-container">
                <img src="medias/images/gla.jpg" alt="Produit 2" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-top-info">
                    <div class="product-name">Le nom</div>
                    <div class="product-price">Le prix</div>
                </div>
                <div class="product-description">La description</div>
                <div class="reviews-carousel">
                    carousel des avis
                    <button class="more-button" onclick="showCommentForm(1)">+</button>
                </div>
            </div>
        </div>
        
        <!-- Produit 2 -->
        <div class="category-header">La catégorie xyz</div>
        <div class="product-card">
            <div class="product-image-container">
                <img src="medias/images/cok.jpg" alt="Produit 2" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-top-info">
                    <div class="product-name">Écouteurs Pro</div>
                    <div class="product-price">129,99 €</div>
                </div>
                <div class="product-description">Ces écouteurs sans fil haut de gamme offrent une qualité sonore exceptionnelle avec une réduction active du bruit. Design ergonomique pour un confort maximal, avec 30 heures d'autonomie et un étui de charge élégant.</div>
                <div class="reviews-carousel">
                    carousel des avis
                    <button class="more-button" onclick="showCommentForm(2)">+</button>
                </div>
            </div>
        </div>
        
        <!-- Produit 3 -->
        <div class="category-header">La catégorie xyz</div>
        <div class="product-card">
            <div class="product-image-container">
                <img src="medias/images/pro.jpg" alt="Produit 3" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-top-info">
                    <div class="product-name">Sac Urban Style</div>
                    <div class="product-price">89,50 €</div>
                </div>
                <div class="product-description">Ce sac à dos moderne associe style urbain et fonctionnalité. Fabriqué en matériaux imperméables avec des compartiments pour ordinateur portable et accessoires. Parfait pour le quotidien ou les voyages courts.</div>
                <div class="reviews-carousel">
                    carousel des avis
                    <button class="more-button" onclick="showCommentForm(3)">+</button>
                </div>
            </div>
        </div>
        
        <!-- Produit 4 -->
        <div class="category-header">La catégorie xyz</div>
        <div class="product-card">
            <div class="product-image-container">
                <img src="medias/images/ver.jpg" alt="Produit 4" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-top-info">
                    <div class="product-name">Lampe Ambiance</div>
                    <div class="product-price">79,00 €</div>
                </div>
                <div class="product-description">Cette lampe connectée crée l'ambiance parfaite dans votre intérieur avec des millions de couleurs disponibles. Contrôlable via smartphone, avec des modes prédéfinis pour la lecture, la détente ou les soirées.</div>
                <div class="reviews-carousel">
                    carousel des avis
                    <button class="more-button" onclick="showCommentForm(4)">+</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal pour les commentaires -->
    <div class="comment-modal" id="commentModal">
        <div class="comment-form">
            <h3>Ajouter un commentaire</h3>
            <textarea placeholder="Partagez votre expérience avec ce produit..."></textarea>
            <div>
                <button onclick="submitComment()">Envoyer</button>
                <button class="close" onclick="closeCommentForm()">Fermer</button>
            </div>
        </div>
    </div>
    
    <script>
        // Fonction pour afficher le formulaire de commentaire
        function showCommentForm(productId) {
            document.getElementById('commentModal').classList.add('active');
            // On pourrait stocker l'ID du produit dans une variable pour l'utiliser lors de l'envoi du commentaire
            currentProductId = productId;
        }
        
        // Fonction pour fermer le formulaire de commentaire
        function closeCommentForm() {
            document.getElementById('commentModal').classList.remove('active');
        }
        
        // Fonction pour soumettre le commentaire (simulation)
        function submitComment() {
            alert('Votre commentaire a été enregistré. Merci pour votre avis!');
            closeCommentForm();
        }
    </script>
<?php
require("include/footer.inc");
