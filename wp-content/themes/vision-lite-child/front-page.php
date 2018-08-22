<?php
/**
 Template Name: Front Page
 *
 * @package Vision Lite
 */

get_header(); 
?>

            
<?php if ( is_front_page() && !is_home() ) { ?>
	<?php $hideslide = get_theme_mod('hide_slider', '1'); ?>
		<?php if($hideslide == ''){ ?>
                <!-- Slider Section -->
                <?php for($sld=7; $sld<10; $sld++) { ?>
                	<?php if( get_theme_mod('page-setting'.$sld)) { ?>
                	<?php $slidequery = new WP_query(array('page_id' => get_theme_mod('page-setting'.$sld,true))); ?>
                	<?php while( $slidequery->have_posts() ) : $slidequery->the_post();
                			$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                			$img_arr[] = $image;
               				$id_arr[] = $post->ID;
                		endwhile;
                	}
                }
                ?>
<?php if(!empty($id_arr)){ ?>
        <div id="slider" class="nivoSlider">
            <?php 
            $i=1;
            foreach($img_arr as $url){ ?>
            <?php if(!empty($url)){ ?>
            <img src="<?php echo esc_url($url); ?>" title="#slidecaption<?php echo esc_attr($i); ?>" />
            <?php } ?>
            <?php $i++; }  ?>
        </div>          
     
<?php } ?>
<div class="clear"></div>
<!-- Slider Section -->
<?php } } ?>

  <div class="main-container">
                       <?php $hidebox = get_theme_mod('hide_boxes', '1'); ?>  
             <?php if($hidebox == '') { ?>  
             <section>
            	<div class="container">
                   <div class="what-we">
                       <h2 class="section-title"><?php echo esc_html(get_theme_mod('section_title', __('What We Do','vision-lite'))); ?></h2>
                       <p class="section-title"><?php echo esc_html(get_theme_mod('section_description', __('What We Do','vision-lite'))); ?></p>
                   </div>
                       <?php for($f=1; $f<4; $f++) { ?>
         <?php if(get_theme_mod('page-setting'.$f) != '') { ?>
         	<?php $page_query = new WP_Query(array('page_id' => get_theme_mod('page-setting'.$f))); ?>
         		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                          <div class="whatwe-box <?php if($f%3==0) { ?>last<?php } ?>">
								<?php if(has_post_thumbnail()) { ?>
                                		<div class="whatwe-thumb"><?php the_post_thumbnail('full'); ?></div>
                                <?php } ?>
							<h3><?php the_title(); ?></h3>				
								<p><?php the_excerpt(); ?></p>
								<a class="ReadMore" href="<?php the_permalink(); ?>"><?php _e('Learn More','vision-lite'); ?></a>				
                </div>
                <?php endwhile; ?>
                <?php }} ?>
                    <div class="clear"></div>
                    </div><!-- container -->
            </section>
                       <?php }  ?>
                      
<?php get_footer(); ?>