<!-- Add First Widget About Me -->
<div class="about-me">
    <!-- User Avatar -->
    <div class="user-img" >
        <?php
            $avatar_arguments = array(
                'class' => 'img-responsive img-thumbnail center-block img-circle'
            );
            // echo get_avatar(get_the_author_meta('ID'), 96, '' , 'User Avatar' , $avatar_arguments);
        ?>
        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/About-me.png" alt="User Image">
    </div>    
    <h3 class="title text-center text-uppercase">About Me</h3>
    
    <!-- User Description -->
    <?php  if(get_the_author_meta('description')){ // Check If Author have Biography ?>
        <p class="text">
            <i> <?php the_author_meta('description') ; ?> </i> 
        </p>
    <?php }else{ ?>
        <p class="text">
            <i> Hi! Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever </i> 
        </p>
    <?php } ?>
    
    <!-- Social Links -->
    <div class="social">
        <span class="follow-title text-center">follow me on</span>
        <ul class="list-inline links">
            <li> <i class="fa fa-facebook"></i> </li>
            <li> <i class="fa fa-twitter"></i> </li>
            <li> <i class="fa fa-linkedin"></i> </li>
            <li> <i class="fa fa-facebook"></i> </li>
            <li> <i class="fa fa-google-plus"></i> </li>
        </ul>
    </div>
</div>
<!-- Second Widget [Subscribe] -->
<div class="widget">
    <h3 class="widget-title text-center text-uppercase"> NEWSLETTER </h3>
    <div class="widget-content">
        <!-- Subscribe Form -->
       <form action="">
          <input type="email" name="email" value=" Your email address">  
          <input type="submit" value="Subscribe">
       </form>
    </div>
</div>
<!-- Widget 3 [FOLLOW@NOEMI.THEME] -->
<div class="widget">
    <h3 class="widget-title text-center text-uppercase">FOLLOW@NOEMI.THEME </h3>
    <div class="widget-content">
       <div class="row">
            <div class="col-md-4 col-sm-4 ">
                <div class="post-img">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>\img\1.png" alt="Post Image">
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
                <div class="post-img">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>\img\2.png" alt="Post Image">
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
                <div class="post-img">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>\img\3.png" alt="Post Image">
                </div>
            </div>
       </div>
       <div class="row">
            <div class="col-md-4 col-sm-4 ">
                <div class="post-img">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>\img\4.png" alt="Post Image">
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
                <div class="post-img">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>\img\5.png" alt="Post Image">
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
                <div class="post-img">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>\img\6.png" alt="Post Image">
                </div>
            </div>
       </div>
       <div class="row">
            <div class="col-md-4 col-sm-4 ">
                <div class="post-img">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>\img\7.png" alt="Post Image">
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
                <div class="post-img">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>\img\8.png" alt="Post Image">
                </div>
            </div>
            <div class="col-md-4 col-sm-4 ">
                <div class="post-img">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>\img\9.png" alt="Post Image">
                </div>
            </div>
       </div>
    </div>
</div>

<!-- Widget 4 [Categories] -->
<div class="widget">
    <h3 class="widget-title text-center text-uppercase">Categories</h3>
    <div class="widget-content">
       <ul class="list-unstyled categories">
           <?php 
            $list_categories_args = array(               
                'echo'                => true,
                'order'               => 'ASC',
                'orderby'             => 'name',
                'show_count'          => true,
                'hierarchical'        => false,
                'show_option_none'    => __( 'No categories' ),
                'title_li'            => __( '' ),
            );
            wp_list_categories($list_categories_args); 
            ?>
       </ul>
    </div>
</div>
<!-- Widget 5 [recent Posts] -->
<div class="widget">
    <h3 class="widget-title text-center text-uppercase">recent Posts</h3>
    <div class="widget-content">
    <?php 
        $args = array(
            'numberposts' => 5,
            'offset' => 0,
            'category' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'draft, publish, future, pending, private',
            'suppress_filters' => true
        );
        
        $recent_posts = wp_get_recent_posts( $args, ARRAY_A );?>
        <ul class="recent_posts">
            <?php foreach( $recent_posts as $recent ){?>           
            <li>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- Displays the image of the current post.  -->
                        <?php echo get_the_post_thumbnail( $recent['ID'], 'thumbnail', array( 'class' => 'img-responsive' ) ); ?>   
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <!-- Displays the time of the current post.  -->
                        <span class="recent-post-date"><?php the_time('F j, Y'); ?></span>
                        <!-- Displays the title of the current post.  -->
                        <a class="recent-post-title" href='<?php echo get_permalink($recent["ID"]) ?>'><?php echo $recent["post_title"] ?></a> 
                    </div>
                </div>
            </li>            
            <?php } ?>
        </ul>
    </div>
</div>
<!-- Widget 6 [Search Form] -->
<div class="widget">  
    <div class="widget-content">
        <?php get_search_form(); ?>
    </div>
</div>

