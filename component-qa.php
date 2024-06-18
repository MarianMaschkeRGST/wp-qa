<section class="qa-area"> 
    <?php 
        $args = array(
            'post_type' => 'qa',
            'posts_per_page' => -1,
            'post_status'	=> 'publish',
            'order' => 'DESC',
        );
    
        $query = new WP_Query($args);
        global $wp_query;
        $tmp_query = $wp_query;
        $wp_query = null;
        $wp_query = $query; 

        while($query->have_posts()) : $query->the_post(); ?>
    <div class="qa-container">
        <!-- QAブロックはここから -->
        <div class="q-block">
            <p class="qa-title fx-row">
                <p class="label q-label">Q</p>
                <?php the_title() ?>
            </p>
        </div>
        <div class="a-block">
            <div class="a-block-content fx-row">
                <p class="label a-label">A</p>
                <div class="fx-col">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
        <!-- QAブロックはここまで -->
    </div>
    <?php endwhile; wp_reset_postdata();?>
    </section>