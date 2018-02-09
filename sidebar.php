<!-- Add First Widget About Me -->
<div class="about-me">
    <!-- User Avatar -->
    <div class="user-img" >
        <?php
            $avatar_arguments = array(
                'class' => 'img-responsive img-thumbnail center-block img-circle'
            );
            echo get_avatar(get_the_author_meta('ID'), 96, '' , 'User Avatar' , $avatar_arguments);
        ?>
        <!-- <img class="img-responsive" src="wp-content\themes\mytheme\img\About-me.png" alt="User Image"> -->
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

<div class="widget">
    <h3 class="widget-title">
        widget Title
    </h3>
    <div class="widget-content">
        Content
    </div>
</div>

