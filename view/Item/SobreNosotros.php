
<?php
include_once 'public/header.php';
?>
<?php
     foreach ($vars['listado'] as $item) {
    ?>
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="./public/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Sobre Nosotros</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- product list part start-->
<section class="about_us padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="about_us_content">
                    <h5>Nuestra Misión</h5>
                    <h3><?php echo $item[4] ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->


<!-- subscribe part here -->
<section class="subscribe_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="subscribe_part_content">
                    <h2>Información:</h2>
                    <p>Número De Teléfono: <?php echo $item[2] ?></p>
                    <p>Correo Electrónico: <?php echo $item[3] ?></p>
                   <p>Horario: <?php echo str_replace("\n", "<br>",$item[1]) ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe part end -->

 <?php
    }
?>   
    <?php
include_once 'public/footer.php';
?>