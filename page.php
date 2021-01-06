<?php get_header(); ?>

<div class="row">
    <!--entradas-->
    <div class="col-lg-12">

       

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();?>
             <!--entrada-->
        <div class="card-body">
            
                <h2><?php the_title();  ?></h2>
     
            <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
            <p class="small mb-0"><?php the_author(); ?></p>
            <p class="small ">Categorias: <?php the_category('/'); ?> Etiquetas: <?php the_tags('','/','') ?></p>
            <?php
            if(has_post_thumbnail()){
                the_post_thumbnail('post-thumbnails',array(
                    'class'=> 'img-fluid mb-3'
                ));
            };
            ?>
            
            <!-- <img src="img/1200.jpg" alt="" class="img-fluid mb-3"> -->
            <?php the_content();  ?>
            
        </div>
        <!--fin de entrada-->
        <?php endwhile;endif;?>


    </div>
    <!--fin entradas-->

</div>

</div>


<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>

</html>