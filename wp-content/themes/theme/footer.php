<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme
 */
$id = get_the_ID();
$url = get_template_directory_uri();
$link_google_map = get_field('link_google_map', 'option');
$headquarter = get_field('headquarter', 'option');
$office_factory = get_field('office_factory', 'option');
$tel = get_field('tel', 'option');
$fax = get_field('fax', 'option');
$email = get_field('email', 'option');
$link_fb = get_field('link_fb', 'option');
$link_witter = get_field('link_witter', 'option');
$link_youtube = get_field('link_youtube', 'option');
$copyright = get_field('copyright', 'option');
$logo = get_field('logo1', 'option');
$certificate_photo = get_field('certificate_photo', 'option');
$certificate_photo_copy = get_field('certificate_photo_copy', 'option');
// $related_logo2 = get_field('related_logo2', 'option');
// $related_logo3 = get_field('related_logo3', 'option');
$title_map = get_field('title_map', 'option');
$image_map = get_field('image_map', 'option');

//meu tiếng anh
$arr = wp_get_nav_menu_items('main-menu');
$menu1 = [];
foreach ($arr as $key => $ar) {

    if ($ar->menu_item_parent == 0) {
        $arr_class = $ar->classes;
        $menu1[$key]['ID'] = $ar->ID;
        $menu1[$key]['title'] = $ar->title;
        $menu1[$key]['url'] = $ar->url;
        $menu1[$key]['menu_item_parent'] = $ar->menu_item_parent;
        $menu1[$key]['classes'] = $arr_class[0];
        $menu1[$key]['description'] = $ar->description;

        $menusub = [];
        $i_sub = 0;
        foreach ($arr as $key_sub => $ar_sub) {
            if ($ar->ID == $ar_sub->menu_item_parent) {
                $menusub[$i_sub]['ID'] = $ar_sub->ID;
                $menusub[$i_sub]['title'] = $ar_sub->title;
                $menusub[$i_sub]['url'] = $ar_sub->url;
                $menusub[$i_sub]['menu_item_parent'] = $ar_sub->menu_item_parent;

                // Menu cấp 3
                $menusub_2 = [];
                $i_sub2 = 0;
                foreach ($arr as $key_sub2 => $ar_sub2) {
                    if ($ar_sub->ID == $ar_sub2->menu_item_parent) {
                        $menusub_2[$i_sub2]['ID'] = $ar_sub2->ID;
                        $menusub_2[$i_sub2]['title'] = $ar_sub2->title;
                        $menusub_2[$i_sub2]['url'] = $ar_sub2->url;
                        $menusub_2[$i_sub2]['menu_item_parent'] = $ar_sub2->menu_item_parent;
                        $i_sub2++;
                    }
                }
                $menusub[$i_sub]['menu_sub_2'] = $menusub_2;
                $i_sub++;
            }
        }
        $menu1[$key]['menu_sub'] = $menusub;
    }
}
$dem = 0;
$menu = [];
foreach ($menu1 as $mn) {
    $menu[$dem] = $mn;
    $dem++;
}

// menu tiếng việt
$arrvi = wp_get_nav_menu_items('menu-vi');
$menu1vi = [];
foreach ($arrvi as $key => $arvi) {

    if ($arvi->menu_item_parent == 0) {
        $arr_classvi = $arvi->classes;
        $menu1vi[$key]['ID'] = $arvi->ID;
        $menu1vi[$key]['title'] = $arvi->title;
        $menu1vi[$key]['url'] = $arvi->url;
        $menu1vi[$key]['menu_item_parent'] = $arvi->menu_item_parent;
        $menu1vi[$key]['classes'] = $arr_classvi[0];
        $menu1vi[$key]['description'] = $arvi->description;

        $menusubvi = [];
        $i_subvi = 0;
        foreach ($arrvi as $key_sub => $ar_subvi) {
            if ($arvi->ID == $ar_subvi->menu_item_parent) {
                $menusubvi[$i_subvi]['ID'] = $ar_subvi->ID;
                $menusubvi[$i_subvi]['title'] = $ar_subvi->title;
                $menusubvi[$i_subvi]['url'] = $ar_subvi->url;
                $menusubvi[$i_subvi]['menu_item_parent'] = $ar_subvi->menu_item_parent;

                // Menu cấp 3
                $menusub_2vi = [];
                $i_sub2vi = 0;
                foreach ($arrvi as $key_sub2 => $ar_sub2vi) {
                    if ($ar_subvi->ID == $ar_sub2vi->menu_item_parent) {
                        $menusub_2vi[$i_sub2vi]['ID'] = $ar_sub2vi->ID;
                        $menusub_2vi[$i_sub2vi]['title'] = $ar_sub2vi->title;
                        $menusub_2vi[$i_sub2vi]['url'] = $ar_sub2vi->url;
                        $menusub_2vi[$i_sub2vi]['menu_item_parent'] = $ar_sub2vi->menu_item_parent;
                        $i_sub2vi++;
                    }
                }
                $menusubvi[$i_sub2vi]['menu_sub_2'] = $menusub_2vi;
                $i_subvi++;
            }
        }
        $menu1vi[$key]['menu_sub'] = $menusubvi;
    }
}
$demvi = 0;
$menuvi = [];
?>

<footer id="footer" class="footer-wrapper">
    <section class="section" id="section_1850451799">
        <div class="bg section-bg fill bg-fill  bg-loaded">
        </div>
        <div class="section-content relative">
            <div class="row" id="row-1013509700">
                <div id="col-682509492" class="col medium-5 small-12 large-5">
                    <div class="col-inner">
                        <div id="text-3675857995" class="text">
                            <div class="logo">
                                <img src="<?php echo $logo ?>" alt="" width="200px" height="100px">
                            </div>
                            <style>
                                .logo {
                                    width: 200px;
                                    height: 100px;
                                }
                            </style>
                            <p>
                                <br>
                                <span style="color: #ffffff;">
                                    <br>
                                </span> <i class="fas fa-map-marker-alt" style="
    font-size: 10px;"></i> <?php _e("Headquarters","acplast") ?>: <?= $headquarter ?>
                                <span style="font-size: 14.4px;"><br>
                                    <i class="fas fa-map-marker-alt" style="
    font-size: 10px;"></i> <?php _e("Office & Factory","acplast") ?>: <?= $office_factory ?>
                                    (<span style="text-decoration: underline;">
                                        <a href="<?= $link_google_map ?>" target="_blank" rel="noopener">
                                            <span style="color: #ffffff; text-decoration: underline;margin-left: 0px !important;">MAP</span>
                                        </a>
                                    </span>)<br>
                                    <i class="fas fa-phone" style="
    font-size: 10px;"></i> Tel: <span style=""><span style="color: #ffffff; text-decoration: underline;margin-left: 0px !important;"><a style="color: #ffffff; text-decoration: underline;" href="tel:+842253529994"><?= $tel ?></a></span> </span>| Fax: <?= $fax ?></span><span style="color: #ffffff;"><br>
                                </span><span style="color: #ffffff;margin-left: 0px !important;">
                                    <i class="fas fa-envelope" style="
    font-size: 10px;"></i> Email:
                                    <?php foreach ($email as $item) : ?>
                                        | <a style="color: #ffffff;" href=""><?= $item['email1'] ?></a>
                                    <?php endforeach; ?>
                                </span>
                            </p>
                            <style>
                                #text-3675857995 {
                                    font-size: 0.9rem;
                                    color: rgb(255, 255, 255);
                                }

                                #text-3675857995>* {
                                    color: rgb(255, 255, 255);
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div id="col-389293154" class="col medium-4 small-12 large-4">
                    <div class="col-inner">
                        <div id="text-1546173577" class="text">

                            <style>
                                #text-1546173577 {
                                    font-size: 0.9rem;
                                    text-align: center;
                                }
                            </style>
                        </div>
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_189329746">
                            <div class="img-inner dark">
                                <img src="<?= $image_map ?>" class="attachment-large size-large" alt="worldmap" loading="lazy">
                            </div>
                            <style>
                                #image_189329746 {
                                    width: 100%;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div id="col-1848685029" class="col medium-3 small-12 large-3">
                    <div class="col-inner">
                        <div class="icon-box featured-box icon-box-center text-center">
                            <div class="icon-box-img" style="width: 130px">
                                <div class="icon">
                                    <div class="icon-inner" style="color:rgb(247, 247, 247);">
                                        <img class="icon-inner-image" width="100px" height="100px" src="<?= $certificate_photo ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                            </div>
                        </div>
                        <?php if (!empty($certificate_photo_copy)) : ?>
                            <div class="icon-box featured-box icon-box-center text-center">
                                <div class="icon-box-img" style="width: 130px">
                                    <div class="icon">
                                        <div class="icon-inner" style="color:rgb(247, 247, 247);">
                                            <img class="icon-inner-image" width="100px" height="100px" src="<?= $certificate_photo_copy ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-box-text last-reset">
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="social-icons follow-icons full-width text-center">
                <a href="<?php echo $link_fb ?>" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon button circle is-outline facebook tooltip tooltipstered">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="<?php echo $link_witter ?>" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon button circle is-outline twitter tooltip tooltipstered">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="<?= $link_youtube ?>" target="_blank" rel="noopener noreferrer nofollow" data-label="YouTube" class="icon button circle is-outline youtube tooltip tooltipstered">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
        <style>
            #section_1850451799 {
                padding-top: 30px;
                padding-bottom: 30px;
                background-color: rgb(93, 93, 93);
            }
        </style>
    </section>

</footer>
</div>
<div class="brave_popup" id="brave_popup_1353" data-loaded="false">
</div>
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">

    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar nav-vertical nav-uppercase">
            <li class="header-block">
                <div class="header-block-block-1">
                    <div class="row row-collapse align-center" id="row-337470081">
                        <div id="col-817206805" class="col small-12 large-12">
                            <div class="col-inner text-center">
                                <a class="plain" href="" target="_blank" rel="noopener noreferrer">
                                    <div class="icon-box featured-box icon-box-center text-center">
                                        <div class="icon-box-img" style="width: 222px">
                                            <div class="icon">
                                            </div>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <style>
                            #row-337470081>.col>.col-inner {
                                padding: 0px 0px 8px 0px;
                            }
                        </style>
                    </div>
                </div>
            </li>
            <?php if (ICL_LANGUAGE_CODE == "en") : ?>
            <?php foreach ($menu as $m) : ?>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-785 has-child" aria-expanded="false">
                    <a href="<?php echo $m['url'] ?>"><?php echo $m['title'] ?></a>
                    <?php if (!empty($m['menu_sub'])) : ?>
                        <button class="toggle toggle-menu"><i class="fas fa-angle-down" style="font-size: 16px;margin: 10px"></i></button>
                    <?php endif; ?>
                    <?php if ($m['classes'] == 'mega-menu') : ?>
                        <ul class="sub-menu nav-sidebar-ul children">
                            <?php foreach ($m['menu_sub'] as $ms) : ?>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-882">
                                    <a style="font-size: 12px" href="<?php echo $ms['url'] ?>"><?php echo $ms['title'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
            <?php elseif (ICL_LANGUAGE_CODE == "vi") : ?>
                <?php foreach ($menu1vi as $mvi) : ?>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-785 has-child" aria-expanded="false">
                        <a href="<?php echo $mvi['url'] ?>"><?php echo $mvi['title'] ?></a>
                        <?php if (!empty($mvi['menu_sub'])) : ?>
                            <button class="toggle toggle-menu"><i class="fas fa-angle-down" style="font-size: 16px;margin: 10px"></i></button>
                        <?php endif; ?>
                        <?php if ($mvi['classes'] == 'menuvi') : ?>
                            <ul class="sub-menu nav-sidebar-ul children">
                                <?php foreach ($mvi['menu_sub'] as $msvi) : ?>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-882">
                                        <a style="font-size: 12px" href="<?php echo $msvi['url'] ?>"><?php echo $msvi['title'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
            <style>
                .toggle-menu {
                    margin-right: 40px;
                }

                .toggle {
                    width: 0px;
                    height: 0px;
                }
            </style>
            <li class="html header-social-icons ml-0">
                <div class="social-icons follow-icons">
                    <a href="<?php echo $link_fb ?>" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip tooltipstered"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?php echo $link_youtube ?>" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon plain instagram tooltip tooltipstered"><i class="fab fa-youtube"></i></a>
                    <a href="<?php echo $link_witter ?>" target="_blank" data-label="Twitter" rel="noopener noreferrer nofollow" class="icon plain twitter tooltip tooltipstered"><i class="fab fa-twitter"></i></a>
                </div>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<style type="text/css">
    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_popup__step__inner {
        width: 750px;
        height: 500px;
        border-radius: 10px;
        margin-top: -250px;
        font-family: Arial;
    }

    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_element__wrap {
        font-family: Arial;
    }

    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_popup__step__popup {
        border-radius: 10px;
    }

    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_popup__step__content {
        background-color: rgba(255, 255, 255, 1);
    }

    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_popup__step__overlay {
        background-color: rgba(75, 75, 75, 0.7);
    }

    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_popup__close {
        font-size: 26px;
        width: 26px;
        color: rgba(0, 0, 0, 1);
        top: -34.666666666667px
    }

    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_popup__close svg {
        width: 26px;
        height: 26px;
    }

    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_popup__close svg path {
        fill: rgba(0, 0, 0, 1);
    }

    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_popupSections__wrap.brave_element-1353_0_exitAnim {
        animation: bravezoomIn 0.3s linear;
        animation-timing-function: linear;
        animation-direction: reverse;
        opacity: 0;
    }

    #brave_popup_1353__step__0 .brave_popup__step__desktop .brave_popupSections__wrap.brave_element-1353_0_openAnim {
        animation: bravezoomIn 0.3s linear;
        animation-timing-function: linear;
    }

    #brave_popup_1353__step__0 #brave_element--MhnWklmxIU4353XxgRb {
        width: 799.61194685595px;
        height: 499.763px;
        top: -4px;
        left: -1.72183px;
        z-index: 0;
    }

    #brave_popup_1353__step__0 #brave_element--MhnWyRl-_GCDVczZs_n {
        width: 165px;
        height: 40px;
        top: 417px;
        left: 183px;
        z-index: 1;
    }

    #brave_popup_1353__step__0 #brave_element--MhnXMLHu3oF3VhzNjGN {
        width: 165px;
        height: 40px;
        top: 417px;
        left: 436px;
        z-index: 2;
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_popup__step__inner {
        width: 360px;
        height: 523px;
        border-radius: 10px;
        margin-top: -262px;
        font-family: Arial;
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_element__wrap {
        font-family: Arial;
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_popup__step__popup {
        border-radius: 10px;
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_popup__step__content {
        background-color: rgba(255, 255, 255, 1);
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_popup__step__overlay {
        background-color: rgba(75, 75, 75, 0.7);
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_popup__close {
        font-size: 26px;
        width: 26px;
        color: rgba(0, 0, 0, 1);
        top: -34.666666666667px
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_popup__close svg {
        width: 26px;
        height: 26px;
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_popup__close svg path {
        fill: rgba(0, 0, 0, 1);
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_popupSections__wrap.brave_element-1353_0_exitAnim {
        animation: bravezoomIn 0.3s linear;
        animation-timing-function: linear;
        animation-direction: reverse;
        opacity: 0;
    }

    #brave_popup_1353__step__0 .brave_popup__step__mobile .brave_popupSections__wrap.brave_element-1353_0_openAnim {
        animation: bravezoomIn 0.3s linear;
        animation-timing-function: linear;
    }

    #brave_popup_1353__step__0 #brave_element--Mhq831zT39Ipt9mEhnn {
        width: 360.96354129582px;
        height: 524.45px;
        top: -5px;
        left: 0px;
        z-index: 0;
    }

    #brave_popup_1353__step__0 #brave_element--Mhq831zT39Ipt9mEhnp {
        width: 138px;
        height: 36px;
        top: 455.00001144409px;
        left: 192px;
        z-index: 1;
    }

    #brave_popup_1353__step__0 #brave_element--Mhq8OIYxwJCdh6SZ8dO {
        width: 138px;
        height: 36px;
        top: 455.00001144409px;
        left: 32px;
        z-index: 2;
    }

    #brave_popup_1353__step__0 #brave_element--MhnWklmxIU4353XxgRb .brave_element__styler {}

    #brave_popup_1353__step__0 #brave_element--MhnWklmxIU4353XxgRb img {}

    #brave_popup_1353__step__0 #brave_element--MhnWyRl-_GCDVczZs_n .brave_element__styler {
        font-size: 15px;
        color: rgba(255, 255, 255, 1);
        background-color: rgba(14, 168, 26, 1);
        line-height: 40px;
    }

    #brave_popup_1353__step__0 #brave_element--MhnXMLHu3oF3VhzNjGN .brave_element__styler {
        font-size: 15px;
        color: rgba(255, 255, 255, 1);
        background-color: rgba(14, 168, 26, 1);
        line-height: 40px;
    }

    #brave_popup_1353__step__0 #brave_element--Mhq831zT39Ipt9mEhnn .brave_element__styler {}

    #brave_popup_1353__step__0 #brave_element--Mhq831zT39Ipt9mEhnn img {}

    #brave_popup_1353__step__0 #brave_element--Mhq831zT39Ipt9mEhnp .brave_element__styler {
        font-size: 15px;
        color: rgba(255, 255, 255, 1);
        background-color: rgba(14, 168, 26, 1);
        line-height: 36px;
    }

    #brave_popup_1353__step__0 #brave_element--Mhq8OIYxwJCdh6SZ8dO .brave_element__styler {
        font-size: 15px;
        color: rgba(255, 255, 255, 1);
        background-color: rgba(14, 168, 26, 1);
        line-height: 36px;
    }
</style>
<script type="text/javascript">
    brave_popup_data[1353] = {
        title: 'Popup once after 6s',
        fonts: [],
        advancedAnimation: false,
        hasAnimation: true,
        hasContAnim: false,
        animationData: [{
            "desktop": {
                "elements": [{
                    "animation": {
                        "load": {
                            "props": {
                                "start": {
                                    "opacity": 0,
                                    "scale": 0.7
                                },
                                "end": {
                                    "opacity": 100,
                                    "scale": 1
                                }
                            },
                            "duration": 300,
                            "delay": 0,
                            "easing": "easeInSine",
                            "preset": "zoomIn"
                        },
                        "continious": {},
                        "exit": {
                            "props": {
                                "start": {
                                    "opacity": 0,
                                    "scale": 0.7
                                },
                                "end": {
                                    "opacity": 100,
                                    "scale": 1
                                }
                            },
                            "duration": 300,
                            "delay": 0,
                            "easing": "easeInSine",
                            "preset": "zoomIn"
                        }
                    },
                    "id": "popup",
                    "top": "",
                    "left": ""
                }],
                "totalDuration": 300
            },
            "mobile": {
                "elements": [{
                    "animation": {
                        "load": {
                            "props": {
                                "start": {
                                    "opacity": 0,
                                    "scale": 0.7
                                },
                                "end": {
                                    "opacity": 100,
                                    "scale": 1
                                }
                            },
                            "duration": 300,
                            "delay": 0,
                            "easing": "easeInSine",
                            "preset": "zoomIn"
                        },
                        "continious": {},
                        "exit": {
                            "props": {
                                "start": {
                                    "opacity": 0,
                                    "scale": 0.7
                                },
                                "end": {
                                    "opacity": 100,
                                    "scale": 1
                                }
                            },
                            "duration": 300,
                            "delay": 0,
                            "easing": "easeInSine",
                            "preset": "zoomIn"
                        }
                    },
                    "id": "popup",
                    "top": "",
                    "left": ""
                }],
                "totalDuration": 300
            }
        }],
        videoData: [],
        hasYoutube: false,
        hasVimeo: false,
        settings: {
            "goal": "all",
            "goalAction": {
                "step": 0,
                "type": "step"
            },
            "audience": {
                "devices": "all"
            },
            "frequency": {
                "goalComplete": false,
                "closeCount": "1",
                "closeFor": "1",
                "close": true,
                "repeat": true,
                "repeatCount": "2",
                "repeatCountType": "day"
            },
            "placement": {},
            "trigger": {
                "triggerType": "time",
                "time": {
                    "hours": "00",
                    "minutes": "00",
                    "seconds": "6"
                }
            }
        },
        close: [{
            "desktop": {},
            "mobile": {}
        }],
        forceLoad: false,
        forceStep: false,
        hasDesktopEmbed: false,
        hasMobileEmbed: false,
        schedule: {},
        embedLock: false,
        timers: [],
    }
    // document.addEventListener("DOMContentLoaded", function(event) {
    //     brave_init_popup(1353, brave_popup_data[1353]);
    // });
</script>
<!--<script src="--><?//= $url ?><!--/asset/lightbox-plus-jquery.min.js"></script>-->

<link rel="stylesheet" id="bravepop_front_css-css" href="<?= $url ?>/assets/frontend.min.css" type="text/css" media="all">
<script type="text/javascript" src="<?= $url ?>/assets/wp-polyfill.min.js" id="wp-polyfill-js"></script>

<!--<script type="text/javascript" src="--><?//= $url ?><!--/assets/index.js" id="contact-form-7-js"></script>-->
<script type="text/javascript" src="<?= $url ?>/assets/codedropz-uploader-min.js" id="codedropz-uploader-js"></script>

<!--<script type="text/javascript" src="--><?//= $url ?><!--/assets/dnd-upload-cf7.js" id="dnd-upload-cf7-js"></script>-->
<script type="text/javascript" id="pwb-functions-frontend-js-extra">
    /* <![CDATA[ */
    var pwb_ajax_object = {
        "carousel_prev": "<",
        "carousel_next": ">"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="<?= $url ?>/assets/functions-frontend.min.js" id="pwb-functions-frontend-js"></script>
<script type="text/javascript" src="<?= $url ?>/assets/jquery.blockUI.min.js" id="jquery-blockui-js"></script>
<script type="text/javascript" src="<?= $url ?>/assets/js.cookie.min.js" id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="<?= $url ?>/assets/woocommerce.min.js" id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_898b1d5ef547b37bf20b20bdfc959031",
        "fragment_name": "wc_fragments_898b1d5ef547b37bf20b20bdfc959031",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="<?= $url ?>/assets/cart-fragments.min.js" id="wc-cart-fragments-js"></script>
<script type="text/javascript" src="<?= $url ?>/assets/flatsome-instant-page.js" id="flatsome-instant-page-js"></script>
<script type="text/javascript" src="<?= $url ?>/assets/flatsome-live-search.js" id="flatsome-live-search-js"></script>
<script type="text/javascript" src="<?= $url ?>/assets/hoverIntent.min.js" id="hoverIntent-js"></script>
<script type="text/javascript" id="flatsome-js-js-extra">
    var flatsomeVars = {
        "ajaxurl": "https:\/\/vnplast.com\/wp-admin\/admin-ajax.php",
        "rtl": "",
        "sticky_height": "70",
        "lightbox": {
            "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
            "close_btn_inside": false
        },
        "user": {
            "can_edit_pages": false
        },
        "i18n": {
            "mainMenu": "Main Menu"
        },
        "options": {
            "cookie_notice_version": "1"
        }
    };
</script>
<script type="text/javascript" src="<?= $url ?>/assets/flatsome.js" id="flatsome-js-js"></script>
<script type="text/javascript" src="<?= $url ?>/assets/flatsome-lazy-load.js" id="flatsome-lazy-js"></script>
<script type="text/javascript" src="<?= $url ?>/assets/woocommerce.js" id="flatsome-theme-woocommerce-js-js"></script>
<script type="text/javascript" src="<?= $url ?>/assets/wp-embed.min.js" id="wp-embed-js"></script>
<script type="text/javascript">
</script>
<script type="text/javascript" id="wpsp-script-frontend"></script>
<style>
    #fkrgdgbdpui1fgl8tqfk {
        display: none !important;
    }

    #crrkuai2auso1fgl96gve {
        display: none !important;
    }

    body.font-lato {
        display: none;
    }

    #mj9ain27v3io1fgl9ghau {
        display: none;
    }
</style>
<style>
    #y0c35vmrujk1fhchph2g{
        display: none; !important;
        background-color: #DA251C !important;
    }
</style>
</body>

</html>