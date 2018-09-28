<?php get_header() ?>

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php if(have_posts()) : ?>

          <?php while(have_posts()) : the_post(); ?>

            <div class="blog-post">
              <h2 class="blog-post-title">
                <a href="<?php the_permalink(); ?>">
                <?php the_title() ?>
                </a>
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

              <?php the_excerpt()?>

            </div><!-- /.blog-post -->
          
          <?php endWhile; ?>
          <?php else : ?>
            <p><?php __('No Posts Found') ?></p>
          <?php endif; ?>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
<?php get_footer(); ?>

