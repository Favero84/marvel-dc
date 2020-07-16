<h3>Editar</h3>

<form method="POST">
        
        <div class="form-group">
            <label for="hqnome">Nome:</label>
            <input type="text" name="hqnome" id="hqnome" value="<?php echo $info['hqnome']; ?>" class="form-control" />
        </div><br/>
        
        <div class="form-group">
            <label for="hqtitulo">Titulo:</label>
            <input type="text" name="hqtitulo" id="hqtitulo" value="<?php echo $info['hqtitulo']; ?>" class="form-control" />
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
        
        <input type="submit" value="Editar" class="btn btn-default" />
    </form>



