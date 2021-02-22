<?php
/**
 * The template for displaying all single posts.
 *
 * @see    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); ?>

<div class="blog">
  <div class="l-wrapper blog-wrapper">
    <?php while (have_posts()) : the_post(); ?>
      <div class="blog-header">
        <div class="blog-header-section">
          <?php
            $tag_terms = get_the_terms($post->ID, TOPICS_POST_TYPE_CATEGORY);//get_tag_query($news_query->ID, BLOG_TAG);
            if ( $tag_terms && !is_wp_error( $tag_terms ) ) :
          ?>
            <?php foreach($tag_terms as $tag) : ?>
              <a class="blog-category" href="<?php echo get_term_link($tag); ?>"><?php echo esc_html($tag->name); ?></a>
            <?php endforeach; ?>
          <?php endif;?>
          <time datetime="<?php the_time('Y-m-d');?>" class="blog-time"><?php echo get_the_time('Y.m.d'); ?></time>
        </div>
        <h1 class="blog-title"><?php the_title();?></h1>
        <div class="blog-mv">
          <img class="blog-mv-image" src="<?php the_post_thumbnail_url('large');?>" alt="<?php the_title();?>">
        </div>
      </div>
      <div class="blog-content">
        <?php the_content();?>
      </div>
    <?php endwhile; ?>

    <?php
      $terms = get_the_terms( get_the_ID(), TOPICS_POST_TYPE_CATEGORY); 
      if($terms) {

      $term_slug = $terms[0]->slug;
      if ( empty( $term_slug ) ) {
        $term_slug = '';
      }

      $args = array(
        'post_type'      => TOPICS_POST_TYPE,
        'orderby'        => 'post_date',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'posts_per_page' => 3,
        'post__not_in'   => array( get_the_ID() ),
        'tax_query'      => array(
          array(
            'taxonomy' => TOPICS_POST_TYPE_CATEGORY,
            'field'    => 'slug',
            'terms'    => $term_slug
          )
        )
      );
      $related_args = new WP_Query( $args );

      if($related_args->have_posts()) {
      $countCard = 1;
    ?>
    <div class="blog-related">
      <h2 class="blog-related-heading heading">関連記事一覧</h2>
      <div class="blog-related-cards">
        <?php while( $related_args->have_posts()) : $related_args->the_post(); ?>
          <?php import_part('related-card', array(
            'modifier' => 'blog-related-card',
            'link'  => get_permalink(),
            'image' => get_eyecatch_data(get_the_ID(), 'card-image-md', ''),
            'title' => get_the_title(),
            'category' => get_the_terms(get_the_ID(), TOPICS_POST_TYPE_CATEGORY),
            'time' => get_the_time('Y.m.d')
          )) ?>
        <?php $countCard++; endwhile; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <?php if($countCard > 3) {?>
        <a href="<?php echo home_url('/topics-category/'.$term_slug) ?>" class="blog-related-button">もっと見る</a>
      <?php }?>
    </div>
    <?php } }?>
  </div>
</div>

<?php
get_footer();
