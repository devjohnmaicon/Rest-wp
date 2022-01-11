<?php 
// Template Name: Sobre
?>

<?php  get_header(  )?>

<section class="container sobre">
    <h2 class="subtitulo">Sobre</h2>

    <div class="grid-8">
        <img src="<?php the_field('image_about') ?>" alt="<?php the_field('image_description') ?>">
    </div>

    <div class="grid-8">

        <?php if (have_rows('content_about')): while(have_rows('content_about')) : the_row(); ?>

        <h2><?php the_sub_field('title_about') ?></h2>
        <?php the_sub_field('text_about') ?>

        <?php endwhile;  else : endif; ?>
    </div>
</section>


<?php get_footer(  ) ?>