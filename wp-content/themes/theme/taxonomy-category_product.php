<?php

$id = get_the_ID();
$url = get_template_directory_uri();
$term_now = get_queried_object();
$term_all = get_terms(
    'category_product',
    array(
        'orderby' => 'name',
        'order'      => 'DESC',
        'hide_empty' => false,
        //        'search' => $search,
    )
);
$term_all = get_terms(
    'category_product',
    array(
        'hide_empty' => false
    )
);
//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//$args=array(
//    'post_type' => array(
//        'product'
//    ),
//    'paged' => $paged,
//    'posts_per_page' => get_option('posts_per_page'),
//);
//$wp_query = new WP_Query( $args );
//echo "<pre>";
//print_r($wp_query); die;
//echo "</pre>";
?>
<?php
get_header();
?>
<main id="main" class="">
    <div class="row category-page-row">
        <div class="col large-12">
            <h2><?php echo $term_now->name ?></h2>
            <div class="shop-container">
                <div class="term-description">
                    <p><?php echo $term_now->description ?></p>
                </div>
                <div class="woocommerce-notices-wrapper"></div>
                <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 equalize-box">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="product-small col has-hover product type-product post-877 status-publish first instock product_cat-hot-special-plastic-bags has-post-thumbnail featured shipping-taxable product-type-simple">
                                <div class="col-inner">
                                    <div class="badge-container absolute left top z-1">
                                    </div>
                                    <div class="product-small box ">
                                        <div class="">
                                            <div class="img-container">
                                                <a href="<?= get_permalink($item->ID) ?>">
                                                    <img width="467px" src="<?= checkImage($item->ID) ?>" data-src="" class="box-image-category" alt="" loading="lazy" srcset="" data-srcset="" style="">
                                                </a>
                                                <style>
                                                    .img-container{
                                                        overflow: hidden; /** DÒNG BẮT BUỘC CÓ **/
                                                        position: relative;
                                                    }
                                                    .box-image-category {
                                                        height: 315px;
                                                        transition: all 1s;
                                                        width: 100%;
                                                    }
                                                    .box-image-category:hover{
                                                        -webkit-transform: scale(1.08);
                                                        transform: scale(1.08);
                                                    }
                                                </style>
                                            </div>
                                            <div class="image-tools is-small top right show-on-hover ">
                                            </div>
                                            <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                            </div>
                                            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>
                                        <div class="box-text box-text-products">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title" style="height: 28px;">
                                                    <a href="<?= the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?= the_title() ?></a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper" style="height: 0px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
get_footer();
?>