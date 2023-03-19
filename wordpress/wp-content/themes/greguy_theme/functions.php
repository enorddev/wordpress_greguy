<?php





function adv_theme_support()
{
    register_nav_menus(array(
        'primary'  => __('Primary Menu'),
        'footer'   => __('Footer Menu')
    ));
}

add_action('after_setup_theme', 'adv_theme_support');


function init_widget($id)
{
    register_sidebar(array(
        'name' => 'Box 1',
        'id'   => 'box1',
        'before_widget' => '<div class="box box1">',
        'after_widget'  => '</div>',
        'before_title' => '<h3>',
        'after_title'  => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box 2',
        'id'   => 'box2',
        'before_widget' => '<div class="box box2">',
        'after_widget'  => '</div>',
        'before_title' => '<h3>',
        'after_title'  => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Box 3',
        'id'   => 'box3',
        'before_widget' => '<div class="box box3">',
        'after_widget'  => '</div>',
        'before_title' => '<h3>',
        'after_title'  => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Desc 1',
        'id'   => 'desc1',
        'before_widget' => '<div class="desc1">',
        'after_widget'  => '</div>',
        'before_title' => '<h2>',
        'after_title'  => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Desc 2',
        'id'   => 'desc2',
        'before_widget' => '<div class="desc2">',
        'after_widget'  => '</div>',
        'before_title' => '<h2>',
        'after_title'  => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Desc 3',
        'id'   => 'desc3',
        'before_widget' => '<div class="desc3">',
        'after_widget'  => '</div>',
        'before_title' => '<h2>',
        'after_title'  => '</h2>'
    ));
}
add_action('widgets_init', 'init_widget');


add_theme_support('custom-header', array(
    'video' => true,
));


