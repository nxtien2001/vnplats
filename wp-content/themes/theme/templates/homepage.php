<?php

/**
 * Created by PhpStorm.
 * User: truongnt
 * Date: 27/04/2020
 * Time: 6:05 PM
 */
/* Template Name:  Homepage */

$id = get_the_ID();
$url = get_template_directory_uri();
$introduces = get_field('introduces', $id);
// $featured_products_item = get_field('featured_products_item', $id); //sp nổi bật
$blog = get_field('blog', $id);
//$potential = get_field('content_potential',$id);
$allCate = get_field('all_cate', $id); //danh mục
$certification = get_field('certification', $id);

$banner = get_field('banner_websites', $id);

//echo "<pre>";
//print_r($blog); die;
//echo "</pre>";
?>
<?php
get_header();
?>
<main id="main" class="">
    <div id="content" role="main">
<!--        slider cũ-->
        <!--<div class="w3-content w3-display-container">
            <?php /*foreach ($banner as $b) : */?>
            <img class="mySlides" src="<?php /*echo $b['banner_website'] */?>" style="width:100%">
            <?php /*endforeach; */?>
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
        </div>
        <style>
            .w3-content{
                width: 100% !important;
            }
            .w3-content{
                max-width: 100% !important;
                max-height: 450px;
                overflow: hidden;
            }
            .mySlides {
                display: none;
                /*height: 450px;*/
            }

            .slideshow-container {
                max-width: 100%;
                position: relative;
                margin: auto;
            }

            /* Next & previous buttons */
            .prev,
            .next {
                /* cursor: pointer; */
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -22px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 2s ease;
                border-radius: 0 3px 3px 0;
                /* user-select: none; */
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
                background-color: burlywood;
            }

            /* The dots/bullets/indicators */
            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                /* transition: background-color 0.6s ease; */
            }

            .active,
            .dot:hover {
                background-color: #717171;
            }

            @-webkit-keyframes fade {
                from {
                    opacity: .4
                }

                to {
                    opacity: 1
                }
            }

            @keyframes fade {
                from {
                    opacity: .4
                }

                to {
                    opacity: 1
                }
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {

                .prev,
                .next,
                .text {
                    font-size: 11px
                }

                .dot {
                    height: 10px;
                    width: 10px;
                }

                @media only screen and (max-width: 500px) {

                    .prev,
                    .next,
                    .text {
                        font-size: 14px
                    }
                }
            }
        </style>-->
        <div class="galleryContainer">
            <div class="slideShowContainer">
                <div id="playPause" onclick="playPauseSlides()"></div>
                <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
                <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
                <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
                <?php foreach ($banner as $b) : ?>
                <div class="imageHolder">
                    <img src="<?php echo $b['banner_website']?>" width="100%">
                    <p class="captionText"></p>
                </div>
                <?php endforeach; ?>
                <style>
                    .imageHolder{
                        max-height: 450px !important;
                        overflow: hidden !important;
                    }
                    .slideShowContainer{
                        max-height: 450px !important;
                        overflow: hidden !important;
                    }
                </style>
            </div>
            <div id="dotsContainer"></div>
        </div>
        <div class="sticky-section-helper"></div>
        <section class="section" id="section_240781599">
            <div class="bg section-bg fill bg-fill bg-loaded">
            </div>
            <div class="section-content relative">
                <div id="gap-1538676242" class="gap-element clearfix" style="display:block; height:auto;">
                    <style>
                        #gap-1538676242 {
                            padding-top: 30px;
                        }
                    </style>
                </div>
                <div class="row" id="row-1361043948">
                    <?php foreach ($introduces as $item) : ?>
                        <div id="col-1002163229" class="col medium-3 small-6 large-3">
                            <div class="col-inner box-shadow-2 box-shadow-3-hover" style="background-color:rgb(241, 241, 241);">
                                <div class="icon-box featured-box icon-box-center text-center">
                                    <div class="icon-box-img" style="width: 60px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <img src="<?= $item['image_introduce'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">
                                        <p style="text-align: center;"><?= $item['title_introduce'] ?><br><strong><?= $item['introduce_des'] ?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <style>
                                #col-1002163229>.col-inner {
                                    padding: 15px 2px 5px 2px;
                                    height: 200px;
                                }
                            </style>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <style>
                #section_240781599 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    background-color: rgb(247, 247, 247);
                }
            </style>
        </section>
        <section class="section" id="section_284647711">
            <div class="bg section-bg fill bg-fill bg-loaded">
            </div>
            <div class="section-content relative">
                <div id="text-296585984" class="text">
                    <p><span style="color: #DA251C;"><?= get_field('title_cate_small') ?></span></p>
                    <h2><?= get_field('title_cate') ?></h2>
                    <style>
                        #text-296585984 {
                            text-align: center;
                        }
                    </style>
                </div>
                <div class="text-center">
                    <div class="is-divider divider clearfix" style="background-color:#DA251C"></div>
                </div>
                <div class="row" id="row-791576017">
                    <div id="col-892529986" class="col small-12 large-12">
                        <div class="col-inner text-left">
                            <div class="row large-columns-4 medium-columns-3 small-columns-2 row-normal">
                                <?php foreach ($allCate as $item) : ?>
                                    <div class="product-category col">
                                        <div class="col-inner">
                                            <a href="<?php echo get_term_link($item->slug, 'category_product'); ?>">
                                                <div class="box box-category has-hover box-normal ">
                                                    <div class="">
                                                        <div class="image-zoom">
                                                            <?php if (!empty(z_taxonomy_image_url($item->term_id))) : ?>
                                                                <img class="lazy-load-actives" src="<?php echo z_taxonomy_image_url($item->term_id); ?>" data-src="<?php echo z_taxonomy_image_url($item->term_id); ?>" style="" alt="" width="400" height="250px">
                                                            <?php else : ?>
                                                                <img class="lazy-load-actives" src="<?php echo checkImage($item->term_id); ?>" data-src="<?php echo checkImage($item->term_id); ?>" alt="" style="" width="400" height="250px">
                                                            <?php endif; ?>
                                                        </div>
                                                        <style>
                                                            .image-zoom{
                                                                overflow: hidden !important;
                                                            }
                                                        </style>
                                                        <script>
                                                            $('.image-zoom').width();
                                                            $('.lazy-load-actives').css('height',$('.image-zoom').width());
                                                        </script>

                                                    </div>
                                                    <div class="box-text text-center">
                                                        <div class="box-text-inner">
                                                            <h5 class="uppercase header-title">
                                                                <?= $item->name ?> </h5>
                                                            <!--                                                            <p class="is-xsmall uppercase count ">-->
                                                            <!--                                                                3 Products </p>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_284647711 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    background-color: rgb(247, 247, 247);
                }
            </style>
        </section>
        <section class="section" id="section_1357182947">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="row row-collapse align-middle" id="row-1821903881">
                    <div id="col-1670458741" class="col medium-6 small-12 large-6">
                        <div class="col-inner dark">
                            <div id="text-562281438" class="text">
                                <p><?php echo get_field('title_samples') ?><br><span style="font-size: 90%;"><?php echo get_field('content_samples') ?></span></span></p>
                                <style>
                                    #text-562281438 {
                                        font-size: 1.3rem;
                                        text-align: center;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-257888831" class="col medium-6 small-12 large-6">
                        <div class="col-inner text-center dark">
                            <a href="<?php echo get_field('link_contact') ?>" target="_self" class="button white is-outline" style="border-radius:99px;">
                                <span><?php _e("Contact now","acplast");?></span>
                            </a>
                        </div>
                        <style>
                            #col-257888831>.col-inner {
                                padding: 15px 0px 0px 0px;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <style>
                #section_1357182947 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    background-color: #DA251C;
                }
            </style>
        </section>
        <section class="section" id="section_1973653818">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div id="text-3776359103" class="text">
                    <!-- <p><span style="color: #008000;"><?= get_field('title_small') ?></span></p> -->
                    <h2><?= get_field('title_potential') ?></h2>
                    <style>
                        #text-3776359103 {
                            text-align: center;
                        }
                    </style>
                </div>
                <div class="text-center">
                    <div class="is-divider divider clearfix" style="background-color:#DA251C"></div>
                </div>
                <div id="gap-1744015912" class="gap-element clearfix" style="display:block; height:auto;">
                    <style>
                        #gap-1744015912 {
                            padding-top: 30px;
                        }
                    </style>
                </div>
                <div class="row align-middle" id="row-1889495356">
                    <?php $link1 = get_field('link_new_1') ?>
                    <?php $link2 = get_field('link_new_2') ?>
                    <div class="section-about">
                        <div class="containers">
                            <div class="row-section-about">
                                <div class="about-left">
                                    <div class="about-left-item">
                                        <h5><?php echo get_field('title_new_1') ?></h5>
                                        <p><?php echo get_field('new_content_1') ?></p>
                                        <?php if (!empty($link1)) : ?>
                                            <a href="<?php echo $link1 ?>"><?php _e("LEARN MORE","acplast");?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="about-right">
                                    <div class="about-right-item">
                                        <h5><?php echo get_field('title_new_2') ?></h5>
                                        <p><?php echo get_field('new_content_2') ?></p>
                                        <?php if (!empty($link2)) : ?>
                                            <a href="<?php echo $link2 ?>"><?php _e("LEARN MORE","acplast");?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <style>
                                    .about-left {
                                        background-image: url("<?= get_field('new_image_1') ?>");
                                        background-size: cover;
                                        text-align: center;
                                    }

                                    .about-right {
                                        background-image: url("<?= get_field('new_image_2') ?>");
                                        background-size: cover;
                                        text-align: center;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_1973653818 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    background-color: rgb(247, 247, 247);
                }
            </style>
        </section>
        <section class="section" id="section_1782766522">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="row align-equal" id="row-1669357546">
                    <div id="col-436645168" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div id="text-1858389514" class="text">
                                <p><?php echo get_field('title_contact') ?><br>
                                    <style>
                                        #text-1858389514 {
                                            font-size: 1.3rem;
                                            text-align: center;
                                        }

                                        @media (min-width:550px) {
                                            #text-1858389514 {
                                                text-align: right;
                                            }
                                        }
                                    </style>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="col-2015319416" class="col medium-6 small-12 large-6">
                        <div class="col-inner text-center">
                            <a href="<?php echo get_field('link_more_get') ?>" target="_self" class="button secondary" style="border-radius:25px;background-color:#DA251C !important;">
                                <span><?php _e("get your free quote","freequote");?></span>
                            </a>
                        </div>
                    </div>
                    <style>
                        #row-1669357546>.col>.col-inner {
                            padding: 45px 0px 0px 0px;
                        }
                    </style>
                </div>
            </div>
            <style>
                #section_1782766522 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    background-color: rgba(0, 0, 0, 0.093);
                }
            </style>
        </section>
        <section class="section" id="section_1876739411">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div id="text-1523636052" class="text">
                    <h2><a href="<?php the_permalink(); ?>"><span style="color: #DA251C;"><?= get_field('blog_title') ?></span></a></h2>
                    <style>
                        #text-1523636052 {
                            text-align: center;
                        }
                    </style>
                </div>
                <div class="text-center">
                    <div class="is-divider divider clearfix" style="background-color:#DA251C;">
                    </div>
                </div>
                <div class="row large-columns-4 medium-columns-2 small-columns-1">
                    <?php foreach ($blog as $item) : ?>
                        <div class="col post-item">
                            <div class="col-inner">
                                <a href="<?php the_permalink($item->ID); ?>" class="plain">
                                    <div class="box box-default box-text-bottom box-blog-post has-hover" style="">
                                        <div class="">
                                            <div class="image-cover" style="padding-top:56%;">
                                                <img width="100%" height="100%" src="<?= checkImage($item->ID) ?>" data-src="" class="img-blog-home" alt="" loading="lazy" srcset="" data-srcset="" style="">
                                            </div>
                                        </div>
                                        <div class="box-text text-left">
                                            <div class="box-text-inner blog-post-inner">
                                                <h5 class="post-title is-large "><?= $item->post_title ?></h5>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt ">
                                                    <?php if (!empty($item->post_excerpt)) : ?>
                                                        <?= $item->post_excerpt ?>
                                                    <?php else : ?>
                                                        <?= cutString($item->post_content, 150) ?>
                                                    <?php endif; ?>
                                                </p>
                                                <style>
                                                    .post-title:hover{
                                                        color: #DA251C;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <style>
                #section_1876739411 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                }
            </style>
        </section>
    </div>
</main>


<?php
get_footer();
?>

<!--slider cũ-->
<!--<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>-->
<!--<script type="text/javascript" src="<?/*= $url */?>/asset/sliderw3.js" ></script>
<script type="text/javascript" src="<?/*= $url */?>/asset/slideww3.js" ></script>-->
<script type="text/javascript" src="<?= $url ?>/asset/myScript.js" ></script>

