<?php

if( !defined( 'ABSPATH' ) ) exit;

function quizbook_add_metaboxes(  ) {

    add_meta_box( 'quizbook_meta_box', 'Answers', 'quizbook_metaboxes', 'quizes', 'normal', 'high', null );
}
add_action( 'add_meta_boxes', 'quizbook_add_metaboxes' );