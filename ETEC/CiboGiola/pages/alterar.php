<?php require('sec.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="..\style\styleIntranet.css"> 
</head>
<body>
    <?php include('barraLateral.php'); ?>
<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg] </p>";
            unset($_SESSION['msg']);
        }
?>
    <?php
        $codProd = $_GET['cod'];
        require('connect.php');
        $busca = mysqli_query($con, "Select * from `tb_produtos` where `codProd` = '$codProd'");
        $produto = mysqli_fetch_array($busca);
    ?>

    <form action="alterar.act.php" method="post" class="formulario" id="" enctype="multipart/form-data">       
      
        <input type="hidden" name="foto_anterior" value="<?php echo $produto['imagem']?>" >
        <input type="hidden" name="codProd" value="<?php echo $produto['codProd']?>" >
        <?php echo "<p class='imgalterar'><img src=$produto[imagem]></p>"; ?>
        <p><input type="file" name="imagem" id="fileFoto"> </p>

        <p> Codigo Contato <?php echo $produto['codProd']; ?> </p>
         <p>
            <label for="nomePrato" >Nome do Prato:</label>
            <input type="text" name="nomePrato" value="<?php echo $produto['nomePrato']?>">
        </p>
         <p>
            <label for="radioSalgado"> Tipo:</label>
            <input type="radio" name="tipo" id="radioSalgado" value="Salgado"
                       <?php echo ($produto['tipo'] == "Salgado") ? "checked" : null; ?>/><label for="radioSalgado">Salgado</label>

           <input type="radio" name="tipo" id="radioDoce" value="Doce"
                       <?php echo ($produto['tipo'] == "Doce") ? "checked" : null; ?>/><label for="radioDoce">Doce</label>
      
        </p>

        <p>
            <label for="subcategoria" >Subcategoria:</label>
            <select type="text" name="subcategoria" id="txtSubCategoria">
            <option  value="<?php echo $produto['subcategoria']; ?>"><?php echo $produto['subcategoria']; ?></option>     
                    <option value="Bruschetta">Bruschetta</option>");      
                    <option value="macarraão">Macarrões</option>");
                    <option value="pizza">Pizza</option>");
                    <option value="risoto">Risoto</option>");
            </select>
        </p>
        <br>

        <p>
            <label for="descricao" >Descrição:</label>
        </p>
        <p>
            <input type="text" name="descricao" id="" class="txtDescricao" value="<?php echo $produto['descricao']?>">
        </p>

        <p>
            <label for="tempoPreparo">Tempo de preparo</label>
        </p>
        <p>
            <input type="text" name="tempoPreparo" id="" class="tempPreparo" value="<?php echo $produto['tempoPreparo']?>"> minutos
        </p>

        <br>
        <p>
            <label for="valorPrato">Valor do Prato</label>
        </p>
        <p>
            <input type="text" name="valorPrato" id="" class="numValor" value="<?php echo $produto['valorPrato']?>">
        </p>
        <p>
            <input type="submit" value="Gravar">
            <a href="produtos.php">Voltar</a>
            <!-- <button type="button" ">Enviar</button> -->
        </p>                                 

    </form>
</body>
</html>