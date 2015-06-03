<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_filter( 'the_author', 'guest_author_name' );
add_filter( 'get_the_author_display_name', 'guest_author_name' );

function guest_author_name( $name ) {
global $post;

$author = get_post_meta( $post->ID, 'guest-author', true );

if ( $author )
$name = $author;

return $name;
}

function word_count()
{
    global $post;
    //Variable: Additional characters which will be considered as a 'word'
    $char_list = '';
    echo str_word_count(strip_tags($post->post_content), 0, $char_list);
}

require( 'footnotes.php' );