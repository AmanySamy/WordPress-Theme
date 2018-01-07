<?php get_header();?>

    <!-- Get Posts Dynamically With Loop -->
    <?php  
        // Check if there are posts
        if(have_posts()){
            // Loop Through Posts
            while(have_posts()){
                the_post();
    ?>
   
     <!-- Start Posts -->
    <section class="posts">
        <div class="container">
            <!-- Start Post -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- <img class="img-responsive" src="/wordpress/wp-content/themes/mytheme/img/post-img.png" alt="post-img"> -->
                    <?php the_post_thumbnail( ' ' , ['class' => 'img-responsive img-thumbnail'] );  ?>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="post-header">
                        <span class="tag text-uppercase"><?php the_category(' ') ?></span>
                        <h3 class="post-title">
                           <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>                       
                        <span class="post-date"><?php the_time('F j, Y'); ?></span>
                        <span class="post-auther"> by <?php the_author_posts_link(); ?></span>
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post-comment">
                        <div class="comment pull-left">
                            <i class='fa fa-comment-o'></i>  <?php comments_popup_link('0 Comments' , '1 Comment' , '% Comments' , 'comment' , 'Comments Locked'); ?>
                        </div>
                        <div class="share pull-right">
                            Share 
                            <i class='fa fa-twitter'></i>
                            <i class='fa fa-instagram'></i>
                            <i class='fa fa-facebook'></i>
                            <i class='fa fa-facebook'></i>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- End Post -->
        </div>
    </section>
    <!-- End Posts -->

    <?php           
                
            }
            // End of Loop
        }
    
    ?>

    
   
<?php get_footer(); #Impement Footer and include scripts?>