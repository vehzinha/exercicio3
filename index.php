<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Relatório de Clientes</title>
    <link rel="stylesheet" href="style.css"> <!-- Inclusão do arquivo CSS -->
</head>
<body>

    <h1>Resultado Relatório de Clientes</h1>
    
    <!-- Tabela HTML para exibir os dados do array -->
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Array associativo com 5 clientes (código e nome)
                $clientes = array(1 => "João Silva", 2 => "Maria Oliveira", 3 => "Carlos Souza", 4 => "Ana Costa", 5 => "Pedro Almeida"
);
            // Loop para exibir os dados do array na tabela
            foreach ($clientes as $codigo => $nome) {
                echo "<tr>";
                echo "<td>$codigo</td>";
                echo "<td>$nome</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
