<?php
include 'includes/navbar.php';
include 'includes/conexao.php';
?>
<link rel="stylesheet" href="login/css/usuario.css">

<div id="box_usuarios">
    <br /><br />
    <h1>Lista de Clientes</h1>

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
            </tr>

            <?php
                while ($res_1 = mysqli_fetch_array($result)) {
                    $id = $res_1['codigo'];
                    $nome = $res_1['nome'];
                    $telefone = $res_1['telefone'];
                    $status = $res_1['status'];
                    $imagem = $res_1['imagem'];

                    ?>

                <tr>

                    <td>
                        <h3><?php echo $id; ?></h3>
                    </td>
                    <td>
                        <h3><?php echo $nome; ?></h3>
                    </td>
                    <td>
                        <h3><?php echo $telefone; ?></h3>
                    </td>
                    <td>
                        <h3><?php echo $status; ?></h3>
                    </td>

                    <td><img src="login/imagens/<?php echo $imagem; ?>" width="50"></td>
                </tr>

            <?php } ?>

        </table>
    <?php } ?>
</div>

</body>

</html>