<!--
    Crie um programa em php que leia 3 números. Esse os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados.

    Extra: Pesquise como mostrar uma imagem do triângulo correspondente.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body style="background-color: #E4FAE4; margin: 3%;">
    <a href="index.php">Voltar</a>
    <br/>

    <h1> Exercício 5 </h1>
    <p>
        Crie um programa em php que leia 3 números. Esse os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados. 
    </p>

    <hr/>

    <form method="post">
        <label for="txtLado1">Digite o primeiro lado:</label><br/>
        <input type="number" name="txtLado1" id="txtLado1" placeholder="Ex: 9"/><br/>

        <label for="txtLado2">Digite o segundo lado:</label><br/>
        <input type="number" name="txtLado2" id="txtLado2" placeholder="Ex: 9"/><br/>

        <label for="txtLado3">Digite o terceiro lado:</label><br/>
        <input type="number" name="txtLado3" id="txtLado3" placeholder="Ex: 9"/><br/>

        <input type="submit" name="btnCalcular" value="Calcular"/><br>
    </form>

    <?php
        if(isset($_POST['btnCalcular'])){
            $lado1 = $_POST['txtLado1'];
            $lado2 = $_POST['txtLado2'];
            $lado3 = $_POST['txtLado3'];

            if($lado1==$lado2 && $lado1==$lado3){
                $tipo = "Equilátero";
                $imagem = "img/equilatero.webp";
            }
            else if($lado1==$lado2 || $lado1==$lado3 || $lado2==$lado3){
                $tipo = "Isósceles";
                $imagem = "img/isosceles.webp";
            }
            else{
                $tipo = "Escaleno";
                $imagem = "img/escaleno.webp";
            }

            echo "Esse é um triângulo $tipo <br/>";
            echo "<img src='$imagem'>";
        }
    ?>
</body>
</html>