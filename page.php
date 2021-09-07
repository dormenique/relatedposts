  <?php $tags = wp_get_post_tags($post->ID);
			if ($tags) {
			$first_tag = $tags[0]->term_id;
			$args=array(
			'tag__in' => array($first_tag),
			'post__not_in' => array($post->ID),
			'posts_per_page'=>4,
			//'caller_get_posts'=>1,
			'orderby'=>'rand'
			);
            $my_query = new wp_query( $args );
            if( $my_query->have_posts() ) {
            echo '<div id="related_posts" class="clear"><h3>Posts Relacionados</h3><ul class="related_posts_container">';
            while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
             <li class="related_post">
                    <a class="related_post_img_container" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                      <?php the_post_thumbnail('medium', ['class' => 'related_post_img']); ?>
                    </a>
            <div class="related_content">
            <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </div>
            </li>
            <? }
            echo '</ul></div>';
            } }
            $post = $orig_post;
            wp_reset_query(); ?>
