<?php
require("include/configuration.inc");
require("include/entete.inc");
?>
  
  <link rel="stylesheet" href="css/contact.css">

  <!-- Formulaire -->
  <div class="form-container">
    <div class="form-header">Contactez-nous</div>
    <form class="contact-form" action="traitement_contact.php" method="POST">
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" required>

      <label for="sujet">Sujet</label>
      <input type="text" id="sujet" name="sujet" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <label for="telephone">Téléphone</label>
      <input type="tel" id="telephone" name="telephone">

      <button type="submit">Envoyer</button>
    </form>
  </div>

<?php
require("include/footer.inc");
