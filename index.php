<?php
function create_password($lenght){
    $password = '';

    include __DIR__ . '/includes/characters.php';

    $characters = strtoupper($letters) . $letters . $numbers . $symbols;

    $total_characters = mb_strlen($characters);

    while(mb_strlen($password) < $lenght){
        $random_index = rand(0, $total_characters - 1);

        $random_character = $characters[$random_index];

        $password.= $random_character;
    }
    
    return $password;
}

if(isset($_GET['length'])){
    $password = create_password($_GET['length']);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body class="my-5 text-center">

    <h3>Password Generator</h3>
    
    <form action="index.php" method="GET" class="my-3">

        <label for="length">Lunghezza Password:</label>
        <input type="number" id="length" name="length">
        
        <button type="submit">Invia</button>
        <button type="submit">Annulla</button>

    </form>
    <?php
    if(isset($password)) : ?>
    <div class="alert alert-info">La tua password é: <b><?= $password ?></b></div>
    <?php endif ?>


</body>
</html>