<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Programa Junior</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" />
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </head>
    <body>
        <header>
            
        </header>
        <section>
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </section>
        <br/>
        <div class="btSair">
            <a href="<?php echo BASE_URL; ?>login" class="btn btn-default">SAIR DO SISTEMA</a>
        </div>
        <br/>
        <footer>
            
        </footer>
    </body>
</html>