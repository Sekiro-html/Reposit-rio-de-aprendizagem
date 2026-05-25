<?php 
    $Carrinho_Produto_ID = [1, 2];
    $Nome_Produto_Carrinho = ["Iphone 14 Pro Max Preto", "Fogão 4 bocas usado"];
    $Produto_Carrinho_Preco = [3839.30, 1000.99];
    $Quant_Produto_Carrinho = [2, 1];
    $Contagem = count($Carrinho_Produto_ID);
    for ($i = 0; $i < $Contagem; $i++){
        $Preco_Total_Carrinho = ($Produto_Carrinho_Preco[$i] * $Quant_Produto_Carrinho[$i]);
        $Preco_Frete = 50.00;
        if ($Preco_Total_Carrinho >= 3000) {
            $Preco_Total_Carrinho = $Preco_Total_Carrinho + $Preco_Frete;
        } else {
            $Preco_Frete = 00;
        }
        echo "Você vai Comprar {$Quant_Produto_Carrinho[$i]} {$Nome_Produto_Carrinho[$i]} vai ficar R$ {$Preco_Total_Carrinho} <br>";
    }
    echo "<hr>";
?>

<?php 
    $Array_Empressa = [
        ["nome" => "Jonas Oliveira ",                "Cargo" => "RH ",           "Salario" => 2000.50],
        ["nome" => "Eri West Konrad ",               "Cargo" => "CEO ",          "Salario" => 23569.99],
        ["nome" => "Arthur Maidana Teixeira ",       "Cargo" => "Garoto da TI ", "Salario" => 2356.00]
    ];
    
    foreach ($Array_Empressa as $funcionario) {
        echo $funcionario["nome"];
        echo $funcionario["Cargo"];
        echo $funcionario["Salario"], "<br>";  
    }
?>

