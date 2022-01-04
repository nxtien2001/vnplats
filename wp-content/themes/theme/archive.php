<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme
 */


$id = get_the_ID();
$term_now = get_queried_object();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'order' => 'DESC',
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $paged,
    //    'post__not_in' => array($post_hot[0]->ID,$post_hot[1]->ID),
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $term_now->term_id,
        ),
    ),
);
$query_post = new WP_Query($args);
$post_list = $query_post->posts;

// echo "<pre>";
// print_r($post_list);
// die;
// echo "</pre>";
?>
<?php
get_header();
?>

<main id="main" class="">
    <div id="content" class="blog-wrapper blog-archive page-wrapper">
        <header class="archive-page-header">
            <div class="row">
                <div class="large-12 text-center col">
                    <h1 class="page-title is-large uppercase">
                        Category Archives: <span><?php single_cat_title(); ?></span> </h1>
                </div>
            </div>
        </header>
        <div class="row row-large row-divided ">
            <div class="large-9 col">
                <div class="row large-columns-1 medium-columns- small-columns-1">
                    <?php foreach ($post_list as $item) : ?>
                        <div class="col post-item">
                            <div class="col-inner">
                                <a href="<?php the_permalink($item->ID); ?>" class="plain">
                                    <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                                        <div class="box-image" style="width:40%;">
                                            <div class="image-cover" style="padding-top:56%;">

                                                <img width="1300" height="732" src="<?= checkImage($item->ID) ?>" data-src="" class="attachment-medium size-medium wp-post-image lazy-load-active" alt="" loading="lazy" srcset="" data-srcset="" sizes="(max-width: 1300px) 100vw, 1300px">
                                            </div>
                                        </div>
                                        <div class="box-text text-left">
                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large "><?= $item->post_title ?></h5>
                                                <div class="is-divider"></div>
                                                <!-- <p class="from_the_blog_excerpt ">&nbsp; <?php the_excerpt(); ?> </p> -->
                                                <p class="from_the_blog_excerpt ">
                                                    <?php if (!empty($item->post_excerpt)) : ?>
                                                        <?= $item->post_excerpt ?>
                                                    <?php else : ?>
                                                        <?= cutString($item->post_content, 150) ?>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!--<ul class="page-numbers nav-pagination links text-center">
                        <li><span aria-current="page" class="page-number current">1</span></li>
                        <li><a class="page-number" href="https://vnplast.com/blog/page/2/">2</a></li>
                        <li><a class="next page-number" href="https://vnplast.com/blog/page/2/"><i
                                        class="icon-angle-right"></i></a></li>
                    </ul>-->
                <div class="paginate">
                    <?php echo paginate_links(); ?>
                </div>
                <style>
                    .paginate {
                        display: grid;
                        grid-template-columns: 1fr 1fr 1fr;
                        color: red;
                        text-align: center;
                        margin: auto;
                        width: 400px;
                        margin-bottom: 50px;
                    }
                </style>
            </div>
            <div class="post-sidebar large-3 col">
                <div class="is-sticky-column">
                    <div class="is-sticky-column__inner">
                        <div id="secondary" class="widget-area " role="complementary">
                            <?php echo get_sidebar() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php

get_footer();
