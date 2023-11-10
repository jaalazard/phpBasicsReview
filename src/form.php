<form action="traitement.php" method="post">

    <div>

        <label for="lastname">Nom :</label>

        <input required type="text" id="lastname" name="user_lastname">

    </div>

    <div>

        <label for="firstname">Prénom :</label>

        <input required type="text" id="firstname" name="user_firstname">

    </div>

    <div>

        <label for="courriel">Courriel :</label>

        <input required type="email" id="courriel" name="user_email">

    </div>

    <div>

        <label for="Téléphone">Téléphone :</label>

        <input required type="tel" id="Téléphone" name="user_phone">

    </div>

    <label for="subject-select">Choisissez un sujet:</label>

    <select required name="subject" id="subject-select">
        <option value="">Choisissez un sujet</option>
        <option value="reclamation">Réclamation</option>
        <option value="devis">Devis</option>
        <option value="autre">Autre</option>
    </select>

    <div>

        <label for="message">Message :</label>

        <textarea id="message" name="user_message"></textarea>

    </div>

    <div class="button">

        <button type="submit">Envoyer votre message</button>

    </div>

</form>
<?php

$errors = isset($errors) ? $errors : [];

if (!empty($errors)) {
    // affichage des erreurs
    echo '<div class="errors">';
    foreach ($errors as $error) {
        echo '<p>' . $error . '</p>';
    }
    echo '</div>';
}
