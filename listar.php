<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para Adoção - Patinhas Felizes</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>🐾 Patinhas Felizes</h1>
        <p>Encontre seu novo melhor amigo</p>
    </header>

    <nav>
        <a href="index.php">Início</a>
        <a href="cadastrar.php">Cadastrar Animal</a>
        <a href="listar.php">Animais para Adoção</a>
    </nav>

    <div class="container">
        <h2>Animais Disponíveis para Adoção</h2>

        <div class="grid">
           <table>
  
        <tr>
            
            <th>Nome</th>
            <th>Espécie</th>
            <th>Idade</th>
            <th>Porte</th>
            <th>Descrição</th>
            
        </tr>
    

        <!-- AQUI ESCREVER O CÓDIGO EM PHP QUE BUSCA OS ANIMAIS NO BANCO E DADOS E EXIBE NAS LINHAS E COLUNAS DA TABELA -->
        <?php
        include 'dp.php';

        $sql = "SELECT * FROM animais ORDER BY nome DESC";

        $resultado = $conexao->query($sql);

        while($linha = $resultado->fech_assoc())
            {
                echo "<tr>";
                echo "<td>". $linha['nome'] . "</td>";
                echo "<td>". $linha['especie'] . "</td>";
                echo "<td>". $linha['idade'] . "</td>";
                echo "<td>". $linha['porte'] . "</td>";
                echo "<td>". $linha['descricao'] . "</td>";
                echo "</tr>";
            }

    </table>
             <p style="text-align: center;">
                <a href="index.php" class="btn-voltar">$larr; Voltar</a>
</p>

        </div>
    </div>

    <footer>
        <p>&copy; 2026 Patinhas Felizes - Programação Web 2 | Curso Técnico em Informática | IFBA Campus Ilhéus</p>
    </footer>

</body>
</html>