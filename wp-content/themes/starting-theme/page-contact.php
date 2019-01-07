<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header();

//address
$acf_address_line_1 = get_field( 'acf_address_line_1' );
$acf_address_line_2 = get_field( 'acf_address_line_2' );
$acf_address_line_3 = get_field( 'acf_address_line_3' );
$acf_address_line_4 = get_field( 'acf_address_line_4' );
$acf_post_code 		= get_field( 'acf_post_code' );

//contact numbers
$acf_main_tel_no = get_field( 'acf_main_tel_no' );
$acf_mobile_no = get_field( 'acf_mobile_no' );
$acf_fax_no = get_field( 'acf_fax_no' );
$acf_pr_email_addr= get_field( 'acf_pr_email_addr' );

 ?>

		<header class="entry-header">
			<h1 class="entry-title"><?php the_title() ?></h1>
		</header>

		<div class="row">

		<div class="col-md-6 wow fadeInLeft contactheight">

			<div class="row contact">
				<div class="part-contact-addr">

					<?php if($acf_main_tel_no != ""):  ?>
					Telephone:<br  /><span><?php echo $acf_main_tel_no ?></span><br  />
					<?php endif; ?>

					<?php if($acf_pr_email_addr != ""):  ?>
						Email:<br  /><span><a href="mailto:<?php echo $acf_pr_email_addr ?>"><?php echo $acf_pr_email_addr ?></a></span><br  />
					<?php endif; ?>

					<?php

						if(
							$acf_address_line_1 != "" ||
							$acf_address_line_2 != "" ||
							$acf_address_line_3 != "" ||
							$acf_address_line_4 != "" ||
							$acf_post_code != ""
						):

					?>
					Address:<br  />
					<div class="contact-addr">
						<span>
						<?php if($acf_address_line_1 != ""):  ?>
							<?php echo $acf_address_line_1; ?><br>
						<?php endif; ?>
						<?php if($acf_address_line_2 != ""):  ?>
							<?php echo $acf_address_line_2; ?><br>
						<?php endif; ?>
						<?php if($acf_address_line_3 != ""):  ?>
							<?php echo $acf_address_line_3; ?><br>
						<?php endif; ?>
						<?php if($acf_post_code != ""):  ?>
							<?php echo $acf_post_code; ?><br>
						<?php endif; ?>
						</span>

					</div><!-- .contact-addr -->
				<?php endif; ?>

				<?php if($acf_email_addr != ""):  ?>
					<a href="mailto:<?php echo $acf_email_addr; ?>">
						<?php echo $acf_email_addr; ?>
					</a>
				<?php endif; ?>

				</div>
			</div>

			<div class="row contactform">

				Message Us:

				<?php echo do_shortcode( '[formidable id=2]' ); ?>

			</div>

		</div>

		<div class="col-md-6 contactmap wow fadeInRight contactheight" data-wow-delay=".5s">

			<iframe src="https://snazzymaps.com/embed/53210" width="100%" height="100%" style="border:none;"/>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2321.445379430351!2d-6.445893283998267!3d54.41976970146572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4860efc6f235f391%3A0x4dd5fb8a5e8cd7e2!2s10-12+Carleton+St%2C+Portadown%2C+Craigavon+BT62+3EN!5e0!3m2!1sen!2suk!4v1520338169849" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

		</div>

		</div>

<?php
//get_sidebar();
get_footer();
