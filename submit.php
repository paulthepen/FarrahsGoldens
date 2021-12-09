<?php

if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

    // Google secret API
    $secretAPIkey = '6Ldf-NocAAAAAP510Kxm_PSG5RTVrhHY2HTI_k4C';

    // reCAPTCHA response verification
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);

    // Decode JSON data
    $response = json_decode($verifyResponse);
    if (!$response->success) {
        return;
    }
}  

$fields = $_POST;

$fields_sorter = [
    'Name: ' => 'name',
    'Address: ' => 'address',
    'City: ' => 'city',
    'State/ZIP: ' => 'state',
    'Home Phone: ' => 'home',
    'Work/Cell: ' => 'cell',
    'Email: ' => 'email',
    
]
