<html>
    <head>
        <meta charset="utf-8" />
        <title>Programa Junior</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link href="<?php echo BASE_URL; ?>assets/css/style.css" rel="stylesheet" />
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    </head>
    
    <body>    
        
    <div class="modal_estrut">
    <div class="modal">
        <h3>Adicionar</h3>

<form method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" name="arquivo" />
        </div><br/>
        
        <div class="form-group">
            <label for="hqnome">Nome:</label>
            <input type="text" name="hqnome" id="hqnome" class="form-control" />
        </div><br/>
        
        <div class="form-group">
            <label for="hqtitulo">Titulo:</label>
            <input type="text" name="hqtitulo" id="hqtitulo" class="form-control" />
        </div><br/>
        
        <div class="form-group">
            <label for="num_volume">Volume:</label>
            <select name="num_volume" id="num_volume" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="Outro">Outro</option>
            </select>
        </div><br/>
        
        <div class="form-group">
            <label for="modelo_capa">Capa:</label>
            <select name="modelo_capa" id="modelo_capa" class="form-control">
                <option value="Capa Comum">Capa Comum</option>
                <option value="Capa Dura">Capa Dura</option>
                <option value="Capa Flexivel">Capa Flexivel</option>
            </select>
        </div><br/>
        
        <div class="form-group">
            <label for="situacao">Situaçao:</label>
            <select name="situacao" id="situacao" class="form-control">
                <option value="Lido">Lido</option>
                <option value="Nao Lido">Nao Lido</option>
            </select>
        </div><br/>
        
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Ruim">Ruim</option>
                <option value="Bom">Bom</option>
                <option value="Ótimo">Ótimo</option>
            </select>
        </div><br/>
        
        <div class="form-group">
            <label for="marca">Marca:</label>
            <select name="marca" id="marca" class="form-control">
                <option value="Marvel">Marvel</option>
                <option value="DC">DC</option>
                <option value="Outro">Outro</option>
            </select>
        </div><br/>
        
        <div class="form-group">
            <label for="nota">Nota:</label>
            <select name="nota" id="nota" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div><br/>
        
        <input type="submit" value="Adicionar" class="btn btn-default" />
    </form>
    </div>
    </div>
    </body>
</html>
