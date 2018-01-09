<?php get_header();?>

    
   
     <!-- Start Posts -->
    <section class="posts col-md-8">
        <!-- Get Posts Dynamically With Loop -->
        <?php  
            // Check if there are posts
            if(have_posts()){
               the_post(); 
        ?>
        <div class="post">
            <!-- Start Post -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 ">
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
                        <?php the_content(); ?>
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
             
            } //End If Condition 

            //  Get Previous Pages 
            if(get_previous_posts_link()){
                previous_posts_link('Prev');
            }else{
                echo 'No Previous Pages';
            }
            //  Get Next Pages 
            if(get_next_posts_link()){
                next_posts_link('Next');
            }else{
                echo 'No Next Pages';
            }
        ?>

        
    </section>
    <!-- End Posts -->



    <!-- Start Aside -->
    <aside class="sidebar col-md-4">
    
    </aside>
    <!-- End Aside -->
    <div class="clearfix"></div>

    
   
<?php get_footer(); #Impement Footer and include scripts?>