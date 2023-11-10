<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if (!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '') {
        $errors[] = "Le nom est obligatoire";
    }
    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '') {
        $errors[] = "Le prénom est obligatoire";
    }
    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '') {
        $errors[] = "L'email' est obligatoire";
    } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide";
    }
    if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '') {
        $errors[] = "Le numéro de téléphone est obligatoire";
    }
    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '') {
        $errors[] = "Le message est obligatoire";
    }
    if (empty($errors)) {
        // traitement du formulaire
        // puis redirection
        header('Location: thanks.php');
    }
    include('form.php');
}
