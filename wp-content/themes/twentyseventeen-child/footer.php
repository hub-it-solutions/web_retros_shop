
 <footer class="site-footer">
      <nav class="call-to-action navbar is-transparent">
        <div class="container">
          <div class="navbar-menu">
              <div class="navbar-start">
                <ul>
                  <li><a class="button is-outlined px-20">CALL US ON</a></li>
                  <li><i class="fa fa-phone"></i> 01796643387
                  <li><i class="fa fa-phone"></i> 01828742632</li>
                  <li><i class="fa fa-phone"></i> 01917338189</li>
                </ul>
              </div>
              <div class="navbar-end">
                <div class="socialicon">
                  <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                  <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                  <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                </div>
              </div>
          </div>
        </div>
      </nav>

      <div class="container footer">
        <div class="columns">
          <div class="column is-4">
            <?php if ( is_active_sidebar( 'footer_sidebar_1' ) ) : ?>
              <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'footer_sidebar_1' ); ?>
              </div><!-- #primary-sidebar -->
            <?php endif; ?>
          </div>
          <div class="column is-4">
            <h3 class="title is-4">Galary</h3>
            <div class="columns is-gapless galary is-multiline">
              <div class="column is-4">
                <img src="<?php echo eto_get_image('eto_g_image_1'); ?>">
              </div>
              <div class="column is-4">
                <img src="<?php echo eto_get_image('eto_g_image_2'); ?>">
              </div>
              <div class="column is-4">
                <img src="<?php echo eto_get_image('eto_g_image_3'); ?>">
              </div>
              <div class="column is-4">
                <img src="<?php echo eto_get_image('eto_g_image_4'); ?>">
              </div>
              <div class="column is-4">
                <img src="<?php echo eto_get_image('eto_g_image_5'); ?>">
              </div>   
              <div class="column is-4">
                <img src="<?php echo eto_get_image('eto_g_image_6'); ?>">
              </div>
            </div>
          </div>
          <div class="column is-3 is-offset-1">
            <div class="payment">
              <h3 class="title is-4">
                <?php echo eto_get_option('eto_payment_method_text'); ?>
              </h3>
              <p>Pay us with Bkash/DBBL</p>
              <div class="py-10">
               
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/capture.PNG">
              
                
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/capture1.PNG">
                
              </div>
              <p>Easy way to pay and get your products by curier service</p>
            </div>
          </div>
        </div>
      </div>

      <div class="footercopy py-10">
        <div class="container">
          <span class="columns">
            <span class="column is-6 has-text-left">Developed by Hub IT Solutions</span>
            <span class="column is-6 has-text-right"><i class="fa fa-copyright"></i> 2018 All Right reserved</span>
          </span>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>


