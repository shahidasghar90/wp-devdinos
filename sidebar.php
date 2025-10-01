<aside id="secondary" class="widget-area">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <div class="mb-8">
            <?php get_search_form(); ?>
        </div>
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Popular Articles</h2>
            <ul>
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish'
                ));
                foreach ($recent_posts as $post) :
                ?>
                    <li class="mb-2">
                        <a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a>
                    </li>
                <?php endforeach;
                wp_reset_query();
                ?>
            </ul>
        </div>
        <div>
            <h2 class="text-xl font-bold mb-4">Categories</h2>
            <ul>
                <?php
                $categories = get_categories();
                foreach ($categories as $category) :
                ?>
                    <li class="mb-2">
                        <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</aside>