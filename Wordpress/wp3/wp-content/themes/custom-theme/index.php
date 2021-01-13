<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>
        <article class="row">
            <div class="col-9 order-2">
                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <?php
                $categories = get_the_category();

                if ($categories):
                ?>
                    <ul class="categories">
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
                    <ul class="tags">
                        <?php foreach ($tags as $tag): ?>
                            <li>
                                <a href="<?= esc_url(get_term_link($tag)) ?>"><?= $tag->name ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php
                endif;
                ?>
            </div>
            <div class="col-2 order-1">
            <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
            <?php endif; ?>
            </div>
        </article>
        <?php
    endwhile;
endif;

get_footer();
