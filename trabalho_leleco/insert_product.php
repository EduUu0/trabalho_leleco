<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['productName'];
    $descricao = $_POST['productDescription'];
    $categoria_id = $_POST['productCategory'];
    $preco_venda = $_POST['salePrice'];
    $preco_custo = $_POST['costPrice'];
    $quantidade_estoque = $_POST['stockQuantity'];
    $unidade_medida = $_POST['unitMeasure'];
    $fornecedor_id = $_POST['productSupplier'];

    $sql = "INSERT INTO produtos (nome, descricao, categoria_id, preco_venda, preco_custo, quantidade_estoque, unidade_medida, fornecedor_id)
            VALUES (:nome, :descricao, :categoria_id, :preco_venda, :preco_custo, :quantidade_estoque, :unidade_medida, :fornecedor_id)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':categoria_id', $categoria_id);
    $stmt->bindParam(':preco_venda', $preco_venda);
    $stmt->bindParam(':preco_custo', $preco_custo);
    $stmt->bindParam(':quantidade_estoque', $quantidade_estoque);
    $stmt->bindParam(':unidade_medida', $unidade_medida);
    $stmt->bindParam(':fornecedor_id', $fornecedor_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
}
?>
