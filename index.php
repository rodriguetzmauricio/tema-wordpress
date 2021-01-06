<?php get_header(); ?>

<div class="row">
    <!--entradas-->
    <div class="col-lg-9">

       

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();?>
             <!--entrada-->
        <div class="card-body">
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_title();  ?></h2>
            </a>
            <p class="small mb-0">Fecha: <?php the_time('F j, Y'); ?></p>
            <p class="small mb-0"><?php the_author(); ?></p>
            <p class="small ">Categorias: <?php the_category('/'); ?> Etiquetas: <?php the_tags('','/','') ?></p>
            <!-- <img src="img/1200.jpg" alt="" class="img-fluid mb-3"> -->
            <?php
            if(has_post_thumbnail()){
                the_post_thumbnail('post-thumbnails',array(
                    'class'=> 'img-fluid mb-3'
                ));
            };
            ?>

            <?php the_excerpt();  ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Mas info...</a>
        </div>
        <!--fin de entrada-->
        <?php endwhile;endif;?>

        <!--Paginacion-->
        <div class="card-body">
            <?php get_template_part('template-parts/content', 'paginacion') ?>
        </div>
        <!--Fin de Paginacion-->

    </div>
    <!--fin entradas-->

    <!--aside-->
    <?php get_sidebar(); ?>
    <!--fin de aside-->
</div>

</div>


<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>

</html>