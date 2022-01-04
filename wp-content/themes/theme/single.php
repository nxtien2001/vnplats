<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme
 */

$id = get_the_ID();

//print_r($post); die; // Lấy thông tin bài viết trong chi viết bài viết
$link = get_permalink($post->ID);
//print_r($link); die;

$link_fb = get_field('link_fb', 'option');
$link_witter = get_field('link_witter', 'option');
$link_youtube = get_field('link_youtube', 'option');

//echo "<pre>";
//print_r($post); die;
//echo "</pre>";


?>
<?php
get_header();
?>

<main id="main" class="">
    <div id="content" class="blog-wrapper blog-single page-wrapper">
        <div class="row row-large row-divided ">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="large-9 col">
                        <article id="post-1346" class="post-1346 post type-post status-publish format-standard has-post-thumbnail hentry category-blog post-ftoc">
                            <div class="article-inner ">
                                <header class="entry-header">
                                    <div class="entry-header-text entry-header-text-top text-left">
                                        <h6 class="entry-category is-xsmall">
                                            <a href="" rel="category tag"><?php the_category(); ?></a>
                                        </h6>
                                        <h1 class="entry-title"><?= get_the_title() ?></h1>
                                        <div class="entry-divider is-divider small"></div>
                                    </div>
                                    <div class="entry-image relative">
                                        <?php if (!empty(the_post_thumbnail())) : ?>
                                            <a href="">
                                                <img width="1300" height="732" src="<?= the_post_thumbnail($post->ID) ?>" data-src="" class="attachment-large size-large wp-post-image lazy-load-active" alt="" loading="lazy" srcset="" data-srcset="" sizes="(max-width: 1300px) 100vw, 1300px">
                                            </a>
                                        <?php else : ?>
                                            <!-- <a href="">
                                                <img width="1300" height="732" src="<?= checkImage($post->ID) ?>" data-src="" class="attachment-large size-large wp-post-image lazy-load-active" alt="" loading="lazy" srcset="" data-srcset="" sizes="(max-width: 1300px) 100vw, 1300px">
                                            </a> -->
                                        <?php endif; ?>
                                    </div>
                                </header>
                                <!--                                    phần content-->
                                <div class="entry-content single-page">
                                    <div id="ftwp-container-outer" class="ftwp-in-post ftwp-float-right" style="height: 3px; width: 244.312px;">
                                        <div id="ftwp-container" class="ftwp-wrap ftwp-minimize ftwp-middle-left" style="">
                                            <button type="button" id="ftwp-trigger" class="ftwp-shape-round ftwp-border-none" title="click To Maximize The Table Of Contents">
                                                <span class="ftwp-trigger-icon ftwp-icon-bullet"></span>
                                            </button>

                                        </div>
                                    </div>
                                    <style>
                                        .entry-header-text {
                                            padding: 0.1em 0;
                                        }
                                    </style>
                                    <div id="ftwp-postcontent">
                                        <p>&nbsp;</p>
                                        <!--                                            content-->
                                        <?php the_content(); ?>
                                        <!--                                            end content-->
                                    </div>
                                    <div class="blog-share text-center">
                                        <div class="is-divider medium"></div>
                                        <div class="">

                                            <a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank" class="icon button circle is-outline tooltip facebook tooltipstered">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="https://twitter.com/share?u=<?php echo get_permalink(); ?>" target="_blank" class="icon button circle is-outline tooltip twitter tooltipstered">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--                                    hết phần content-->
                            </div>
                        </article>
                        <div class="wpdiscuz_top_clearing"></div>
                        <!--                            đánh giá-->
                        <div id="wpdiscuz-loading-bar" class="wpdiscuz-loading-bar-unauth"></div>
                        <div id="wpdiscuz-comment-message" class="wpdiscuz-comment-message-unauth"></div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="post-sidebar large-3 col">
                <div class="is-sticky-column">
                    <div class="is-sticky-column__inner">
                        <div id="secondary" class="widget-area " role="complementary">
                            <aside id="woocommerce_recently_viewed_products-2" class="widget woocommerce widget_recently_viewed_products">
                            </aside>
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
