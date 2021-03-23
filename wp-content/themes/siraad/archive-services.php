<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Siraadnewtheme
 */

get_header();
?>
<div class="header-container" style="padding-bottom:0px;">
    <div class="wrapper">
        <div class="services-page">
            <div class="container">
                <div class="row">
                    <div class="services-text col-sm-12">
                        <h1>Social Media Marketing Services</h1>
                        <?php echo get_post_field('post_content', 15); ?>
                    </div>
                
                
                </div>
            </div>
    
        </div>
    </div>
 </div>

 <div class="services-container" style="padding-top: 40px;">
    <div class="wrapper">
        <div class="service-content">
            
            
                
            <div class="row" style="">
                <?php
                    if(have_posts()):
                        while(have_posts()): the_post();?>

                        <div class="service col-12 col-sm-12 col-md-4 " style="text-align: left; overflow: hidden;">
                            <div class="box">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large')?></a>
                            </div>
                            <h3 style="margin-left: 25px;"><?php the_title()?></h3>
                            <p style="line-height: 30.6px;"><?php echo get_post_meta($post->ID,'sub-servicses-title',true)?></p>
                            <p class="" style="white-space:pre-wrap; line-height:30.6px"><?php echo get_post_meta($post->ID,'sub-services',true)?></p>
                            <p>
                                <a href="#">Audit Details & Pricing ></a>
                            </p>
                        </div>
                        <?php endwhile;
                            wp_reset_postdata();
                        else :    
                            ?>
                            <p>There are no posts</p>
                        <?php
                        endif;
                        ?>

            
            </div>
        
       
            <div class="btn-container" style="    margin-top: 49px;">
                <a href="#" class="btn-1" >Explore All Services</a>
            </div>
                
             
        
        </div>
     </div>
 </div>

<?php
/*get_sidebar();*/
get_footer();
