<!DOCTYPE HTML>
<html>
<head>
    <title>Tabela de Exemplo</title>
</head>
<body>
    <h1>Tabela de Exemplo</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        $pdo = new PDO('mysql:host=mysql;dbname=test', 'root', 'password');

        $pdo->exec("CREATE TABLE IF NOT EXISTS usuarios (id int AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255), email VARCHAR(255))");
        $pdo->exec("INSERT INTO usuarios (id, nome, email) VALUES (NULL, 'Teste', 'teste@email.com')");

        $stmt = $pdo->query('SELECT * FROM usuarios;');

        while ($row = $stmt->fetch()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['email']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
