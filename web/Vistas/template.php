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
            include('Vistas/General/header.php');
        ?>

        <div id="ContenedorPrincipal">

            <?php
                /*<!--=====================================
                  =            Manejo de Rutas            =
                  ======================================-->*/

                    $enlace = new ControladorPlantilla();
                    $enlace -> ctrEnlaces();
            ?>    
        
        </div>
        
        <!-- Contact form -->
        <?php
            include('Vistas/Modulos/Contacto/contactanos.php');
        ?>
        
        <!-- Footer -->
        <?php
            include('Vistas/General/footer.php');
        ?>
    </body>	
</html>	