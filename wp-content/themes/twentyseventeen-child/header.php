
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="profile" href="http://gmpg.org/xfn/11">
        <title><?php bloginfo( 'title' ); ?></title>

        <?php wp_head(); ?>
    </head>
  <body <?php body_class(); ?>>
          <!--Navbar-->

    <header class="navsection">
      <nav class="navbar is-primary">
        <div class="container pt-30">
          <div class="navbar-brand">
            <a class="navbar-item mr-10" href="<?php echo site_url(); ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.PNG" alt="This is the logo of the site" width="100%">
            </a>
          </div>

          <div class="navbar-menu">
          	<?php bulmapress_navigation(); ?>
            <div class="navbar-end has-text-right">
                <!--search-->
              <div class="field has-addons mt-10">
                <div class="control">
                  <input class="input" type="text" placeholder="Find a repository">
                </div>

                <div class="control">
                  <a class="button is-white is-outlined">
                    <i class="fa fa-search"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
