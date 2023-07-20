<?php

function create_password($lenght){
    $password = '';

    include __DIR__ . '/characters.php';

    $characters = strtoupper($letters) . $letters . $numbers . $symbols;

    $total_characters = mb_strlen($characters);


    if(empty($lenght)) return 'Lunghezza password non inserita';

    elseif($lenght < 0) return 'Lunghezza password non valida';


    while(mb_strlen($password) < $lenght){
        $random_index = rand(0, $total_characters - 1);

        $random_character = $characters[$random_index];

        $password.= $random_character;
    }

    session_start();

    $_SESSION['password'] = $password;
    
    return true;
}

?>