<?php
/* Template Name: SanPham */

$id = get_the_ID();
$url = get_template_directory_uri();
$list_products = get_field('list_products', $id);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => array(
        'product'
    ),
    'paged' => $paged,
    'posts_per_page' => get_option('posts_per_page'),
);
$the_query = new WP_Query($args);
$a = $the_query->posts;
//echo "<pre>";
//print_r($wp_query); die;
//echo "</pre>";
?>
<?php
get_header();
?>
<div class="shop-page-title category-page-title page-title ">
    <div class="page-title-inner flex-row  medium-flex-wrap container">
        <div class="flex-col flex-grow medium-text-center">
            <h1 class="shop-page-title is-xlarge"><?php echo the_title() ?></h1>
            <!--<div class="is-small">
                <nav class="woocommerce-breadcrumb breadcrumbs "><a href="https://vnplast.com/">Home</a> <span class="divider">/</span> Products</nav>
            </div>-->
        </div>
    </div>
</div>
<main id="main" class="">
    <div class="row category-page-row">
        <div class="col large-12">
            <div class="shop-container">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 equalize-box">
                    <?php foreach ($a as $item) : ?>
                        <div class="product-small col has-hover product type-product post-907 status-publish first instock product_cat-reuse-recycled-plastic-bags has-post-thumbnail featured shipping-taxable product-type-simple">
                            <div class="col-inner">
                                <div class="badge-container absolute left top z-1">
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-zoom">
                                            <a href="<?= get_permalink($item->ID) ?>">
                                                <img src="<?= checkImage($item->ID) ?>" data-src="" id="product-image" class="setHeight <!--attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazy-load-active--> " alt="" loading="lazy" srcset="" style="" data-srcset="">
                                            </a>
                                            <style>
                                                .attachment-woocommerce_thumbnail {
                                                    width: 300px;
                                                    height: 320px;
                                                }
                                            </style>
                                            <script>
                                                $('.image-zoom').width();
                                                $('.setHeight').css('height',$('.image-zoom').width());
                                            </script>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover">
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>
                                    <div class="box-text box-text-products">
                                        <div class="title-wrapper">
                                            <p class="name product-title woocommerce-loop-product__title" style="height: 28px;"><a href="<?= get_permalink($item->ID) ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?= $item->post_title ?></a></p>
                                        </div>
                                        <div class="price-wrapper" style="height: 0px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="paginate">
        <?php echo paginate_links( array(
            'base' => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' =>  $the_query->max_num_pages,
            'prev_text'          => __('<i class="fa fa-chevron-left" aria-hidden="true"></i>'),
            'next_text'          => __('<i class="fa fa-chevron-right" aria-hidden="true"></i>'),
        ) ); ?>
<!--        --><?php //echo paginate_links(); ?>
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
</main>
<?php get_footer(); ?>