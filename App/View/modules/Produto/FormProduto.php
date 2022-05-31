<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Produtos</legend>

        <form method="post" action="/produto/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="data_fabricacao">Data de Fabricacao:</label>
            <input id="data_fabricacao" name="data_fabricacao" value="<?= $model->data_fabricacao ?>" type="date" />

            <label for="data_validade">Data de Validade:</label>
            <input id="data_validade" value="<?= $model->data_validade ?>" name="data_validade" type="date" />

            <label for="codigo_de_barras">Codigo de Barras:</label>
            <input id="codigo_de_barras" value="<?= $model->codigo_de_barras ?>" name="codigo_de_barras" type="number" />
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>