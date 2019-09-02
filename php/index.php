<?php
include '../includes/navbar.php';
?>

<div class="bd-example">
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
            <li data-target="#carouselSite" data-slide-to="3"></li>
            <li data-target="#carouselSite" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/1.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/2.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/3.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/4.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/5.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-12 text-center my-5">
            <h1 class="display-3">
                <i class="fas fa-church"></i>
                Bem Vindos!!
            </h1>
            <p>Seja bem vindo a nosso site, aqui você terá informações sobre nossos imóveis disponiveis!</p>
        </div>
    </div>

    <div class="row justify-content-sm-center">
        <div class="col-sm-6 col-md-4 mb-5">
            <div class="card">
                <img src="../img/casa1.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Aluguéis</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Alugue uma casa!</h6>
                    <p class="card-text">Venha conhecer os imóveis disponíveis para aluguel!</p>
                    <a href="#" class="card-link">Saiba Mais</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 mb-5">
            <div class="card">
                <img src="../img/casa2.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Venda</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Adquira sua casa própria!</h6>
                    <p class="card-text">Veja as casas disponíveis e realize o sonho da casa própria!</p>
                    <a href="#" class="card-link">Saiba Mais</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 mb-5">
            <div class="card">
                <img src="../img/casa3.jpg" class="card-img-top">
                <div class="card-body">
                    <h4 class="card-title">Outras Informações</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Informações!</h6>
                    <p class="card-text">Fique por dentro das novidades!</p>
                    <a href="#" class="card-link">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <hr>
        </div>
        <div class="col-sm-4">
            <!-- <h3 class="display-5 mb-3">Sobre Nós</h3> -->
            <p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                    Sobre Nós
                </button>

                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Sobre Nós</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Projeto em desenvolvimento!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </p>
        </div>
        <div class="col-sm-6">
            <h3 class="display-5 mb-3">Links Principais</h3>
            <div class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action">Home</a>
                <a href="#" class="list-group-item list-group-item-action">Imóveis</a>
                <a href="#" class="list-group-item list-group-item-action">Informações</a>
                <a href="#" class="list-group-item list-group-item-action">Administração</a>
                <a href="contatos.php" class="list-group-item list-group-item-action">Contatos</a>
            </div>
        </div>

        <div class="col-sm-2">
            <h3 class="display-5 mb-3">Social</h3>
            <div class="btn-group-vertical" role="group">
                <a href="https://pt-br.facebook.com/" class="btn btn-light" target="_blank">
                    <h5 class="mb-2"><img src="../img/iconfinder_Facebook_1298738.png" alt="Facebook"> Facebook &nbsp</h5>
                </a>
                <a href="https://www.instagram.com/" class="btn btn-light" target="_blank">
                    <h5 class="mb-2"><img src="../img/iconfinder_Instagram_1298747.png" alt="Instagram"> Instagram &nbsp</h5>
                </a>
                <a href="https://twitter.com/" class="btn btn-light" target="_blank">
                    <h5 class="mb-2"><img src="../img/iconfinder_twitter_294655.png" alt="Twitter"> Twitter &nbsp</h5>
                </a>
                <a href="https://www.youtube.com/" class="btn btn-light" target="_blank">
                    <h5 class="mb-2"><img src="../img/iconfinder_youtube_317714.png" alt="YouTube"> YouTube &nbsp</h5>
                </a>
                <a href="https://web.whatsapp.com/" class="btn btn-light" target="_blank" alt="31 97527-5084" title="31 97527-5084">
                    <h5 class="mb-2"><img src="../img/iconfinder_Whatsapp_3721678.png" alt="Whatsapp"> Whatsapp &nbsp</h5>
                </a>

            </div>
        </div>

    </div>
</div>

<?php
include '../includes/footer.php';
