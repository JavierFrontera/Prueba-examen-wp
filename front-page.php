<?php
    get_header();
?>


<div class="jumbotron jumbo-front">
    <h1>Bienvenidos a nuestra web</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="card" >
            <img src="<?=get_theme_file_uri("inc/img/f3.jpg")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Noticias</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="<?=site_url("blog")?>" class="btn btn-primary">Noticias</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card" >
            <img src="<?=get_theme_file_uri("inc/img/f6.jpg")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Visita nuestra botiga</h5>
                <p class="card-text">Some quick example text to build on thde car title and make up the bulk of the card's content.</p>
                <a href="<?=site_url("Texanes")?>" class="btn btn-primary">Botiga</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card">
            <img src="<?=get_theme_file_uri("inc/img/f4.jpg")?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Visita nuestras ofertas</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="<?=site_url("samarretes")?>" class="btn btn-primary">Ofertes</a>
                </div>
            </div>
        </div>

</div>

<?php
    get_footer( );
?>