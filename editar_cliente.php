<?php
// Estabelecer conexão com o banco de dados
require_once 'conexao.php';

// Verificar se foi fornecido o CPF do cliente a ser editado
if (isset($_GET['cpf'])) {
    // Receber o CPF do cliente a ser editado
    $cpf = $_GET['cpf'];

    // Consultar o cliente pelo CPF
    $query = "SELECT * FROM clientes WHERE cpf = '$cpf'";
    $resultado = mysqli_query($conexao, $query);

    // Verificar se o cliente foi encontrado
    if (mysqli_num_rows($resultado) > 0) {
        $cliente = mysqli_fetch_assoc($resultado);
    } else {
        echo '<h3>Cliente não encontrado.</h3>';
        exit;
    }
} else {
    echo '<h3>CPF do cliente não fornecido.</h3>';
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cadastro de Cliente</title>
    <link rel="icon" href="imagens/logo3.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="banner">
    <!-- Código HTML para a barra de navegação e o formulário de edição -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <!-- Barra de navegação -->
        <!-- ... -->
    </nav>

    <div class="container formularios">
        <br>
        <h2 align="center">Editar Cadastro de Cliente</h2>
        <br>
        <!-- Formulário de edição -->
        <form method="POST" action="editar_cliente.php">
            <div class="row justify-content-center">   
                <div class="form-group col-md-3">
                    <label>Nome Completo:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($cliente['nome']); ?>">
                </div>
                <div class="form-group col-md-2">
                    <label>CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo htmlspecialchars($cliente['cpf']); ?>" readonly>
                </div>
                <div class="form-group col-md-2">
                    <label>RG:</label>
                    <input type="text" class="form-control" id="rg" name="rg" value="<?php echo htmlspecialchars($cliente['rg']); ?>">
                </div>
                <div class="form-group col-md-2">
                    <label>Data de Nascimento:</label>
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?php echo htmlspecialchars($cliente['data_nascimento']); ?>">
                </div>
            </div>
            <div class="row justify-content-center">    
                <div class="form-group col-md-2">
                    <label>Pesquise o CEP:</label>
                    <input name="cep" type="text" id="cep" value="<?php echo htmlspecialchars($cliente['cep']); ?>" class="form-control" onblur="pesquisacep(this.value);" placeholder="CEP _ _ _ _ _-_ _ _">
                </div>
                <div class="form-group col-md-5">
                    <label>Rua:</label>
                    <input name="rua" type="text" id="rua" class="form-control" value="<?php echo htmlspecialchars($cliente['rua']); ?>">
                </div>
                <div class="form-group col-md-2">
                    <label>IBGE:</label>
                    <input name="ibge" type="text" id="ibge" class="form-control" value="<?php echo htmlspecialchars($cliente['ibge']); ?>">
                </div> 
            </div>
            <div class="row justify-content-center">   
                <div class="form-group col-md-4">
                    <label>Bairro:</label>
                    <input name="bairro" type="text" id="bairro" class="form-control" value="<?php echo htmlspecialchars($cliente['bairro']); ?>">
                </div>
                <div class="form-group col-md-4">
                    <label>Cidade:</label>
                    <input name="cidade" type="text" id="cidade" class="form-control" value="<?php echo htmlspecialchars($cliente['cidade']); ?>">
                </div>
                <div class="form-group col-md-1">
                    <label>Estado:</label>
                    <input name="uf" type="text" id="uf" class="form-control" value="<?php echo htmlspecialchars($cliente['uf']); ?>">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-check col-md-2">
                    <input class="form-check-input" type="checkbox" id="ativo" name="ativo" value="1" <?php if ($cliente['ativo'] == 1) echo 'checked'; ?>>
                    <label class="form-check-label" for="ativo">Ativado</label>
                </div>
                <div class="form-check col-md-2">
                    <input class="form-check-input" type="checkbox" id="desativado" name="ativo" value="0" <?php if ($cliente['ativo'] == 0) echo 'checked'; ?>>
                    <label class="form-check-label" for="desativado">Desativado</label>
                </div>
            </div>
            
            <div class="row justify-content-center">    
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-success tamanhoBotao">Salvar</button>
                    <a href="consultar_cliente.php"><button type="button" class="btn btn-secondary tamanhoBotao">Voltar</button></a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="api.js"></script>
</body>
</html>
