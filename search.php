<?php get_header(); ?>

<div class="row">
    <!--entradas-->
    <div class="col-lg-9">

        <h3 class="bg-primary text-white py-3 mb-5 text-center">Resultado de Busqueda</h3>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <!--entrada-->
                <div class="card-body">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title();  ?></h2>
                    </a>


                </div>
                <!--fin de entrada-->
            <?php endwhile; ?>
        <?php else : ?>
            <h5>No se encontro el termino:
            <?php printf(esc_html('%s'),get_search_query()) ?>
            </h5>
            <?php get_search_form(); ?>
        <?php endif; ?>

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