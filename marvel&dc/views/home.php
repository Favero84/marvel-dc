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
<div class="img">
    <img src="assets/images/Main.jpeg" />
</div>
<div class="tabelaCrud">
<h2><strong>CADASTRO HQs</strong></h2>
</div>
<hr/>
<a href="<?php echo BASE_URL; //o nome do controller é crud ->?>crud/adicionar/" id="btAdd" class="btn btn-success">ADICIONAR</a>
<hr/><br/>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>FOTO</th>
        <th>NOME HQ</th>
        <th>TÍTULO</th>
        <th>VOLUME</th>
        <th>CAPA</th>
        <th>SITUAÇAO</th>
        <th>ESTADO</th>
        <th>MARCA</th>
        <th>NOTA</th>
        <th>ACOES</th>
    </tr>
<?php foreach ($lista as $item): ?>
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['foto']; ?></td>
        <td><?php echo $item['hqnome']; ?></td>
        <td><?php echo $item['hqtitulo']; ?></td>
        <td><?php echo $item['num_volume']; ?></td>
        <td><?php echo $item['modelo_capa']; ?></td>
        <td><?php echo $item['situacao']; ?></td>
        <td><?php echo $item['estado']; ?></td>
        <td><?php echo $item['marca']; ?></td>
        <td><?php echo $item['nota']; ?></td>
        </div>
        <td>
            <div class="bt_editar">
            <a href="<?php echo BASE_URL; ?>crud/editar/<?php echo $item['id']; ?>" class="btn btn-warning">EDITAR</a>
            </div>
            <a href="<?php echo BASE_URL; ?>crud/deletar/<?php echo $item['id']; ?>" class="btn btn-danger">EXCLUIR</a>
        </td>
    </tr>
<?php endforeach; ?>
</table>
    </body>
</html>
