<?php
// Incluir o arquivo de conexão com o banco de dados
require_once 'conexao.php';

// Recebendo o CPF a ser consultado
$cpf = $_GET['cpf'];

// Consultando o cliente
$query = "SELECT * FROM clientes WHERE cpf = '$cpf'";
$resultado = mysqli_query($conexao, $query);

if (!$resultado) {
    echo "Erro na consulta: " . mysqli_error($conexao);
    exit;
}

if (mysqli_num_rows($resultado) > 0) {
    // Cliente encontrado
    $cliente = mysqli_fetch_assoc($resultado);
    ?>

    <h2>Informações do Cliente</h2>
    <table class="table table-striped">
        <tr>
            <th>Nome Completo</th>
            <td><?php echo $cliente['nome']; ?></td>
        </tr>
        <tr>
            <th>CPF</th>
            <td><?php echo $cliente['cpf']; ?></td>
        </tr>
        <tr>
            <th>Data de Nascimento</th>
            <td><?php echo date('d/m/Y', strtotime($cliente['data_nascimento'])); ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?php echo ($cliente['ativo'] ? 'Ativo' : 'Inativo'); ?></td>
        </tr>
    </table>

    <?php
    // Botão para editar cadastro
    echo '<a href="editar_cliente.php?cpf='.$cliente['cpf'].'" class="btn btn-outline-warning">Editar Cadastro</a>';
} else {
    echo '<h2>Cliente não encontrado.</h2>';
    // Botão para novo cadastro
    echo '<a href="cadastrar_cliente.html" class="btn btn-success">Cadastrar Cliente</a>';
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>
