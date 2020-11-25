<?php
/**
 * Header file for the Captus WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Captus
 * @since Captus 1.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		
	
		<?php wp_head(); ?>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
		      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
		    <![endif]-->
			<style>
			#ac-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,.6);
    z-index: 1001;
}

#popup {
    width: 555px;
    height: 375px;
    background: #FFFFFF;
    border: 5px solid #000;
    border-radius: 25px;
    -moz-border-radius: 25px;
    -webkit-border-radius: 25px;
    box-shadow: #64686e 0px 0px 3px 3px;
    -moz-box-shadow: #64686e 0px 0px 3px 3px;
    -webkit-box-shadow: #64686e 0px 0px 3px 3px;
    position: relative;
    top: 150px; left: 375px;
}
			</style>
			
	</head>
	<body>

    	<div id="wrapper">

		<!--Start Header-->
        <header id="header">
            <section <?php if(is_front_page()){?>class="header-contact"<?php }else{?>class="header-inner"<?php }?>>
                <article class="container-fluid">
                    <div class="row">
                        <aside class="col-lg-8 hidden-md hidden-sm hidden-xs">
                            <div class="header-contact-info">
                                <ul>
                                    <!--<li><a href="tel:<?php the_field('contact_no', 'option'); ?>"><i class="fas fa-phone"></i> <?php the_field('contact_no', 'option'); ?></a></li>-->
                                    <li><a href="mailto:<?php the_field('email_address', 'option'); ?>"><i class="fas fa-envelope"></i> <?php the_field('email_address', 'option'); ?></a></li>
                                    <li><i class="fas fa-home"></i> <?php the_field('address', 'option'); ?></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="col-lg-4">
                            <nav class="top-navigation">
                            	<?php if ( has_nav_menu( 'expanded' ) ) : ?>
									<?php
										wp_nav_menu(
											array(
												'theme_location' => 'expanded',
												'menu_class'     => '',
												'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												'container'=> false, 
												'menu_class'=> false,
											)
										);
									?>
								<?php endif; ?>
                            </nav>
                        </aside>
                    </div>
                </article>
            </section>
            <!-- Start Site Header -->
            <section <?php if(is_front_page()){?>class="site-header"<?php }else{?>class="site-header-inner"<?php }?>>
                <div class="container-fluid">
                    <div class="row">
                        <aside class="col-md-3 logo">
                            <?php 
                            	$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logoImage = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            ?>
                            <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo $logoImage[0]; ?>" alt="Site-Logo"></a>
                        </aside>
                        <aside class="col-md-9">
                            <div class="menu">
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="stellarnav">
                                	<?php if ( has_nav_menu( 'primary' ) ) : ?>
										<?php
											wp_nav_menu(
												array(
													'theme_location' => 'primary',
													'menu_class'     => 'main-menu',
													'items_wrap'     => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
													'container'=> false, 
													'menu_class'=> false,
												)
											);
										?>
									<?php endif; ?>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
        </header>
