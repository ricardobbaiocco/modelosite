<?php
// Estabelecer conexão com o banco de dados
require_once 'conexao.php';

// Inicializar a variável de mensagem como vazia
$mensagem = '';

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data_nascimento = $_POST['data_nascimento'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $ibge = $_POST['ibge'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

    // Preparar a consulta SQL para inserir os dados no banco de dados
    $query = "INSERT INTO clientes (nome, cpf, rg, data_nascimento, cep, rua, ibge, bairro, cidade, uf, ativo) VALUES ('$nome', '$cpf', '$rg', '$data_nascimento', '$cep', '$rua', '$ibge', '$bairro', '$cidade', '$uf', 1)";

    // Executar a consulta SQL
    if ($conexao->query($query) === TRUE) {
        $mensagem = 'Cliente cadastrado com sucesso!';
    } else {
        $mensagem = 'Erro ao cadastrar cliente: ' . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Código HTML e outros cabeçalhos aqui -->
</head>
<body class="banner">
    <!-- Restante do código HTML aqui -->

    <!-- Exibir mensagem em forma de alerta -->
    <script>
        var mensagem = "<?php echo $mensagem; ?>";
        alert(mensagem);
        // Redirecionar para a página de consulta após clicar em "OK" no alerta
        if (mensagem.includes('sucesso')) {
            window.location.href = "consulta_cliente.html";
        }
    </script>
</body>
</html>
