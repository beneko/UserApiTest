<?php

require_once '../includes/DbOperations.php';
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (
        isset($_POST['username']) and
        isset($_POST['email']) and
        isset($_POST['password'])
    ) {
        $db = new DbOperations();

        if ($db->createUser(
            $_POST['username'],
            $_POST['password'],
            $_POST['email']
        )) {
            $response['error'] = false;
            $response['message'] = "Utilisateur enregistré";
        } else {
            $response['error'] = true;
            $response['message'] = "erreur d'enregistrement";
        }
    } else {
        $response['error'] = true;
        $response['message'] = "Certains champs manquent";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Requête invalide";
}

echo json_encode($response);
