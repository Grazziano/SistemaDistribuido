<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imóveis Sweet Home</title>
</head>

<body>
    <?php
    include_once("../includes/conexao.php");

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $status = $_POST['status'];
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $arquivo = $_FILES['arquivo']['name'];

    //Pasta onde o arquivo vai ser salvo
    $_UP['pasta'] = 'imagens/';

    //Tamanho máximo do arquivo em Bytes
    $_UP['tamanho'] = 1024 * 1024 * 100; //5mb

    //Array com a extensões permitidas
    $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

    //Renomeiar
    $_UP['renomeia'] = false;

    //Array com os tipos de erros de upload do PHP
    $_UP['erros'][0] = 'Não houve erro';
    $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
    $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
    $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

    if ($_FILES['arquivo']['name'] == "") {

        if (isset($id)) {
            $query = mysqli_query($conexao, "UPDATE membros SET nome = '$nome', telefone = '$telefone', status = '$status' WHERE codigo = '$id' ");
            echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=membros.php'>
						<script type=\"text/javascript\">
							alert(\"Membro editado com Sucesso.\");
						</script>
					";
        } else {
            $query = mysqli_query($conexao, "INSERT INTO membros (nome, telefone, status) VALUES ('$nome', '$telefone', '$status')");
            echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=membros.php'>
						<script type=\"text/javascript\">
							alert(\"Membro cadastrado com Sucesso.\");
						</script>
					";
        }
    } else {

        //Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
        if ($_FILES['arquivo']['error'] != 0) {
            die("Não foi possivel fazer o upload, erro: <br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
            exit; //Para a execução do script
        }

        //Faz a verificação da extensao do arquivo
        $extensao = @strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=membros.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada, extensão inválida.\");
					</script>
				";
        }

        //Faz a verificação do tamanho do arquivo
        else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=membros.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
        }

        //O arquivo passou em todas as verificações, tenta move-lo para a pasta foto
        else {
            //Primeiro verifica se deve trocar o nome do arquivo
            if (@$UP['renomeia'] == true) {
                //Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
                $nome_final = time() . '.jpg';
            } else {
                //mantem o nome original do arquivo
                $nome_final = $_FILES['arquivo']['name'];
            }
            //Verificar se é possivel mover o arquivo para a pasta escolhida
            if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
                //Upload efetuado com sucesso, exibe a mensagem

                $fileOpen = fopen($_UP['pasta'] . $nome_final, "rb");
                $conteudo = fread($fileOpen, $_FILES['arquivo']['size']);
                $conteudo = addslashes($conteudo);
                fclose($fileOpen);

                if (isset($id)) {
                    // echo "Existe id";
                    $query = mysqli_query($conexao, "UPDATE membros SET nome = '$nome', telefone = '$telefone', status = '$status', imagem = '$nome_final' WHERE codigo = '$id' ");
                    echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=membros.php'>
						<script type=\"text/javascript\">
							alert(\"Membro editado com Sucesso.\");
						</script>
					";
                } else {
                    // echo "Não existe id";
                    $query = mysqli_query($conexao, "INSERT INTO membros (nome, telefone, status, imagem_arquivo) VALUES ('$nome', '$telefone', '$status', '$conteudo')");
                    echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=membros.php'>
						<script type=\"text/javascript\">
							alert(\"Membro cadastrado com Sucesso.\");
						</script>
					";
                }
            } else {
                //Upload não efetuado com sucesso, exibe a mensagem
                echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=membros.php'>
						<script type=\"text/javascript\">
							alert(\"Imagem não foi cadastrada com Sucesso.\");
						</script>
					";
            }
        }
    }
    ?>
</body>

</html>