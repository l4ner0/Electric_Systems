<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <?php
        include('General/head.php');
    ?>
   
    <body>

        <!-- Preloader -->

        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        <!--End off Preloader -->
    
        
        <?php
            include('General/header.php');
        ?>

        <?php
            include('Modulos/carrusel.php');
        ?>

        <!-- About -->
        <?php
            include('Modulos/empresa.php');
        ?>
        <!-- About end -->

        <!-- Why us -->
        <?php
            include('Modulos/why_us.php');
        ?>
       <!-- Why us end -->

        <!-- Services -->
        <?php
            include('Modulos/servicios.php');
        ?>
        <!-- Services end -->

        <!-- Portfolio -->
        <?php
            include('Modulos/productos.php');
        ?>
        <!-- Portfolio end -->

        <!-- Testimonial -->
        <?php
            include('Modulos/testimonial.php');
        ?>
        <!-- Testimonial end -->

        <!-- Contact form -->
        <?php
            include('Modulos/contactanos.php');
        ?>
        <!-- Contact form end -->

        <!-- Footer -->
        <?php
            include('General/footer.php');
        ?>
    </body>	
</html>	