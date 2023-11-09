<form action="thanks.php" method="post">

    <div>

        <label for="nom">Nom :</label>

        <input type="text" id="nom" name="user_name">

    </div>

    <div>

        <label for="courriel">Courriel :</label>

        <input type="email" id="courriel" name="user_email">

    </div>

    <div>

        <label for="Téléphone">Téléphone :</label>

        <input type="tel" id="Téléphone" name="user_phone">

    </div>

    <div>

        <label for="message">Message :</label>

        <textarea id="message" name="user_message"></textarea>

    </div>

    <div class="button">

        <button type="submit">Envoyer votre message</button>

    </div>

</form>
<?php
var_dump($_POST);