<?php
/**
 * The template for displaying all single services post type
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Siraadnewtheme
 */

get_header();
?>

	
<div class="services-container" style="padding-top: 40px;">
     <div class="wrapper">
        
             
        
        <div class="about-content">
            <div class="service-img" >
            <?php the_post_thumbnail('large')?>
            </div>
            <div class="service-text">
                <h1 style="font-size: 54px;font-weight: 400;color: #000;"><?php the_title();?></h1>
                <?php the_content();?>  
            </div>
            
        </div>
        <div class="btn-container">
            <a href="#" class="btn-1">Go to about us page</a>
         </div>

         <div class="service-content">
                
            <div class="row">
            <?php
                $id = get_the_ID();
                
                $args = array(
                    'post_type' => 'services',
                    'posts_per_page' => 3,
                    'post__not_in' => array($id),
                    'offset' => 0
                );
                $services = new WP_Query($args);

                while ( $services->have_posts() ) :
                    $services->the_post();?>
                        <div class="service col-12 col-sm-6 " style="text-align: left; overflow: hidden;">
                        
                    <div class="box">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large')?></a>
                    </div>
                    
                    <h3 style="margin-left: 25px;"><?php the_title();?></h3>
                    <p><?php echo get_post_meta($post->ID,'description-home',true)?></p>
                    <p>
                        <a href="#">Audit Details & Pricing ></a>
                    </p>
                </div>
                <?php
                    
                    

                endwhile; // End of the loop.
		?>
                
                
            
            </div>
        
       
            <div class="btn-container" style="    margin-top: 49px;">
                <a href="#" class="btn-1" >Explore All Services</a>
            </div>
                
             
        
        </div>
     </div>
 </div>

		

	

<?php

get_footer();


/**/