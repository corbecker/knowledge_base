<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description') ?>">

    <title><?php bloginfo('name') ?> | <?php is_front_page() ? bloginfo('description') : wp_title() ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">

        <nav class="navbar navbar-expand-lg navbar-dark navbar-default">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navItems" aria-controls="navItems" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse collapse" id="navItems">
            <?php
            wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'navbar navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
          </div>
        </nav>

      </div>
    </div>

    <section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading', 'Knowledge Base') ?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'A collection of best practices, tips, workarounds on various<br>Web Development technologies.') ?></p>
        <a href="https://corbinbecker.com/" target="_blank" class="btn btn-primary btn-lrg">Author</a>
        <!-- TODO -->
        <!-- fork on github button -->
      </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
        

        <!-- TODO -->
        <!-- FIX THIS SO THAT INSTEAD OF PASSING ID OF 42 -->
        <!-- YOU CAN ASSIGN A PAGE TO BE THE PARENT PAGE OF ALL TOPICS -->
        <?php
          $args = array(
              'child_of' => 42,
              'parent' => 42,
              'hierarchical' => 0
          );
          $pages = get_pages($args);
            foreach($pages as $id)
            { ?>
              <div class="col-md-4">
                <a href="<?php the_permalink($id); ?>">
                  <div class="box">
                    <h2>
                      <?php echo ''.get_the_title($id); ?>
                    </h2>
                  </div>
                </a>
              </div>
            <?php }
        ?>

        </div>
      </div>
    </section>

        <footer class="blog-footer">
          &copy; <?php echo Date('Y'); ?> - <?php blogInfo('name') ?>
        </footer>
        <?php wp_footer(); ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
    </html>

