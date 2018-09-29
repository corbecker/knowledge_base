<div class="blog-post">
  <h2 class="blog-post-title">
    <!-- if only single page dont have a link in the title -->
    <?php if(is_single()) : ?>
      <?php the_title() ?>
    <?php else : ?>
    <a href="<?php the_permalink(); ?>">
      <?php the_title() ?>
    </a>
    <?php endif ?>
  </h2>

  <p class="blog-post-meta">
    <?php the_time('F j, Y g:i a'); ?>
     by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
       <?php the_author(); ?>
     </a>
  </p>

  <div class="post-thumb">
    <?php if(has_post_thumbnail()) : ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
  </div>
  
  <!-- if single show full post if it's showing multiple posts show only an excerpt -->
  <?php if(is_single()) : ?>
    <?php the_content() ?>
  <?php else :?>
    <?php the_excerpt()?>
  <? endif?>

  <?php if(is_single()) : ?>
    <?php comments_template() ?>
  <?php endif; ?>


</div><!-- /.blog-post -->