<?php get_header() ?>

    <div class="blog-header">
      <h1 class="blog-title"><?php the_title() ?></h1>
    </div>

    <div class="row">

      <div class="col-sm-8 blog-main">

      <?php if(have_posts()) : ?>

        <?php while(have_posts()) : the_post(); ?>

          <div class="blog-post">

            <?php the_content()?>

          </div><!-- /.blog-post -->
        
        <?php endWhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found') ?></p>
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

