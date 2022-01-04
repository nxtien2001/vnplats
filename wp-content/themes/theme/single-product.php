<!--flickity-viewport dòng 61 -->
<?php
//echo '<pre>';
//print_r($post); die;
//echo cutString(get_the_excerpt($bn->ID), 100);
$id = get_the_ID();
$attribute = get_field('attribute', $id);
$attributes = get_field('attributes', $id);
$image_details = get_field('image_details', $id);

$link_get_free_quote = get_field('link_get_free_quote', 'option');
$title_details = get_field('title_details', 'option');
$title_related = get_field('title_related', 'option');
$question = get_field('question', 'option');
$chat = get_field('chat', 'option');
$linkchat = get_field('link_chat', 'option');

$categories = get_the_category($post->ID);
//echo "<pre>";
//print_r($categories); die();

?>
<?php get_header() ?>
<main id="main" class="">
    <div class="shop-container">
        <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
        </div>
        <div id="product-877" class="product type-product post-877 status-publish first instock product_cat-hot-special-plastic-bags has-post-thumbnail featured shipping-taxable product-type-simple">
            <div class="custom-product-page">
                <section class="section" id="section_281753336">
                    <div class="bg section-bg fill bg-fill bg-loaded">
                    </div>
                    <div class="section-content relative">
                        <div id="gap-143115396" class="gap-element clearfix" style="display:block; height:auto;">
                            <style>
                                #gap-143115396 {
                                    padding-top: 30px;
                                }
                            </style>
                        </div>
                        <div class="row row-large align-center" id="row-1956636045">
                            <div id="col-2110816561" class="col medium-6 small-12 large-6">
                                <div class="col-inner">
                                    <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1;">
                                        <div class="badge-container is-larger absolute left top z-1">
                                        </div>
                                        <div class="image-tools absolute top show-on-hover right z-3">
                                        </div>
                                        <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half flickity-enabled slider-lazy-load-active" data-flickity-options="{
                &quot;cellAlign&quot;: &quot;center&quot;,
                &quot;wrapAround&quot;: true,
                &quot;autoPlay&quot;: false,
                &quot;prevNextButtons&quot;:true,
                &quot;adaptiveHeight&quot;: true,
                &quot;imagesLoaded&quot;: true,
                &quot;lazyLoad&quot;: 1,
                &quot;dragThreshold&quot; : 15,
                &quot;pageDots&quot;: false,
                &quot;rightToLeft&quot;: false       }" tabindex="0">
                                            <div class="" style="height: 700.5px; touch-action: pan-y;">
                                                <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                                                    <div data-thumb="" class="woocommerce-product-gallery__image slide first is-selected" style="position: absolute; left: 0%;text-align: center">
                                                        <a href="<?= the_ID() ?>"><img width="800" height="600" src="<?= checkImage($post->ID) ?>" class="wp-post-images" alt="" loading="lazy" title="" style=""></a>
                                                    </div>
                                                    <style>
                                                        .wp-post-images {
                                                            /*width: 550px;*/
                                                            /*height: 550px;*/
                                                            /*height: auto;*/
                                                        }
                                                    </style>
                                                    <script>
                                                        $('.woocommerce-product-gallery__image').width();
                                                        $('.wp-post-images').css('height',$('.woocommerce-product-gallery__image').width());
                                                    </script>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div id="col-874746303" class="col medium-6 small-12 large-6">
                                <div class="col-inner">
                                    <div class="product-breadcrumb-container is-normal">
                                        <nav class="woocommerce-breadcrumb breadcrumbs "><a href="https://vnplast.com/">Home</a>
                                            <span class="divider">/</span> <a href="https://vnplast.com/hot-special-plastic-bags/">Hot &amp;
                                                Special Plastic Bags</a>
                                        </nav>
                                    </div>
                                    <div class="product-title-container">
                                        <h1 class="product-title product_title entry-title">
                                            <?php echo the_title() ?></h1>
                                        <div class="is-divider small"></div>
                                    </div>
                                    <div class="product-short-description">
                                        <p>
                                            <?php echo $attributes ?>
                                        </p>
                                    </div>
                                    <a href="<?php echo $link_get_free_quote ?>" target="_self" class="button primary lowercase" style="border-radius:99px;">
                                        <span>Get free quote</span>
                                    </a>
                                    <p>
                                        <strong>
                                            <a href="#">Live chat
                                            </a> | <a href="#" target="_blank" rel="noopener">Whatsapp us</a>
                                        </strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #section_281753336 {
                            padding-top: 0px;
                            padding-bottom: 0px;
                            background-color: rgba(0, 0, 0, 0.064);
                        }
                    </style>
                </section>
                <section class="section" id="section_220421516">
                    <div class="bg section-bg fill bg-fill  bg-loaded">
                    </div>
                    <div class="section-content relative">
                        <div class="row row-large align-middle align-center" id="row-525646449">
                            <div id="col-428659837" class="col small-12 large-12">
                                <div class="col-inner text-left">
                                    <div class="product-page-accordian">
                                        <div class="accordion" rel="1">
                                            <div class="accordion-item">
                                                <a class="accordion-title plain active" href="javascript:void();">
                                                    <button class="toggle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                                                        </svg>
                                                    </button>
                                                    <?= $title_details ?> </a>
                                                <div class="accordion-inner" style="display: block;">
                                                    <div id="gallery-2" class="gallery galleryid-877 gallery-columns-2 gallery-size-medium">
                                                        <!--hình ảnh chi tiết-->
                                                        <?php if (!empty($image_details)) : ?>
                                                            <?php foreach ($image_details as $item) : ?>
                                                                <figure class="gallery-item">
                                                                    <div class="gallery-icon landscape">
                                                                        <a href="">
                                                                            <img width="800" height="600" src="<?= $item['image'] ?>" data-src="<?= $item['image'] ?>" class="detail" alt="" loading="lazy" aria-describedby="" srcset="" data-srcset="">
                                                                        </a>
                                                                        <style>
                                                                            .detail {
                                                                                object-fit: contain;
                                                                                height: 467px;
                                                                            }
                                                                        </style>
                                                                    </div>
                                                                    <style>
                                                                    </style>
                                                                    <figcaption class="wp-caption-text gallery-caption" id="gallery-2-1076">
                                                                        <?= $item['image_name'] ?>
                                                                    </figcaption>
                                                                </figure>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="rmp-widgets-container rmp-wp-plugin rmp-main-container js-rmp-widgets-container js-rmp-widgets-container--877" data-post-id="877">
                                                        <?php if (!empty(get_field('detail'))) : ?>
                                                            <?php echo get_field('detail') ?>
                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #section_220421516 {
                            padding-top: 30px;
                            padding-bottom: 30px;
                        }
                    </style>
                </section>
                <section class="section" id="section_910986632">
                    <div class="bg section-bg fill bg-fill  bg-loaded">
                    </div>
                    <div class="section-content relative">
                        <div class="row row-collapse align-equal" id="row-715585494">
                            <div id="col-101604321" class="col small-12 large-12">
                                <div class="col-inner text-center">
                                    <h4 style="text-align: center;"><?php echo $question ?><br>
                                        <a href="<?php echo $linkchat ?>">
                                            <!-- javascript:void(Tawk_API.toggle()) -->
                                            <strong>
                                                <span style="text-decoration: underline; color: #DA251C;"><?php echo $chat ?></span>
                                            </strong>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #section_910986632 {
                            padding-top: 30px;
                            padding-bottom: 30px;
                            background-color: rgba(0, 0, 0, 0.11);
                        }
                    </style>
                </section>
                <section class="section" id="section_1663914878">
                    <div class="bg section-bg fill bg-fill  bg-loaded">
                    </div>
                    <div class="section-content relative">
                        <div class="row" id="row-853262043">
                            <div id="col-1231578428" class="col small-12 large-12">
                                <div class="col-inner">
                                    <div class="related related-products-wrapper product-section">
                                        <h3 class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                            <?php echo $title_related ?> </h3>
                                        <div class="row equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small">
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'category_product');
                                            $curent_term = $terms[0]->slug;
                                            //                                            echo "<pre>";
                                            //                                            print_r($terms); die;
                                            //                                            echo "</pre>";
                                            if ($curent_term) {
                                                $args = array(
                                                    'category_product' => $curent_term,
                                                    'post__not_in' => array(get_the_ID()),
                                                    'showposts' => 4,
                                                    'caller_get_posts' => 1,
                                                    'post-type' => 'category_product'
                                                );
                                                $my_query = new WP_Query($args);
                                                if ($my_query->have_posts()) {
                                                    while ($my_query->have_posts()) {
                                                        $my_query->the_post(); ?>
                                                        <div class="product-small col has-hover product type-product post-880 status-publish instock product_cat-hot-special-plastic-bags has-post-thumbnail featured shipping-taxable product-type-simple">
                                                            <div class="col-inner">
                                                                <div class="badge-container absolute left top z-1">
                                                                </div>
                                                                <div class="product-small box ">
                                                                    <div class="">
                                                                        <div class="image-zoom">
                                                                            <a href="<?php the_permalink(); ?>">
                                                                                <img width="400" height="400" src="<?= checkImage($post->ID) ?>" data-src="" class="attachment-woocommerce_thumbnail" alt="<?php the_title() ?>" loading="lazy" srcset="" data-srcset="" > </a>
                                                                        </div>
                                                                        <style>
                                                                            .attachment-woocommerce_thumbnail {
                                                                                /*height: 315px;*/
                                                                            }
                                                                            .image-zoom{
                                                                                overflow: hidden;
                                                                            }
                                                                        </style>
                                                                        <script>
                                                                            $('.image-zoom').width();
                                                                            $('.attachment-woocommerce_thumbnail').css('height',$('.image-zoom').width());
                                                                        </script>
                                                                        <div class="image-tools is-small top right show-on-hover">
                                                                        </div>
                                                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                                        </div>
                                                                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-text box-text-products">
                                                                        <div class="title-wrapper">
                                                                            <p class="name product-title woocommerce-loop-product__title" style="height: 28px;"><a href="<?php the_permalink(); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php the_title() ?></a></p>
                                                                        </div>
                                                                        <div class="price-wrapper" style="height: 0px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #section_1663914878 {
                            padding-top: 30px;
                            padding-bottom: 30px;
                        }
                    </style>
                </section>
                <div id="product-sidebar" class="mfp-hide">
                    <div class="sidebar-inner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>