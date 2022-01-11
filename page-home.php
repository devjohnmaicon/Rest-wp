<?php 
// Template Name: Menu da Semana
?>

<?php  get_header(  )?>

<section class="container">
    <h2 class="subtitulo">Menu da Semana</h2>

    <?php if (have_rows('category_content')): while(have_rows('category_content')) : the_row(); ?>
    <div class="menu-item grid-8">

        <h2><?php the_sub_field('category_name') ?></h2>

        <ul>
            <?php if (have_rows('item_content')): while(have_rows('item_content')) : the_row(); ?>
            <li>

                <span><sup>R$</sup><?php the_sub_field('item_price') ?></span>
                <div>
                    <h3><?php the_sub_field('item_name') ?></h3>
                    <p><?php the_sub_field('item_description') ?></p>
                </div>

            </li>
            <?php endwhile;  else : endif; ?>

        </ul>

    </div>
    <?php endwhile;  else : endif; ?>

</section>

<?php get_footer(  ) ?>