<?php get_header();?>

    
<div class="container main-page">
    <div class="row">       
    <!-- Start Posts -->
    <section class="posts col-md-8">
        <!-- Get Posts Dynamically With Loop -->
        <?php  
        
        // Check if there are posts
        if(have_posts()){
            // Loop Through Posts
            while(have_posts()){
                the_post();
        ?>
        <div class="post">
            <!-- Start Post -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 ">
                    <!-- the_post_thumbnail($size,$attr); -->
                    <?php the_post_thumbnail( ' ' , ['class' => 'img-responsive img-thumbnail'] );  ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 ">
                    <div class="post-header">
                        <span class="category text-uppercase"> 
                            <i class="fa fa-folder-open-o" ></i> 
                            <?php the_category(' ||  <i class="fa fa-folder-open-o" ></i> ') ?>
                        </span>
                        <h3 class="post-title">
                        <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                        </a>
                        </h3>                       
                        <span class="post-date"><?php the_time('F j, Y'); ?></span>
                        <span class="post-auther"> By <?php the_author_posts_link(); ?></span>
                        <span class="post-tags"> 
                            <i class="fa fa-tags"></i>
                            <?php 
                                if(has_tag()){
                                    the_tags('<b>Tags: </b>');
                                }else{
                                    echo '<b>Tags: No Tags</b>';
                                }
                            ?>
                        </span>
                    </div>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="post-comment">
                        <div class="comment pull-left">
                            <i class='fa fa-comments-o'></i>  <?php comments_popup_link('0 Comments' , '1 Comment' , '% Comments' , 'comment' , 'Comments Locked'); ?>
                        </div>
                        <div class="share pull-right">
                            Share 
                            <i class='fa fa-twitter'></i>
                            <i class='fa fa-instagram'></i>
                            <i class='fa fa-facebook'></i>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- End Post -->
        </div>
       
        <?php                           
            }// End of Loop
            
        } //End If Condition 
        ?>
        <!-- Add Numeric Pagination -->
        <div class="post-pagination">
            <?php echo add_numeric_pagination(); ?>
        </div>  
        
            
    </section>
    <!-- End Posts -->
        
    <!-- Start Aside -->
    <aside class="sidebar col-md-offset-1 col-md-3">
        <?php   
            // if(is_active_sidebar('main-sidebar')){
                // dynamic_sidebar( 'main-sidebar' );
            // }

                get_sidebar();
        ?>
        
    </aside>
    <!-- End Aside -->
    </div><!--  End Main Row -->

    <div class="row">
    <h2></h2>
    <!-- Carousel -->
    <div class="owl-carousel owl-theme">
        <?php         
        if(have_posts()){  // Check if there are posts         
            while(have_posts()){ // Loop Through Posts
                the_post();
        ?>
        <!-- Image1 -->
        <div class="owl-item">
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                <!-- the_post_thumbnail($size,$attr); -->
                <?php the_post_thumbnail( ' ' , ['class' => 'img-responsive'] );  ?>                       
            </a>                    
        </div>
        <?php                           
            }// End of Loop           
        } //End If Condition 
        ?>
    </div>
</div>
    
</div><!--  End Main Container -->

   
<?php get_footer(); #Impement Footer and include scripts?>