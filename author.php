<?php get_header(); ?>

<!-- Start Author Information(Image+Name+Descreption) -->
<div class="container author-page">
    <h1 class="author-page-title"> <u><?php the_author_meta('first_name');?></u> Home Page</h1>
    <!-- Start Row -->
    <div class="row author">
        <!-- Author Avatar -->
        <div class="col-md-3">
            <!-- Get Author Avatar -->
            <?php
                $avatar_arguments = array(
                    'class' => 'img-responsive img-thumbnail center-block'
                );
                echo get_avatar(get_the_author_meta('ID'), 96, '' , 'User Avatar' , $avatar_arguments);
            ?>
        </div>
        <!-- Author Name and Description -->
        <div class="col-md-9 author-info">
            <!-- Get Author Data -->
            <ul class="list-unstyled">
                <li> <span>First Name : </span> <?php the_author_meta('first_name'); ?></li>
                <li> <span>Last Name : </span> <?php   the_author_meta('last_name'); ?></li> 
                <li class="nickname"> <span>Nick Name : </span> <?php the_author_meta('nickname'); ?></li>                         
            </ul>
            <!-- Check if Author has Description -->
            <?php 
            // Check If Author have Biography 
            if(get_the_author_meta('description')){ 
                echo '<div class="biography">';
                the_author_meta('description') ;
                echo '</div>';
            }else{
                echo 'There is No Biography';
            } ?>
        </div>
    </div>
    <!-- End Row -->

    <!-- Start Row Author Statistics -->
    <div class="row author-stats">
        <div class="col-md-4">
            <div class="stat">
                Posts Count
                <span><?php echo count_user_posts(get_the_author_meta('ID')) ?></span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat">
                Comments Count
                <span>
                    <?php
                        $comments_count_args=array(
                            'user_id' => get_the_author_meta('ID'),
                            'count'   => true
                        );
                        echo get_comments($comments_count_args);
                    ?>
                </span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat">
                Total Posts View
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <!-- Start Row Author Posts -->
    <div class="row author-posts">
        <!-- Get Posts Dynamically With Loop -->
        <?php  
            $author_posts_per_page = 2;
            $author_posts_arguments = array(
                'author'        => get_the_author_meta('ID'),
                'posts_per_page'=> $author_posts_per_page
            ); 
            $author_posts = new WP_Query($author_posts_arguments);
            // Check if there are posts
            if($author_posts->have_posts()){
        ?>
        <?php if(count_user_posts(get_the_author_meta('ID')) > $author_posts_per_page){ ?>
        <h3 class="author-posts-title">Latest <?php echo $author_posts_per_page ?> Posts Written By <?php the_author_meta('first_name');?>  </h3>
        <?php }else{ ?>
            <h3 class="author-posts-title">Latest <?php echo count_user_posts(get_the_author_meta('ID')) ?> Posts Written By <?php the_author_meta('first_name');?>  </h3>  
        <?php
        } //End of else   
                // Loop Through Posts
                while($author_posts->have_posts()){
                    $author_posts->the_post();
        ?>
        <div class="post">
            <!-- Start Post -->
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3 ">
                    <?php the_post_thumbnail( ' ' , ['class' => 'img-responsive img-thumbnail'] );  ?>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-9 ">
                    <div class="post-header1">
                        <!-- Post Title -->
                        <h3 class="post-title">
                            <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <!-- Post Date -->
                        <span class="post-date"><i class='fa fa-calendar'></i>  <?php the_time('F j, Y'); ?></span> 
                        <span class="post-comment1"><i class='fa fa-comments-o'></i>  <?php comments_popup_link('0 Comments' , '1 Comment' , '% Comments' , 'comment' , 'Comments Locked'); ?></span>
                    </div>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
            <!-- End Post -->
        </div>
        <?php                           
                }// End of Loop
                
            } //End If Condition 

            //  Get Previous Pages 
            echo '<div class="post-pagination">';
            if(get_previous_posts_link()){
                echo "<span class='prev'>"; previous_posts_link('Prev'); echo "</span>";
            }else{
                echo '<span class="no-prev">Prev</span>';
            }
            //  Get Next Pages 
            if(get_next_posts_link()){
                echo "<span class='next'>"; next_posts_link('Next'); echo "</span>";
            }else{
                echo '<span class="no-next">Next</span>';
            }
            echo '</div>';
            
            /* Restore original Post Data */
            wp_reset_postdata();
        ?>
    </div>
    <!-- End Row -->
    
    <!-- Start Row Author Comments -->
    <?php
        $comments_per_page = 6;
        $comments_arguments=array(
            'user_id'       => get_the_author_meta('ID'),
            'status'        => 'approve',
            'number'        => $comments_per_page,
            'post_status'   => 'publish',
            'post_type'     => 'post'
        ); 
        // Return array of comments that match comments_arguments
        $comments = get_comments($comments_arguments);
        // Loop Through Output Comments Array
        foreach($comments as $comment){
    ?>

        
    <?php
        }//End foreach
    ?>
    <!-- End Row -->

</div>

<?php get_footer(); ?>