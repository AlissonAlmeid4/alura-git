<?php require('sec.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <script src="src/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="src/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
     <link rel="stylesheet" href="..\style\styleIntranet.css"> 
</head>
<body>

<?php include('barraLateral.php') ?>
<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset( $_SESSION['msg']);
        }
    ?>

    <form action="cadProd.act.php" method="post" class="formulario" enctype="multipart/form-data">
        <h3>Preencha o formulário do Produto</h3>

        <p><label for="fileFoto" id="lblFoto">Foto</label> </p>
        <p><input type="file" name="imagem" id="fileFoto"> </p>

         <p>
            <label for="nomePrato" >Nome do Prato:</label>
            <input type="text" name="nomePrato" placeholder="Digite o nome do prato">
        </p>
        <p>
            <label for="radioSalgado" >Tipo:</label>
            <input type="radio" name="tipo" id="radioSalgado" value="Salgado">
            <label for="radioSalgado">Salgado</label>
            <input type="radio" name="tipo" id="radioDoce" value="Doce">
            <label for="radioDoce">Doce</label>
        </p>

        <p>
            <label for="subcategoria" >Subcategoria:</label> 
        </p>    
        <p>
            <select type="text" name="subcategoria" id="txtSubCategoria">
            <option  value="false"></option>     
                    <option value="Bruschetta">Bruschetta</option>");      
                    <option value="macarraão">Macarrões</option>");
                    <option value="pizza">Pizza</option>");
                    <option value="risoto">Risoto</option>");
            </select>
        </p>
       
        <p>
            <label for="descricao" >Descrição:</label>
        </p>
        <p>
            <input type="text" name="descricao" id="" class="txtDescricao">
        </p>

        <p>
            <label for="tempoPreparo">Tempo de preparo</label>
        </p>
        <p>
            <input type="text" name="tempoPreparo" id="" class="tempPreparo"> minutos
        </p>

        <br>
        <p>
            <label for="valorPrato">Valor do Prato</label>
        </p>
        <p>
            <input type="text" name="valorPrato" id="" class="numValor">
        </p>
        <p>
            <input type="submit" value="Gravar">
            <!-- <button type="button" ">Enviar</button> -->
        </p>
    </form>

    <script src="..\src\pages.js"></script>

</body>
</html>