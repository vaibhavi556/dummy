<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Captus
 * @since Captus 1.0
 */
?>
	<!--Start footer-->
        <footer class="footer">
             <?php if(!is_page(16)){?>
			<section class="GetTouch">
                <article class="container">
                    <div class="row">
                        <aside class="col-sm-8">
                            <h3>Build your new website with Company Name</h3>
                            <p>Get in touch and tell us your story</p>
                        </aside>
                        <aside class="col-sm-4">
                            <div class="GetTouchBtn"> <a href="#" class="btn btn-default" tabindex="0">Get in touch</a> </div>
                        </aside>
                    </div>
                </article>
            </section>
            <section class="FooterForm">
                <article class="container">
                    <div class="row">
                        <aside class="col-md-6 col-sm-5">
                            <div class="block-title">
                                <div class="sec-title text-left">
                                    <div class="sub-title">Get in touch</div>
                                </div>
                            </div>
                            <div class="footer-contact-details">
                                <!--<p><i class="fas fa-phone"></i> <a href="tel:<?php the_field('contact_no', 'option'); ?>"><?php the_field('contact_no', 'option'); ?></a></p>-->
                                <p><i class="fas fa-envelope"></i> <a href="mailto:<?php the_field('email_address', 'option'); ?>" style="text-decoration:underline"><?php the_field('email_address', 'option'); ?></a></p>
                                <p><i class="fas fa-home"></i> <?php the_field('address', 'option'); ?></p>
                            </div>
                        </aside>
                        <aside class="col-md-6 col-sm-7">
                            <?php echo do_shortcode('[contact-form-7 id="40" title="Footer Contact form"]'); ?>
                        </aside>
                    </div>
                </article>
            </section>
			 <?php }?>
            <section class="FooterSidebar">
                <article class="container">
                    <div class="row">
                        <aside class="col-md-4 col-sm-6">
                            <div class="FooterText">
                                <h4><?php echo get_bloginfo ( 'name' ) ?></h4>
                                <p><?php the_field('copyright_text', 'option'); ?></p>
                            </div>
                        </aside>
                        <aside class="col-md-4 col-sm-6">
                            <div class="FooterText">
                                <h4><?php the_field('about_title', 'option'); ?></h4>
                                <p><?php the_field('about_desc', 'option'); ?></p>
                            </div>
                        </aside>
                        <aside class="col-md-4 col-sm-12">
                            <?php if ( has_nav_menu( 'social' ) ) : ?>
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'social',
                                            'menu_class'     => 'social',
                                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                            'container'=> false, 
                                        )
                                    );
                                ?>
                            <?php endif; ?>
                        </aside>
                    </div>
                </article>
            </section>
        
		</footer>
        <!--End footer-->
        <a id="backtop"></a>
    </div>
		<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Context here</p>
      </div>
    </div>
  </div>
</div>
		<?php wp_footer(); ?>
		
		<script>
		$('#overlay').modal('show');

setTimeout(function() {
    $('#overlay').modal('hide');
}, 5000);
		</script>
		<script>
	        var btn = $('#backtop');

	        $(window).scroll(function() {
	            if ($(window).scrollTop() > 300) {
	                btn.addClass('show');
	            } else {
	                btn.removeClass('show');
	            }
	        });

	        btn.on('click', function(e) {
	            e.preventDefault();
	            $('html, body').animate({
	                scrollTop: 0
	            }, '300');
	        });
	    </script>
	</body>
</html>
