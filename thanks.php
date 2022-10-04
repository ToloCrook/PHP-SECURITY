<?php

$errors= [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (!isset($_POST['user_name']) || trim($_POST['user_name'] === '')) {
        $errors = "Le prénom est obligatoire";
    } if (!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '') {
        $errors = "Le nom est obligatoire";
    } if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '' || $_POST['user_email'] != filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $errors= "L'e-mail est obligatoire";
    }
}




?>




echo "Merci " . $_POST['user_name'] . " " . $_POST['user_lastname'] . " de nous avoir contacté à propos de " . $_POST['theme'] . "." . "<br>" .

"Un de nos conseillers vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_phone']  . " dans les plus brefs délais pour traiter votre demande :" . "<br>" .

$_POST['user_message'];







