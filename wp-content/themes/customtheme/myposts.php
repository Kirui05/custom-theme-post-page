<?php
/*
Template Name: My Posts page
*/
?>

<?php get_header() ?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'paged' => $paged
);
$query = new WP_Query($args);

while ($query->have_posts()) : $query->the_post();
    // Display post content using appropriate template
endwhile;

// Pagination
echo paginate_links(array('total' => $query->max_num_pages));

?>

<?php get_footer() ?>
