<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package ferry
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Courgette|Crimson+Text|Didact+Gothic|Handlee|Homemade+Apple|Indie+Flower|Josefin+Slab|Poiret+One|Quicksand|Raleway|Sacramento" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?> >
<div class="wrapper">
<a style="display:none;" class="skip-link screen-reader-text" href="#content">
<?php esc_html_e( 'Skip to content', 'ferry' ); ?>
</a>
<header class="ferry-trhead">
    <!--==================== MAIN MENU ====================-->
    <div class="ferry-main-nav">
      <nav class="navbar navbar-default navbar-wp">
        <div class="container navbar-container">
          <div class="navbar-header col-md-2"> 
            <!-- Logo/Toggle Button -->

         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-wp"> <span 	
         class="sr-only"><?php _e('Toggle Navigation','ferry'); ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <!-- Button -->


            <span class="site-branding">
	<span class="wrap">

		<?php the_custom_logo(); ?>
		<div class="site-branding-text">
			<?php if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
		</div><!-- .site-branding-text -->

	</span><!-- .wrap -->
</span><!-- .site-branding -->
            <!-- Logo/Toggle Button -->

            <!-- navbar-toggle -->
    
          </div>
          <!-- /navbar-toggle --> 
          
          <!-- Navigation -->
          <div class="collapse navbar-collapse" id="navbar-wp">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'ferry_custom_navwalker::fallback' , 'walker' => new ferry_custom_navwalker() ) ); ?>
             
              <ul class="nav navbar-nav navbar-right">
             <li>
			 <?php global $woocommerce; ?>
              <?php if( class_exists('woocommerce')) { ?><a href="<?php echo WC()->cart->get_cart_url(); ?>" 
			  title="<?php esc_attr_e( 'View your shopping cart','ferry' ); ?>" class="ferry-cart"> <i class="fa fa-shopping-bag"></i><span class="ferry-cart-count"> <span class="ferry-cart-item"><?php echo '<span class="contents">' . sprintf( _n( '%d item','%d', intval( $woocommerce->cart->get_cart_contents_count() ), 'ferry' ), intval( $woocommerce->cart->get_cart_contents_count() ) ) . '</span>';
			?>


			  </span></a>
     <?php } ?></li>
		            
  <?php if(get_theme_mod('social_link_facebook')) { ?>
            <li><span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_facebook')); ?>" <?php if(get_theme_mod('Social_link_facebook_tab')==1){ echo "target='_blank'"; } ?> ><i class="fa fa-facebook"></i></a></span></li>
            <?php } if(get_theme_mod('social_link_twitter')) { ?>
            <li><span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_twitter')); ?>" <?php if(get_theme_mod('Social_link_twitter_tab')==1){ echo "target='_blank'"; } ?> ><i class="fa fa-twitter"></i></a></span></li>
            <?php } if(get_theme_mod('social_link_linkedin')) { ?>
            <li><span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_linkedin')); ?>" <?php if(get_theme_mod('Social_link_linkedin_tab')==1){ echo "target='_blank'"; } ?> ><i class="fa fa-instagram"></i></a></span></li>
            <?php } if(get_theme_mod('social_link_google')) { ?>
            <li><span class="icon-soci"><a href="<?php echo esc_url(get_theme_mod('social_link_google')); ?>" <?php if(get_theme_mod('Social_link_google_tab')==1){ echo "target='_blank'"; } ?> ><i class="fa fa-google-plus"></i></a></span></li>
            <?php } ?>
	</;o>
              </ul>
          </div>
          
        </div>
      </nav>
  </header>