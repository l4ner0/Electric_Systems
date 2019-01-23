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
            include('Modulos/home.php');
        ?>

        <!-- About -->
        <?php
            include('Modulos/about.php');
        ?>
        <!-- About end -->

        <!-- Why us -->
        <?php
            include('Modulos/why_us.php');
        ?>
       <!-- Why us end -->

        <!-- Services -->
        <?php
            include('Modulos/services.php');
        ?>
        <!-- Services end -->

        <!-- Portfolio -->
        <?php
            include('Modulos/portfolio.php');
        ?>
        <!-- Portfolio end -->

        <!-- Testimonial -->
        <?php
            include('Modulos/testimonial.php');
        ?>
        <!-- Testimonial end -->

        <!-- Contact form -->
        <?php
            include('Modulos/contact_form.php');
        ?>
        <!-- Contact form end -->

        <!-- Footer -->
        <?php
            include('General/footer.php');
        ?>
    </body>	
</html>	