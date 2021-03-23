<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Siraadnewtheme
 */

get_header();
?>

<div class="contact-container" >
    <div class="wrapper">
        <div class="contact-page" style="">
            <div class="container">
                <div class="row">
                    <div class="contact-text col-sm-12">
                        <h1><? the_title();?></h1>
                        
						<?php the_content();?>
                        
                    </div>
                
                
            </div>
        </div>

      
            
        </div>
        
    </div>
</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_field( 'post_name', get_post() ) );


		endwhile; // End of the loop.
		?>

<?php
//get_sidebar();
get_footer();
