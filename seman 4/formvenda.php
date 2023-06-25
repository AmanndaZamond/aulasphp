<!DOCTYPE html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Vendas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="recebeformvendas.php" method="post">
        Produto <input type="text" name="produto"><br>
        Quantidade <input type="number" name="quantidade"><br>
        Preço <input type="text" name="preco"><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
