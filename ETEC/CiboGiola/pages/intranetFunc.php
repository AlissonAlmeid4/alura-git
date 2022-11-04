<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cibo & Giola</title><link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="..\style\styleIntranet.css">
</head>
<body>
<?php include('barraLateral.php') ?>
<?php
    @session_start();
    if(isset($SESSIONS['msg'])){
        echo "<p class=alert> $_SESSION</p>";
        unset($_SESSION['msg']);
    }

echo "<div class=bemvindo>";
echo "<h1>Bem Vindo, $_SESSION[nome] </h1>";
echo "</div>";

?>

<script src="..\src\pages.js"></script>
</body>
</html>