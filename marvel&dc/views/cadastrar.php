<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <form id="formLogin" method="POST">
            <h1>Cadastre-se</h1>
            <input type="nome" name="nome" placeholder="Nome" /><br/><br/>
            
            <input type="email" name="email" placeholder="Email" /><br/><br/>

            <input type="password" name="senha" placeholder="******" /><br/><br/>

            <div class="btCadTam">
            <input type="submit" value="Cadastrar" />
            </div>
            
            <div class="btFazerLogin">
            <a href="<?php echo BASE_URL; ?>login">Fazer login</a>
            </div>
        </form>
    </body>
</html>

