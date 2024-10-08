<?php
// traitement_paiement.php

// Informations d'identification MVola en mode production
$client_id = 'AlaLg979E7d8Os6e0LDgB_Qpo78a';
$client_secret = 'L11AHAhm5C4miRO_2ZwT1VDPJ8ga';

// Fonction pour obtenir le token d'accès
function getAccessToken($client_id, $client_secret) {
    $url = 'https://api.mvola.mg/token'; // URL de production
    $data = [
        'grant_type' => 'client_credentials',
        'client_id' => $client_id,
        'client_secret' => $client_secret
    ];

    $options = [
        'http' => [
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
            'timeout' => 30
        ]
    ];

    $context  = stream_context_create($options);
    $result = @file_get_contents($url, false, $context);

    if ($result === FALSE) {
        die('Erreur lors de la récupération du token d\'accès.');
    }

    $response = json_decode($result, true);
    
    if (isset($response['access_token'])) {
        return $response['access_token'];
    } else {
        die('Erreur: Impossible d\'obtenir le token d\'accès.');
    }
}

// Fonction pour initier un paiement avec cURL
function initiatePayment($access_token, $phone_number, $amount, $external_id, $callback_url) {
    $url = 'https://api.mvola.mg/mm/transactions/type/merchantpay/1.0.0/'; // URL de production

    $data = [
        'amount' => $amount,
        'currency' => 'MGA',
        'receiverNumber' => $phone_number,
        'description' => 'Paiement pour accès au hotspot',
        'externalId' => $external_id,
        'callbackUrl' => $callback_url
    ];

    // Initialisation de cURL
    $ch = curl_init();

    // Configuration cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);

    // Ajout du token d'accès dans l'entête
    $headers = [
        'Authorization: Bearer ' . $access_token,
        'Content-Type: application/json',
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Envoi des données JSON
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Exécution de la requête
    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        // Affiche l'erreur cURL si elle existe
        echo 'Erreur cURL: ' . curl_error($ch);
        curl_close($ch);
        return false;
    }

    // Gestion de la réponse
    $response = json_decode($result, true);
    curl_close($ch);

    return $response;
}

// Traitement du formulaire de paiement
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone_number = $_POST['phone_number'];
    $amount = $_POST['amount'];
    $external_id = uniqid();  // Identifiant unique pour la transaction
    $callback_url = 'https://Tactinfo.co/callback_paiement.php'; // URL pour le retour de la notification

    // Obtenir le token d'accès
    $access_token = getAccessToken($client_id, $client_secret);

    // Initier le paiement avec cURL
    $payment_response = initiatePayment($access_token, $phone_number, $amount, $external_id, $callback_url);

    // Vérifier la réponse de l'API
    if ($payment_response && isset($payment_response['status']) && $payment_response['status'] == 'success') {
        echo "Paiement initié avec succès. Veuillez vérifier votre téléphone pour compléter la transaction.";
    } else {
        $message = isset($payment_response['message']) ? $payment_response['message'] : 'Une erreur inconnue est survenue.';
        echo "Échec de l'initiation du paiement : " . $message;
    }
} else {
    echo "Méthode de requête non autorisée.";
}
