<?php
include 'includes/conexao.php';
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/framework.css">
</head>

<body>
    <section>
        <article class="bgcolor-white">
            <form method="post" action="">
                <h1 class="font-text-hard-two text-center color-dark"> Login </h1>
                <label for="email" class="font-text-light-extra text-left color-dark">Digite seu email</label><br>
                <input class="font-text-light-extra text-left color-dark bgcolor-white-dark" type="email" name="email" placeholder="E-mail" require>
                <br><br>
                <label for="senha" class="font-text-light-extra text-left color-dark">Digite sua senha</label><br>
                <input class="font-text-light-extra text-left color-dark bgcolor-white-dark" type="password" name="senha" placeholder="Senha" require>
                <br><br>
                <button class="btn btn-success" name="entrar" value="entrar">Entrar</button>
            </form>
            <?php
            if (isset($_POST['entrar'])) {
                $email = filter_input(INPUT_POST, 'email');
                $senha = strip_tags(filter_input(INPUT_POST, 'senha'));

                if (empty($email) || empty($senha)) {
                    echo '<p class="alert-error color-white">Preencha todos os campos!</p>';
                } else {
                    $consulta = $pdo->prepare("SELECT email, senha, nivel, status, nome FROM usuarios WHERE status = 1 AND email = :email AND senha = :pass LIMIT 1");
                    $consulta->bindValue(':email', $email);
                    $consulta->bindValue(':pass', $senha);
                    $consulta->execute();
                    echo $query->consulta;

                    foreach ($consulta as $mostra) {
                        $nivel = strip_tags($mostra['nivel']);
                        $nome = strip_tags($mostra['nome']);
                    }

                    if ($linhas == 1) {
                        $_SESSION['nivel'] = $nivel;
                        $_SESSION['nome'] = $nome;
                        $_SESSION['logado'] = 1;
                        echo '<script>window.location="admin/dashboard.php"</script>';
                    } else {
                        echo '<p class="alert-error color-white">Dados informados não conferem!</p>';
                        session_destroy();
                    }
                }
            }
            ?>
        </article>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>