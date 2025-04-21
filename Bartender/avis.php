<?php
require("include/configuration.inc");
require("include/entete.inc");
?>
<link rel="stylesheet" href="css/avis.css">


  <div class="avis-container">
    <h2>Avis des utilisateurs</h2>
    <div class="avis-list" id="avisList">
      <!-- Les commentaires seront ajoutés ici -->
    </div>
  </div>

  <div class="ajouter-btn" onclick="afficherFormulaire()">+ Ajouter un avis</div>

  <div class="form-overlay" id="formOverlay">
    <div class="form-popup">
      <h3>Laisser un commentaire</h3>
      <textarea id="commentaireInput" rows="4" placeholder="Écrivez votre commentaire ici..."></textarea>
      <label for="etoiles">Nombre d'étoiles :</label>
      <select id="etoilesInput">
        <option value="★☆☆☆☆">★☆☆☆☆</option>
        <option value="★★☆☆☆">★★☆☆☆</option>
        <option value="★★★☆☆">★★★☆☆</option>
        <option value="★★★★☆">★★★★☆</option>
        <option value="★★★★★">★★★★★</option>
      </select>
      <button onclick="ajouterCommentaire()">Envoyer</button>
    </div>
  </div>

  <script>
   function afficherFormulaire() {
  document.getElementById("formOverlay").style.display = "flex";
}

function ajouterCommentaire() {
  const commentaire = document.getElementById("commentaireInput").value;
  const etoiles = document.getElementById("etoilesInput").value;

  if (!commentaire) return;

  const avisHTML = `
    <div class="avis-card">
      <div>
        <div class="user-icon">U</div>
        <div class="etoiles">${etoiles}</div>
        <div class="commentaire">${commentaire}</div>
      </div>
    </div>
  `;

  document.getElementById("avisList").innerHTML += avisHTML;

  // Réinitialiser le formulaire
  document.getElementById("commentaireInput").value = "";
  document.getElementById("etoilesInput").value = "★☆☆☆☆";
  document.getElementById("formOverlay").style.display = "none";
}

  </script>


<?php
require("include/footer.inc");

