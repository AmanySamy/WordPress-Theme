<?php 
    // Check If There are Comments
    if(comments_open()){
        // wp_list_comments();
        foreach($comments as $comment){
            comment_author();
        }
    }else{
        echo 'Sorry Comments are Disabled';
    }