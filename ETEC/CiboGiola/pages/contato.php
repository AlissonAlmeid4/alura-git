

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cibo & Giola</title><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\style\estilo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('navbar.php'); ?>
<div class="centro"> 
    <div class="fundocontato">
    <div class="imgcontato">
        <img src="imgs/ravioli.jpg" width="100%" height="520" alt="">
    </div>
        <div class="contato">
            <h1>Fale Conosco</h1>   
        <p>
        Nome </p>
        <input type="text" placeholder="Nome">
        
        <p>
        Telefone</p>
         <input type="tel" placeholder="Fone">
        
        <p>
        E-mail </p>
        <input type="email" placeholder="Email">
        
        <p>
        CEP </p>
        <input type="number" placeholder="CEP">
        
        <p>Mensagem</p>      
        <textarea name="mensagem" cols="40" rows="10" 
        class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" 
        aria-required="true" aria-invalid="false"></textarea>
        
        <button type="submit">Enviar</button>
        </div>
        
    </div>
</div>
<div id="fundologin">
    <?php include('fundoLogin.php'); ?>
</div>  
<script src="..\src\pages.js"></script>
<script>
    $('#fundologin').fadeOut(0);
</script>
</body>
</html>