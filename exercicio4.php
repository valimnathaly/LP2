<!--
    Crie um programa em php que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível.

    Fórmula: Consumo médio = Km / litros
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body style="background-color: #E4FAE4; margin: 3%;">

    <a href="index.php">Voltar</a>
    <br/>

    <h1> Exercício 4 </h1>
    <p>
        Crie um programa em php que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível.
    </p>

    <hr/>

    <form method="post">
        <label for="txtDistancia">Digite a distância percorrida (em km):</label><br/>
        <input type="number" step="any" name="txtDistancia" id="txtDistancia" placeholder="Ex: 9.99"/><br/>

        <label for="txtCombustivel">Digite o combustível gasto (em litros):</label><br/>
        <input type="number" step="any" name="txtCombustivel" id="txtCombustivel" placeholder="Ex: 9.99"/><br/>

        <input type="submit" name="btnCalcular" value="Calcular"/><br>
    </form>

    <?php
        if(isset($_POST['btnCalcular'])){
            $distancia = $_POST['txtDistancia'];
            $combustivel = $_POST['txtCombustivel'];

            $consumo = $distancia/$combustivel; //calcula o consumo de combustivel

            echo "O veículo faz $consumo km por litro";
        }
    ?>
</body>
</html>