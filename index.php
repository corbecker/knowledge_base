<?php get_header() ?>

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post(); ?>
            
            <!-- 'content is refering to content.php' -->
                <?php get_template_part('content', get_post_format()); ?>
          
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

∆