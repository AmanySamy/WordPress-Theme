<?php 
    // Check If There are Comments
    if(comments_open()){?>
        <h3 class="comments-count">
            <?php comments_number(); ?>
        </h3>
        
        <?php echo '<ul class="list-unstyled comments-list">';
        
        $comments_arguments = array(
            'max_depth' => 3,
            'type'      => 'comment',
            'avatar_size'=>64
        );
        wp_list_comments($comments_arguments); // List All Comments

        echo '</ul>';

        // Form To Write New Comment
        comment_form();

    }else{
        echo 'Sorry Comments are Disabled'; 
    }