<?php
// callback_paiement.php

// Récupérer les données de la notification
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Vérifier la validité de la notification
if ($data && $data['status'] == 'success') {
    $external_id = $data['externalId'];
    $transaction_id = $data['transactionId'];
    $amount = $data['amount'];
    $phone_number = $data['phoneNumber'];

    // Logique pour accorder l'accès au hotspot
    // Par exemple, mettre à jour la base de données pour marquer l'utilisateur comme payé
    // Vous pouvez également envoyer une confirmation par email ou SMS

    // Exemple :
    // updateAccess($external_id);

    // Répondre à MVola pour confirmer la réception de la notification
    http_response_code(200);
    echo "OK";
} else {
    // Gestion des erreurs ou des notifications échouées
    http_response_code(400);
    echo "Erreur dans la notification de paiement.";
}
?>
