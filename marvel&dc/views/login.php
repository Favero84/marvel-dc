<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <form id="formLogin" method="POST">
            <h2>Login</h2>
            
            <?php if(isset($error) && !empty($error)): ?>
                <div class="warning"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <input type="email" name="email" placeholder="Email" /><br/><br/>

            <input type="password" name="senha" placeholder="******" /><br/><br/>

            <input type="submit" value="Entrar" />
            
            <div class="btCadastrar">
                <a href="<?php echo BASE_URL; ?>cadastro/cadastrar">Cadastre-se</a>
            </div>
        </form>
    </body>
</html>

