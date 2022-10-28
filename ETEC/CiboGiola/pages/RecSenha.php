<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação senha</title>
    <link rel="stylesheet" href="/CiboGiola/style/estilo.css">
</head>
<body class="RecBody">
    <div class="RecContainer">
        <div class="Recinput">
            <h3 class="RecH">Bem vindo</h3>
            <p>
                <img class="RecSenha"  src="/CiboGiola/Imgs/LogoG&C.png" alt="">
            </p>
            <h3 class="RecH">Recupere sua senha</h3>
        
        <div class="pRec">
    <p>
        <label for="Email">Digite seu email</label>
    </p>
    <p>
        <input type="email" name="Email" id="Login" placeholder="Email@email.com">
    </p>

    <p>
        <label for="btnProxima"></label>
    </p>

    <p>
        <button type="button" class="btentrar" value="Próxima" onclick="recuperar()">Recuperar</button>
    </p>
    </div>
    </div>
    </div>
    
    <script>
        function recuperar(){

            alert("Um código de recuperação foi enviado. Verifique o email cadastrado")
        }


    </script>




</body>
</html>