<?php
include 'db.php';

$result = $conn->query("SELECT * FROM tasks");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.CSS">
    <title>Projeto docker</title>
</head>
<body>
    <h2>Lista de Tarefas</h2>
    <ul>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <li><?= $row['task_name']; ?> - <a href="edit.php?id=<?= $row['id']; ?>">Editar</a> | <a href="delete.php?id=<?= $row['id']; ?>">Excluir</a></li>
        <?php endwhile; ?>
    </ul>
    <a href="add.php">Adicionar Tarefa</a>
    <footer>
    Amanda
    </footer>
    <footer>
    Diego
    </footer>
    <footer>
    Gustavo
    </footer>
    <footer>
    Jacqueline
    </footer>
    <footer>
    Nathalia
    </footer>
    <footer>
    Rafael
    </footer>
</body>
</html>
