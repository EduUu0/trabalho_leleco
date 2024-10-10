<?php
$host = 'localhost'; // ou o endereço do seu servidor
$db_name = 'empresa';
$username = 'seu_usuario'; // substitua pelo seu usuário
$password = 'sua_senha'; // substitua pela sua senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}
?>
