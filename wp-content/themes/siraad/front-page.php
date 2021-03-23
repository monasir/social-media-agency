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
<div class="header-container">
       <div class="wrapper">
        
        <Header>
            
            <p class="small-title">Social Media Marketing Agency</p>
            <h1>We make brands more likable and 
                profitable via social media.
            </h1>
            <p>
                <a href="#" style="margin-right:10px;">See Services ></a>
                
            
                <a href="#">Get Started ></a>
            </p>
            <img src="<?php get_template_directory_uri() ?>/social-agency/wp-content/themes/siraad/img/Banner-1.jpg" alt="">
        </header>
       </div>
    </div>
    <div class="about-container">
        <div class="wrapper">
            
            <div class="about-content">
                <div class="about-img  abt-img">
                    <div class="darken"></div>
                </div>
                <div class="about-text">
                    <h3 class="tertiary-title">We Are A Group Of Skilled And Motivated Designers, And Developers</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quis iste facere dolores corporis vel quibusdam eum reiciendis,
                         suscipit optio ut maiores sit eius nesciunt consectetur recusandae, 
                         fugit veritatis odit modi.</p>
                         <div class="btn-container">
                            <a href="#" class="btn-1">Go to about us page</a>
                         </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="services-container">
        <div class="wrapper">
            <div class="service-content">
                <h1 style="">Our Services</h1>
                
                    
                <div class="row card-service">
                    <?php
                        $args = array(
                            'post_type' => 'services',
                            'posts_per_page' => 3
                        );
                        $services = new WP_Query($args);

                        if($services->have_posts()):
                            while($services->have_posts()): $services->the_post();?>

                            <div class="service col-12 col-sm-12 col-md-4 ">
                                <h3><?php the_title()?></h3>
                                <p><?php echo get_post_meta($post->ID,'description-home',true)?></p>
                                <p>
                                    <a href="#">Audit Details & Pricing ></a>
                                </p>
                            </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>

                
                </div>
            
            
                <div class="btn-container" style="    margin-top: 49px;">
                    <a href="#" class="btn-1" >Explore All Services</a>
                 </div>
            
            </div>
        </div>
    </div>
    <div class="projects"></div>
    <div class="testemonials"></div>

<?php
/*get_sidebar();*/
get_footer();
