<?php

/* Template Name:  About */

$id = get_the_ID();
$url = get_template_directory_uri();
$trade_capacity = get_field('trade_capacity', $id);
$ertificates = get_field('ertificates', $id);
$factory = get_field('factory', $id);
$main_product_cate = get_field('main_product_cate', $id);
$title_small = get_field('title_small', $id);
//echo "<pre>";
//print_r($main_product_cate); die;
//echo "</pre>";
?>
<?php
get_header();
?>
<main id="main" class="">
    <div id="content" role="main" class="content-area">
        <section class="section has-parallax" id="section_1857751019">
            <div class="bg section-bg fill bg-fill parallax-active bg-loaded" data-parallax-container=".section" data-parallax-background="" data-parallax="-5" style="height: 536.667px; transform: translate3d(0px, -50.64px, 0px); backface-visibility: hidden;">
                <div class="section-bg-overlay absolute fill"></div>
            </div>
            <div class="section-content relative">
                <div id="text-725372754" class="text">
                    <p><?php echo $title_small ?></p>
                    <h1><?= get_field('title') ?></h1>
                    <style>
                        #text-725372754 {
                            text-align: center;
                            color: rgb(255, 255, 255);
                        }

                        #text-725372754>* {
                            color: rgb(255, 255, 255);
                        }
                    </style>
                </div>
            </div>
            <style>
                #section_1857751019 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    min-height: 480px;
                }

                #section_1857751019 .section-bg-overlay {
                    background-color: rgba(0, 0, 0, .5);
                }

                #section_1857751019 .section-bg.bg-loaded {
                    background-image: url(<?php echo get_field('banner') ?>);
                }
            </style>
        </section>
        <section class="section" id="section_1125143287">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="row align-center" id="row-1437453106">
                    <div id="col-1930047936" class="col medium-10 small-12 large-10">
                        <div class="col-inner text-left">
                            <p class="alt-font" style="text-align: center; font-size: 250%;"><?= get_field('title_ablout') ?></p>
                            <?php echo get_field('content_about') ?>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_1125143287 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    background-color: rgb(231, 231, 231);
                }
            </style>
        </section>
        <div class="row" id="row-744769393">
            <div id="col-83472777" class="col small-12 large-12">
                <div class="col-inner">
                    <div id="gap-1728962764" class="gap-element clearfix" style="display:block; height:auto;">
                        <style>
                            #gap-1728962764 {
                                padding-top: 30px;
                            }
                        </style>
                    </div>
                    <div class="row align-equal row-box-shadow-1" id="row-464315107">
                        <div id="col-766463990" class="col medium-6 small-12 large-6">
                            <div class="col-inner" style="background-color:rgb(100, 100, 100);">
                                <div id="text-3454342266" class="text">
                                    <h2><span style="color: #ffffff;"><?= get_field('title_cate') ?></span></h2>
                                    <ol>
                                        <?php
//                                        $args = array(
//                                            'type' => 'product',
//                                            'hide_empty' => 0,
//                                            'taxonomy' => 'category_product'
//                                        );
//                                        $categories = get_categories($args);
                                        $categories = get_field('main_product_cate',$id);
                                        foreach ($categories as $item) { ?>
                                            <li><span style="color: #ffffff;"><a style="color: #ffffff;" href="<?= get_term_link($item->term_id) ?>"><?= $item->name ?></a></span></li>
                                        <?php } ?>
                                    </ol>
                                    <style>
                                        #text-3454342266 {
                                            color: rgb(255, 255, 255);
                                        }

                                        #text-3454342266>* {
                                            color: rgb(255, 255, 255);
                                        }
                                    </style>
                                </div>
                            </div>
                            <style>
                                #col-766463990>.col-inner {
                                    border-radius: 20px;
                                }
                            </style>
                        </div>
                        <div id="col-1949674912" class="col medium-6 small-12 large-6">
                            <div class="col-inner" style="background-color:rgb(100, 100, 100);">
                                <div id="text-4154683614" class="text">
                                    <h2><span style="color: #ffffff;"><?= get_field('potential_title') ?></span></h2>
                                    <ul>
                                        <?php foreach ($trade_capacity as $item) : ?>
                                            <li><span style="color: #ffffff;"><?= $item['capacity'] ?></span></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <style>
                                        #text-4154683614 {
                                            color: rgb(255, 255, 255);
                                        }

                                        #text-4154683614>* {
                                            color: rgb(255, 255, 255);
                                        }
                                    </style>
                                </div>
                            </div>
                            <style>
                                #col-1949674912>.col-inner {
                                    border-radius: 20px;
                                }
                            </style>
                        </div>
                        <style>
                            #row-464315107>.col>.col-inner {
                                padding: 30px 30px 30px 30px;
                            }
                        </style>
                    </div>
                    <div id="text-3956017729" class="text">
                        <h2><?= get_field('ertificates_title'); ?></h2>
                        <style>
                            #text-3956017729 {
                                text-align: center;
                            }
                        </style>
                    </div>
                    <div class="text-center">
                        <div class="is-divider divider clearfix" style="background-color:#183883"></div>
                    </div>
                    <div class="center">
                        <div class="row  lightbox-multi-gallery large-columns-4 medium-columns-3 small-columns-2 slider row-slider slider-nav-simple slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 3000}' style="text-align: center;">
                            <?php foreach ($ertificates as $item) : ?>
                                <div class="gallery-col col">
                                    <div class="col-inner">
                                        <?php if (!empty($item['certificates_image'])) : ?>
                                            <a class="" href="<?= $item['certificates_image'] ?>" title="">
                                                <div class="box has-hover gallery-box box-default">
                                                    <div class="">
                                                        <img width="212" height="300" src="<?= $item['certificates_image'] ?>" data-src="<?= $item['certificates_image'] ?>" class="certificates" alt="" loading="lazy" ids="270,1234,297,299,300,302,303,304,305" style="default" lightbox_image_size="original" type="slider" slider_nav_style="simple" auto_slide="3000" image_hover="zoom" text_align="center" />
                                                    </div>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <style>
                        .certificates {
                            width: 300px;
                            height: 400px;
                        }
                        .flickity-button-icon{
                            margin-top: 50px !important;
                        }
                    </style>
                </div>
            </div>
        </div>
        <div id="text-2255604660" class="text">
            <h2><?= get_field('factory_title') ?></h2>
            <style>
                #text-2255604660 {
                    text-align: center;
                }
            </style>
        </div>
        <div class="text-center">
            <div class="is-divider divider clearfix" style="background-color:#183883"></div>
        </div>
        <style>
            #gallery-251810770 .grid-col-1 {
                height: 600px
            }

            #gallery-251810770 .grid-col-1-2 {
                height: 300px
            }

            #gallery-251810770 .grid-col-1-3 {
                height: 200px
            }

            #gallery-251810770 .grid-col-2-3 {
                height: 400px
            }

            #gallery-251810770 .grid-col-1-4 {
                height: 150px
            }

            #gallery-251810770 .grid-col-3-4 {
                height: 450px
            }


            /* Tablet */
            @media (max-width: 850px) {
                #gallery-251810770 .grid-col-1 {
                    height: 400px
                }

                #gallery-251810770 .grid-col-1-2 {
                    height: 200px
                }

                #gallery-251810770 .grid-col-1-3 {
                    height: 133.33333333333px
                }

                #gallery-251810770 .grid-col-2-3 {
                    height: 266.66666666667px
                }

                #gallery-251810770 .grid-col-1-4 {
                    height: 100px
                }

                #gallery-251810770 .grid-col-3-4 {
                    height: 300px
                }
            }

            /* Mobile */
            @media (max-width: 550px) {
                #gallery-251810770 .grid-col-1 {
                    height: 400px
                }

                #gallery-251810770 .grid-col-1-2 {
                    height: 200px
                }

                #gallery-251810770 .grid-col-1-3 {
                    height: 133.33333333333px
                }

                #gallery-251810770 .grid-col-2-3 {
                    height: 266.66666666667px
                }

                #gallery-251810770 .grid-col-1-4 {
                    height: 100px
                }

                #gallery-251810770 .grid-col-3-4 {
                    height: 300px
                }
            }
        </style>
        <style>
            .grid-container {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
            }

            .grid-item {
                height: 300px;
                padding: 3px;
                margin-top: 5px;
                position: relative;
            }

            .grid-item img {
                position: relative;
                height: 300px !important;
                width: 475px !important;
            }

            .grid-item p {
                position: absolute;
                color: white;
                top: 250px;
                left: 50px;
            }
        </style>
        <?php /*foreach ($factory as $item) : */ ?>
        <!--
                <div class="grid-item">
                    <section>
                        <div>
                            <a class="example-image-link" href="<?php /*echo $item['factory_image']*/ ?>" data-lightbox="example-set" data-title="">
                                <img class="example-image" src="<?php /*echo $item['factory_image']*/ ?>" height="300px" alt="" />
                            </a>
                        </div>
                    </section>
                    <p class="text"><?/*= $item['factory_name'] */ ?></p>
                </div>
            --><?php /*endforeach; */ ?>
        <div id="gallery-251810770" class="row  lightbox-multi-gallery row-xsmall row-full-width row-grid" data-packery-options="{&quot;itemSelector&quot;: &quot;.col&quot;, &quot;gutter&quot;: 0, &quot;presentageWidth&quot; : true}" style="position: relative; ">
            <?php foreach ($factory as $item) : ?>
                <div class="gallery-col col grid-col grid-col-1-2 large-3 medium-6">
                    <div class="col-inner">
                        <a class="" href="<?php echo $item['factory_image'] ?>" title="Cutting process">
                            <div class="box has-hover gallery-box box-overlay dark box-text-center">
                                <div class="box-image">
                                    <img width="1000" height="622" src="<?php echo $item['factory_image'] ?>" data-src="" class="factor-image" alt="" loading="lazy" ids="976,354,359,360,361,723,724,725,726,727,728,729,730,731,732,733" style="none" type="grid" grid="3" col_spacing="xsmall" srcset="">
                                    <div class="overlay fill" style="background-color: rgba(0,0,0,.15)">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div id="gap-149871327" class="gap-element clearfix" style="display:block; height:auto;">
            <style>
                #gap-149871327 {
                    padding-top: 30px;
                }
            </style>
        </div>
    </div>
</main>
<?php
get_footer();
?>