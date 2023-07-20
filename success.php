<?php
session_start();

if (!isset($_SESSION['password'])){
    header('Location: index.php');
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
<div class="alert alert-info">La tua password é: <b><?= $_SESSION['password'] ?></b></div>
</body>
</html>