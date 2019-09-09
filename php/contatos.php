<?php
include '../includes/navbar.php';
?>

<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h1 class="display-4">Entre em contato conosco!</h1>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form action="enviar.php" method="post">
                <div class="form-row">

                    <div class="form-group col-sm-6">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                    </div>

                    <div class="form-group col-sm-6">
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                    </div>

                    <div class="form-group col-sm-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                    </div>

                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto">
                    </div>

                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" id="mensagem" name="mensagem" placeholder="Mensagem">
                    </div>

                </div>

                <div class="form-row text-center">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success btn-lg mr-2"><img src="../img/iconfinder_mail_1055030.png" alt=""> Enviar</button>
                        <a class="btn btn-secondary btn-lg ml-2" tabindex="0" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="Ajuda com o Formulário" data-content="Preencha o formulário para receber em seu email...">
                            <img src="../img/iconfinder_sign-info_299086.png" alt=""> Ajuda</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<?php
include '../includes/footer.php';
