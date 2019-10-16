<?php
include '../includes/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imóveis Sweet Home</title>
    <link rel="icon" type="imagem/png" href="img/iconfinder_house-05_2140006.png">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/usuario.css">
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-15">
        <div class="container">
            <a href="../index.php" class="navbar-brand h1 mb-0"><i class="fas fa-home"></i> Imóveis Sweet Home</a>
            <button class="navbar-toggler" type="bottom" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php"><i class="fas fa-map-signs"></i> Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="imoveis.php"><i class="fas fa-home"></i> Imóveis</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../clientes.php"><i class="fas fa-users"></i> Clientes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> Informações</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-user-cog"></i> Administração</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../contatos.php"><i class="fas fa-paper-plane"></i> Contatos</a>
                    </li>

                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop"><i class="fab fa-connectdevelop"></i> Redes Sociais</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" target="_blank" href="https://pt-br.facebook.com/">
                                <i class="fab fa-facebook-square"></i> Facebook</a>
                            <a class="dropdown-item" target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram"></i> Instagram</a>
                            <a class="dropdown-item" target="_blank" href="https://twitter.com/">
                                <i class="fab fa-twitter"></i> Twitter</a>
                            <a class="dropdown-item" target="_blank" href="https://www.youtube.com/">
                                <i class="fab fa-youtube"></i> YouTube</a>
                            <a class="dropdown-item" target="_blank" href="https://web.whatsapp.com/">
                                <i class="fab fa-whatsapp"></i> Whatsapp</a>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <div id="box_usuarios">
        <br /><br />
        <a class="a2" href="membros.php?pg=cadastra"><i class="far fa-address-card"></i> Cadastrar</a>
        <h1>Clientes</h1>

        <?php
        $sql = "SELECT * FROM membros WHERE nome != ''";
        $result = mysqli_query($conexao, $sql);
        if (mysqli_num_rows($result) == '') {
            echo "<h2>Não existem membros cadastrados!!</h2>";
        } else {
            ?>

            <table width="900" border="0">
                <tr>
                    <td><strong>Código:</strong></td>
                    <td><strong>Nome:</strong></td>
                    <td><strong>Telefone:</strong></td>
                    <td><strong>Status:</strong></td>
                    <td><strong>Imagem:</strong></td>
                    <td></td>
                </tr>

                <?php
                    while ($res_1 = mysqli_fetch_array($result)) {
                        $id = $res_1['codigo'];
                        $nome = $res_1['nome'];
                        $telefone = $res_1['telefone'];
                        $status = $res_1['status'];
                        $imagem = $res_1['imagem'];
                        $binary = $res_1['imagem_arquivo'];
                        ?>

                    <tr>

                        <td>
                            <h3><?php echo $id; ?></h3>
                        </td>
                        <td>
                            <h3><?php echo utf8_encode($nome); ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $telefone; ?></h3>
                        </td>
                        <td>
                            <h3><?php echo $status; ?></h3>
                        </td>

                        <?php if ($imagem) { ?>
                            <td><img src="imagens/<?php echo $imagem; ?>" width="50"></td>
                        <?php } else {  ?>
                            <td><img src="data:image/jpeg;base64,<?= base64_encode($binary) ?>" width="50"></td>
                        <?php } ?>


                        <td></td>
                        <td>
                            <a type="button" class="a btn btn-danger btn-sm" href="membros.php?pg=todos&func=deleta&id=<?php echo $id; ?>"><i class="fas fa-trash-alt"></i></a>

                            <?php if ($status == 'Inativo') { ?>
                                <a type="button" class="a btn btn-success btn-sm" href="membros.php?pg=todos&func=ativa&id=<?php echo $id; ?>"><i class="fas fa-check-circle"></i></a>
                            <?php } ?>

                            <?php if ($status == 'Ativo') { ?>
                                <a type="button" class="a btn btn-info btn-sm" href="membros.php?pg=todos&func=inativa&id=<?php echo $id; ?>"><i class="fas fa-times-circle"></i></a>
                            <?php } ?>

                            <a type="button" class="a btn btn-warning btn-sm" href="membros.php?pg=todos&func=edita&id=<?php echo $id; ?>"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>

                <?php } ?>

            </table>
        <?php } ?>

        <br>
        <br>

        <!-- Cadastrar clientes -->
        <?php if (@$_GET['pg'] == 'cadastra') { ?>
            <div id="cadastra_usuarios">
                <h1>Cadastrar novo cliente</h1>

                <form name="form1" method="post" action="upload.php" enctype="multipart/form-data">
                    <table width="900" border="0">
                        <tr>
                            <td>Nome:</td>
                            <td>Telefone:</td>
                        </tr>
                        <tr>

                            <td>
                                <input type="text" name="nome" id="textfield1" required></td>
                            <td>
                                <input type="text" name="telefone" id="textfield2" required></td>

                        </tr>
                        <tr>
                            <td>Status</td>
                        </tr>
                        <tr>
                            <td><label for="select"></label>
                                <select name="status" size="1" id="select">
                                    <option value=""></option>
                                    <option value="Ativo">Ativo</option>
                                    <option value="Inativo">Inativo</option>
                                </select></td>

                        </tr>

                        <tr>
                            <td>Imagem</td>
                        </tr>
                        <tr>
                            <td>
                                <input type='file' name="arquivo" />
                            </td>

                        </tr>

                        <td><input class="input" type="submit" name="button" id="button" value="Cadastrar"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        </tr>
                    </table>
                </form>
                <br />
            </div>
    </div>



<?php } ?>

<!-- Editar clientes -->
<?php if (@$_GET['func'] == 'edita') { ?>
    <div id="cadastra_usuarios">
        <h1>Editar cliente</h1>
        <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM membros WHERE codigo = '$id'";
            // echo $sql;
            $consulta = mysqli_query($conexao, $sql);

            while ($res_1 = mysqli_fetch_array($consulta)) {


                ?>
            <form name="form1" method="post" action="upload.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <table width="900" border="0">
                    <tr>
                        <td>Nome:</td>
                        <td>Telefone:</td>
                    </tr>
                    <tr>

                        <td>
                            <input type="text" name="nome" value="<?php echo $res_1['nome']; ?>" id="textfield1" required></td>
                        <td>
                            <input type="text" name="telefone" value="<?php echo $res_1['telefone']; ?>" id="textfield2" required></td>

                    </tr>
                    <tr>
                        <td>Status</td>
                    </tr>
                    <tr>
                        <td><label for="select"></label>
                            <select name="status" size="1" id="select">
                                <option value="<?php echo $res_1['status']; ?>"><?php echo $res_1['status']; ?></option>
                                <option value=""></option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>

                            </select></td>

                    </tr>

                    <tr>
                        <td>Imagem</td>
                    </tr>
                    <tr>
                        <td>
                            <input type='file' value="<?php echo $res_1['imagem']; ?>" name="arquivo" />
                        </td>
                        <td>
                            <img src="imagens/<?php echo $res_1['imagem']; ?>" width="100" alt="<?php echo $res_1['nome']; ?>">
                        </td>

                    </tr>

                    <td><input class="input" type="submit" name="button" id="button" value="Editar"></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                </table>
            </form>
            <br />
    </div>
    </div>
<?php
    }
}
?>
<!-- Deletar Clientes -->
<?php if (@$_GET['func'] == 'deleta') {

    $id = $_GET['id'];

    $sql = "DELETE FROM membros WHERE codigo = '$id'";
    mysqli_query($conexao, $sql);
    echo "<script language='javascript'>window.location='membros.php';</script>";
} ?>



<!-- Ativar cliente -->
<?php if (@$_GET['func'] == 'ativa') {
    $id = $_GET['id'];
    $sql = "UPDATE membros SET status = 'Ativo' WHERE codigo = '$id'";
    mysqli_query($conexao, $sql);

    echo "<script language='javascript'>window.location='membros.php';</script>";
} ?>

<!-- Inativar Cliente -->
<?php if (@$_GET['func'] == 'inativa') {
    $id = $_GET['id'];
    $sql = "UPDATE membros SET status = 'Inativo' WHERE codigo = '$id'";
    mysqli_query($conexao, $sql);

    echo "<script language='javascript'>window.location='membros.php';</script>";
} ?>

</body>

</html>