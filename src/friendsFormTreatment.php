<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['lastname']) || trim($_POST['lastname']) === '') {
        $errors[] = "Le nom est obligatoire";
    }
    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '') {
        $errors[] = "Le prénom est obligatoire";
    }
    if (empty($errors)) {
        header('Location: thanks.php');
    }
    include('friends.php');
}
