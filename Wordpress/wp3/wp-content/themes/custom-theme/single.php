<?php

get_header();

if ( have_posts() ) :
    the_post();
    ?>
    <article class="row">
        <h2 class="col-12"><?php the_title(); ?></h2>
        <?php if (has_post_thumbnail()): ?>
        <div class="col-12">
            <?php the_post_thumbnail( 'medium_large' ); ?>
        </div>
        <?php endif; ?>
        <div class="col-12">
            <?php the_content(); ?>
        </div>
        <?php
        $categories = get_the_category();

        if ($categories):
        ?>
            <ul class="categories col-12">
                <?php
                foreach ($categories as $category):
                    // if ($category->slug != 'non-classe'):
                    if ($category->term_id != 1):
                ?>
                    <li>
                        <a href="<?= esc_url(get_term_link($category)) ?>"><?= $category->name ?></a>
                    </li>
                <?php
                    endif;
                endforeach;
                ?>
            </ul>
        <?php
        endif;
        ?>
        <?php
        $tags = get_the_tags();

        if ($tags):
        ?>
            <ul class="tags col-12">
                <?php foreach ($tags as $tag): ?>
                    <li>
                        <a href="<?= esc_url(get_term_link($tag)) ?>"><?= $tag->name ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php
        endif;
        ?>
    </article>
    <?php
endif;

get_footer();

