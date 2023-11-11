<?php
require_once '_connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($friends);
?>
<form action='friendsFormTreatment.php' method='POST'>
    <label for="firstname">Add your friend firstname</label>
    <input type="text" name="firstname" id="firstname">

    <label for="lastname">Add your friend lastname</label>
    <input type="text" name="lastname" id="lastname">

    <button type="submit">Submit</button>
</form>
<?php
if (!empty($errors)) {
    echo '<div class="errors">';
    foreach ($errors as $error) {
        echo '<p>' . $error . '</p>';
    }
    echo '</div>';
}

$firstname = trim($_POST['firstname']); 
$lastname = trim($_POST['lastname']);

$query = "INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)";
$statement = $pdo->prepare($query);
$statement->bindValue(':firstname', $firstname, PDO::PARAM_STR);
$statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);
$statement->execute();
?>
<ul>
    <?php
foreach($friends as $friend) {
    echo '<li>' . $friend[1] . ' ' . $friend[2] . '</li>';
}
?>
</ul>