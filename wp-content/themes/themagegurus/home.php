<?php
/*
 * Template Name: Home Page
 */

get_header();

global $post;
$postID = $post->ID;
/*echo $postID;
die;*/
?>
  <!-- Start Banner -->
        <section id="banner">
            <div class="slider">
                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg" class="thumb" alt="">
                    <div class="carousel-text">
                        <article class="container-fluid">
                            <div class="row">
                                <aside class="col-lg-6 col-md-6">
                                    <div class="BannerText text-left">
                                        <h2 class="big">Leap to novel<BR>e-commerce experience by<br>upgrading to Magento 2</h2>
                                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                                        <a href="#" class="btn btn-primary" tabindex="-1">Read More</a> </div>
                                </aside>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner2.jpg" class="thumb" alt="">
                    <div class="carousel-text">
                        <article class="container">
                            <div class="row">
                                <aside class="col-lg-12 col-md-12">
                                    <div class="BannerText">
                                        <h2>We aspire to offer a seamless Magento migration service to help you build your business on the grounds of robust Magento 2. </h2>
                                       <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                                        <a href="#" class="btn btn-primary" tabindex="-1">Read More</a> </div>
                                </aside>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!--Start main Part-->
        <main class="main">
			<article class="container">
            <?php 
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        the_content(); 
                    }
                }
            ?>
            </article>
        </main>
        <!--End main Part-->

<?php
get_footer();
