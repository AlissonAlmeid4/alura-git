

<?php
    @session_start();
    if(isset($_SESSION['msg'])){
        echo"<p class=alert> $_SESSION[msg]</p>";
        unset($_SESSION['msg']);
    }
?>

<div>
        <img src="..\Imgs\x.png" class="x" onclick="login()">
     </div>

    <div class="container">
        <div class="input">
            <div class="logoLogin">
                <img src="..\Imgs\LogoG&C.png">
            </div>
        <form action="login.act.php" method="post">
        <h4>LOGIN</h4>
            <p>
            <input type="text" name="email" id="Login" placeholder="Email">
            <p>
            </p>
             <input type="password" name="senha" id="Senha" placeholder="Senha">
            </p>
            <!-- <button type="button" class="btnesqueci" onclick="esquecisenha()">Esqueci minha senha</button> -->
            <p>
            <input type="submit" class="btentrar" value="Entrar">

            <!-- <button type="button" class="btentrar" >Entrar</a></button> -->
            <!-- <button type="button" class="btncadastrar" onclick="cadastrar()">Cadastre-se</button> -->
            </p>

        </form>
    </div>
</div>