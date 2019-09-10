<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto = $_POST['assunto'];

$dest = 'grazzianofagundes@gmail.com';

$dados = 'Nome: ' . $nome . ' - Email: ' . $email . ' - Telefone: ' . $telefone . ' - Mensagem: ' . $mensagem;

mail($dest, $assunto, $dados);

?>

<script>
    alert('Mensagem enviada com sucesso!!');
</script>

<meta http-equiv="refresh" content="0; url=contatos.php">