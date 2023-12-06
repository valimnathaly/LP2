<!--
    Crie um programa em php que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body style="background-color: #E4FAE4; margin: 3%;">
    
    <a href="index.php">Voltar</a>
    <br/>

    <h1> Exercício 3 </h1>
    <p>
        Crie um programa em php que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.
    </p>

    <hr/>

    <form method="post">
        <label for="txtPreco">Digite o valor do produto:</label><br/>
        <input type="number" step="any" name="txtPreco" id="txtPreco" placeholder="Ex: 9.99"/><br/>

        <input type="submit" name="btnCalcular" value="Calcular"/><br>
    </form>

    <?php
        if(isset($_POST['btnCalcular'])){
            $preco = $_POST['txtPreco'];

            //calcula 16%

            $precoJuros = $preco + ($preco*0.16);
            $parcela = $precoJuros/10;

            echo "O preço original era: R$$preco <br/>";
            echo "O preço com juros é: R$$precoJuros <br/>";
            echo "O valor da parcela é: R$$parcela <br/>";
        }
    ?>
</body>
</html>