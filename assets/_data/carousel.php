<?php $counter = 1; ?>
<!-- Carousel -->
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="5000" id="bs-carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php foreach ($slides as $slide){?>
            <style>
                .fade-carousel .slides .slide-<?php echo $counter;?> {
                  background-image: url(<?php echo $slide->img;?>);
                }
            </style>
            <div class="item slides <?php if ($counter == 1) echo 'active';?>">
                <div class="slide-<?php echo $counter;?>"></div>
                <div class="hero">
                    <hgroup>
                        <h1><?php echo $slide->title;?></h1>
                        <h3><?php echo $slide->subtitle;?></h3>
                    </hgroup>
                    <?php if ($slide->button != false){?>
                        <a class="button" href="<?php echo $slide->button;?>">Ver más</a>
                    <?php };?>
                </div>
            </div>
        <?php $counter++;}?>
        <?php if($counter > 2){ ?>
            <!-- Controls -->
            <a class="left carousel-control" href="#bs-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left fa" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bs-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right fa" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        <?php } ?>
    </div> 
</div>

<?php
/* Start Carousel Controls */
    $carousel1 = new Slide();
    $carousel1->title = "TITULO DE PAGINA";
    $carousel1->subtitle = "SUBTITULO/BAJADA";
    $carousel1->img = "img/slider-image-3.jpg";
    $carousel1->button = false;
    $slides = array($carousel1);
/* End Carousel Controls */
?>
<?php include 'data/carousel.php';?>