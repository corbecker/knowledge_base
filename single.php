<?php get_header() ?>

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php if(have_posts()) : ?>

          <?php while(have_posts()) : the_post(); ?>

            <div class="blog-post">
              <h2 class="blog-post-title">
                <?php the_title() ?>
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

              <?php the_content()?>
              <hr>
              <?php comments_template() ?>

            </div><!-- /.blog-post -->
          
          <?php endWhile; ?>
          <?php else : ?>
            <p><?php __('No Posts Found') ?></p>
          <?php endif; ?>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar') ?>
          <?php endif; ?>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
  <?php get_footer(); ?>

