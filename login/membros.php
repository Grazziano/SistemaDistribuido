<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imóveis Sweet Home</title>
    <link rel="icon" type="imagem/png" href="img/iconfinder_house-05_2140006.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <a class="nav-link" href="#"><i class="fas fa-home"></i> Imóveis</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-info-circle"></i> Informações</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login/index.php"><i class="fas fa-user-cog"></i> Administração</a>
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

    <h2>Painel Administrativo</h2>


    <div id="box_usuarios">
        <br /><br />
        <a class="a2" href="membros.php?pg=cadastra"><i class="far fa-address-card"></i> Cadastrar Membros</a>
        <h1>Membros</h1>

        <table width="900">
            <tr>
                <td><strong>Código:</strong></td>
                <td><strong>Nome:</strong></td>
                <td><strong>Telefone:</strong></td>
                <td><strong>Status:</strong></td>
                <td><strong>Imagem:</strong></td>
                <td></td>
            </tr>

            <tr>
                <td>
                    <h3></h3>
                </td>
                <td>
                    <h3></h3>
                </td>
                <td>
                    <h3></h3>
                </td>

                <td>
                    <h3></h3>
                </td>
                <td>
                    <h3></h3>
                </td>
                <td></td>
                <td>
                    <a class="a" href="usuarios.php?pg=todos&func=deleta&id="><i class="fas fa-trash-alt"></i>&nbsp;</a>

                    <a class="a" href="usuarios.php?pg=todos&func=ativa&id="><i class="fas fa-check"></i>&nbsp;</a>

                    <a class="a" href="usuarios.php?pg=todos&func=inativa&id="><i class="fas fa-user-minus"></i>&nbsp;</a>

                    <a class="a" href="usuarios.php?pg=todos&func=edita&id="><i class="fas fa-edit"></i>&nbsp;</a>
                </td>
            </tr>

        </table>

        <?php
        include '../includes/footer.php';
