<?php require('sec.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <script src="src/jquery-3.6.0.min.js"></script>
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

    <form action="cadFunc.act.php" method="post" class="formulario" enctype="multipart/form-data">
        <h3>Preencha o formulário do Funcionário</h3>
        <p>
            <label for="txtNome" >Nome completo:</label>
            <input type="text" name="nome" id="txtNome" placeholder="Digite o seu nome completo">
        </p>
        <p>
            <label for="sexo" >Sexo:</label>
            <input type="radio" name="sexo" id="radioMasc" value="Masculino">
            <label for="radioMasc">Masculino</label>
        
            <input name="sexo" type="radio"  id="radioFem" value="Feminino">
            <label for="radioFem">Feminino</label>
        </p>
        <p>
            <label for="nascto" >Data de Nascimento:</label>
            <select name="ano" id="nascto">
            <option value="false"></option>
                <script>
                    for(ano=1900;ano<=2022;ano++){
                        document.write("<option value="+ano+">"+ano+"</option>");
                    } 
                </script>
            </select>
            <select name="mes" id="selectNascto">
                <option value="false"></option>
                    <script>
                        for(mes=1;mes<=12;mes++){
                            document.write("<option value="+mes+">"+mes+"</option>");
                        }
                    </script>
                </select>
                <select name="dia" id="selectNascto">
                    <option value="false"></option>
                        <script>
                            for(dia=1;dia<=31;dia++){
                                document.write("<option value="+dia+">"+dia+"</option>");
                            }
                        </script>
                    </select>
        </p>
        <p>
            <label for="txtCelular">Celular:</label>
            <input type="text" name="celular" id="" class="txtCelular" placeholder="(00)00000-0000">
        </p>
         <p>
            
        </p>
        <p>
            <label for="txtEmail">E-mail:</label>
            <input type="email" name="email" id="" placeholder="exemplos@exemplo.com.br" class="txtEmail">
        </p>
        <p>
            <label for="funcao" >Função:</label>
            <select type="text" name="funcao" id="funcao">
            <option  value="false"></option>     
                    <option value="Administrador">Administrador</option>");      
                    <option value="Atendente">Atendente</option>");
                    <option value="RH">RH</option>");
            </select>
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="text" name="senha" id="" class="senha" >
        </p>
        <p>
            <input type="submit" class="gravar" value="Gravar">
        </p>
    </form>
    <script>
         $('.txtTelefone').mask('(00)00000-0000');
        $('.txtCep').mask('00000-000');
        $('.txtCpf').mask('000.000.000-00');
        $('.celular').mask('(00)00000-0000');
    </script>
    <script src="..\src\pages.js"></script>
</body>
</html>