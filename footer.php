<footer>
    <div class="container">
        <div class="row">
        <div class="col-md-6">
        <a href="home">Botiga es liceu</a>
        </div>
        <div class="col-md-3">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'infobasic_footer_interno',
            ) );
        ?>
        </div>
        <div class="col-md-3">
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'infobasic_footer_interno',
            ) );
        ?>
        </div>
            </div>
</footer>

<?php wp_footer();?>
</body>

<head>