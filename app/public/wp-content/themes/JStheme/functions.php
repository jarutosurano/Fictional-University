<?php

# Enqueueing Main Styles
function university_files()
{
    # Enqueue the main styles of the theme by linking to the stylesheet URI.
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

# Hooking the Function to WordPress Action
add_action('wp_enqueue_scripts', 'university_files');
# This code registers an action hook to enqueue scripts and styles for a WordPress theme.
# The 'add_action' function is used to attach the 'university_files' function to the 'wp_enqueue_scripts' action hook.
# The 'wp_enqueue_scripts' action hook is commonly employed to load CSS and JavaScript files, thereby allowing you to customize your theme's appearance and functionality.
