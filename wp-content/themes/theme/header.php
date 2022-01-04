<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme
 */
$id = get_the_ID();
$url = get_template_directory_uri();
$logo = get_field('logo', 'option');
$emails = get_field('emails', 'option');
$phone_number = get_field('phone_number', 'option');
$link_free_quote = get_field('link_free_quote', 'option');
$linkfb = get_field('link_fb_header', 'option');
$linkst = get_field('link_stwetter_header', 'option');
//print_r($logo);die;

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

// echo  "<pre>";
// print_r($menuvi);
// die();

?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: https://ogp.me/ns#" class="js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--    slider-->
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <script src="<?= $url ?>/assets/slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_options = {
                $AutoPlay: 1,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            var MAX_WIDTH = 1350;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        };
    </script>
    <script type="text/javascript" async="" src="<?= $url ?>/assets/js"></script>
    <script async="" src="<?= $url ?>/assets/1f77tvmej" charset="UTF-8" crossorigin="*"></script>
    <script async="" src="<?= $url ?>/assets/gtm.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script type="text/javascript">
        (function(html) {
            html.className = html.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!--    <title>Vn Plastic: HDPE, LDPE, recycled, reusable plastic bag manufacturer in Vietnam</title>-->
    <?php wp_head(); ?>
<!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="stylesheet"  href="<?= $url ?>/asset/cssslider.css" type="text/css">

    <link rel='stylesheet' id='flatsome-googlefonts-css' href='//fonts.googleapis.com/css?family=Lato%3Aregular%2C700%2C400%2C700%7CDancing+Script%3Aregular%2C400&#038;display=swap&#038;ver=3.9' type='text/css' media='all' />
    <link rel="stylesheet" id="wc-block-vendors-style-css" href="<?= $url ?>/assets/vendors-style.css" type="text/css" media="all">
    <link rel="stylesheet" id="wc-block-style-css" href="<?= $url ?>/assets/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="dnd-upload-cf7-css" href="<?= $url ?>/assets/dnd-upload-cf7.css" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="<?= $url ?>/assets/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="pwb-styles-frontend-css" href="<?= $url ?>/assets/styles-frontend.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="rate-my-post-css" href="<?= $url ?>/assets/rate-my-post.css" type="text/css" media="all">
    <style id="rate-my-post-inline-css" type="text/css">
        .rmp-icon--full-highlight {
            color: #183883;
        }

        .rmp-icon--half-highlight {
            background: -webkit-gradient(linear, left top, right top, color-stop(50%, #183883), color-stop(50%, #ccc));
            background: linear-gradient(to right, #183883 50%, #ccc 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .rmp-rating-widget .rmp-icon--half-highlight {
            background: -webkit-gradient(linear, left top, right top, color-stop(50%, #183883), color-stop(50%, #ccc));
            background: linear-gradient(to right, #183883 50%, #ccc 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .rmp-rating-widget .rmp-icon--full-highlight {
            color: #183883;
        }

        @media (hover: hover) {
            .rmp-rating-widget .rmp-icon--hovered {
                color: #FFCC36;
                -webkit-background-clip: initial;
                -webkit-text-fill-color: initial;
                background: transparent;
                -webkit-transition: .1s color ease-in;
                transition: .1s color ease-in;
            }
        }

        .rmp-rating-widget .rmp-icon--processing-rating {
            color: #183883;
            -webkit-background-clip: initial;
            -webkit-text-fill-color: initial;
            background: transparent;
        }
    </style>
    <link rel="stylesheet" id="bodhi-svgs-attachment-css" href="<?= $url ?>/assets/svgs-attachment.css" type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="dashicons-css" href="<?= $url ?>/assets/dashicons.min.css" type="text/css" media="all">
    <style id="dashicons-inline-css" type="text/css">
        [data-font="Dashicons"]:before {
            font-family: 'Dashicons' !important;
            content: attr(data-icon) !important;
            speak: none !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    <link rel="stylesheet" id="flatsome-icons-css" href="<?= $url ?>/assets/fl-icons.css" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-main-css" href="<?= $url ?>/assets/flatsome.css" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-shop-css" href="<?= $url ?>/assets/flatsome-shop.css" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-style-css" href="<?= $url ?>/assets/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="flatsome-googlefonts-css" href="<?= $url ?>/assets/css" type="text/css" media="all">
    <script type="text/javascript" src="<?= $url ?>/assets/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="<?= $url ?>/assets/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <style type="text/css">
        .brave_popup {
            display: none
        }
    </style>
    <script type="text/javascript">
        var brave_popup_data = {};
        var bravepop_emailValidation = false;
        var brave_popup_videos = {};
        var brave_popup_formData = {};
        var brave_popup_adminUser = false;
        var brave_popup_pageInfo = {
            "type": "front",
            "pageID": 16,
            "singleType": ""
        };
        var bravepop_emailSuggestions = {};
    </script>
    <style>
        .bg {
            opacity: 0;
            transition: opacity 1s;
            -webkit-transition: opacity 1s;
        }

        .bg-loaded {
            opacity: 1;
        }
    </style>
    <script type="text/javascript">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PB3MP5B');
    </script>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style id="wpsp-style-frontend"></style>
    <style id="custom-css" type="text/css">
        :root {
            --primary-color: #183883;
        }

        .full-width .ubermenu-nav,
        .container,
        .row {
            max-width: 1470px
        }

        .row.row-collapse {
            max-width: 1440px
        }

        .row.row-small {
            max-width: 1462.5px
        }

        .row.row-large {
            max-width: 1500px
        }

        .sticky-add-to-cart--active,
        #wrapper,
        #main,
        #main.dark {
            background-color: #f7f7f7
        }

        .header-main {
            height: 100px;
            background-color: white;
        }

        #logo img {
            max-height: 100px
        }

        #logo {
            width: 155px;
        }

        .header-bottom {
            min-height: 10px
        }

        .header-top {
            min-height: 20px
        }

        .transparent .header-main {
            height: 90px
        }

        .transparent #logo img {
            max-height: 90px
        }

        .has-transparent+.page-title:first-of-type,
        .has-transparent+#main>.page-title,
        .has-transparent+#main>div>.page-title,
        .has-transparent+#main .page-header-wrapper:first-of-type .page-title {
            padding-top: 120px;
        }

        .transparent .header-wrapper {
            background-color: rgba(10, 10, 10, 0.13) !important;
        }

        .transparent .top-divider {
            display: none;
        }

        .header.show-on-scroll,
        .stuck .header-main {
            height: 100px !important
        }

        .stuck #logo img {
            max-height: 100px !important
        }

        .header-bg-color,
        .header-wrapper {
            background-color: rgba(0, 0, 0, 0.36)
        }

        .header-bottom {
            background-color: #f1f1f1
        }

        .top-bar-nav>li>a {
            line-height: 16px
        }

        .header-main .nav>li>a {
            line-height: 16px;
            color: black !important;
        }

        .header-main .nav>li>a:hover {
            line-height: 16px;
            color: black !important;
        }

        .stuck .header-main .nav>li>a {
            line-height: 50px
        }

        @media (max-width: 549px) {
            .header-main {
                height: 70px
            }

            #logo img {
                max-height: 70px
            }
        }

        .nav-dropdown {
            border-radius: 15px
        }

        .nav-dropdown {
            font-size: 100%
        }

        .nav-dropdown-has-arrow li.has-dropdown:after {
            border-bottom-color: #f7f7f7;
        }

        .nav .nav-dropdown {
            background-color: #f7f7f7
        }

        .header-top {
            /* background-color: rgba(0, 0, 0, 0.49) !important; */
            background-color: white !important;
            border-bottom: 1px solid red;
        }

        /* Color */
        .accordion-title.active,
        .has-icon-bg .icon .icon-inner,
        .logo a,
        .primary.is-underline,
        .primary.is-link,
        .badge-outline .badge-inner,
        .nav-outline>li.active>a,
        .nav-outline>li.active>a,
        .cart-icon strong,
        [data-color='primary'],
        .is-outline.primary {
            color: #183883;
        }

        /* Color !important */
        [data-text-color="primary"] {
            color: #183883 !important;
        }

        /* Background Color */
        [data-text-bg="primary"] {
            background-color: #183883;
        }

        /* Background */
        .scroll-to-bullets a,
        .featured-title,
        .label-new.menu-item>a:after,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        button[type="submit"],
        .button.wc-forward:not(.checkout):not(.checkout-button),
        .button.submit-button,
        .button.primary:not(.is-outline),
        .featured-table .title,
        .is-outline:hover,
        .has-icon:hover .icon-label,
        .nav-dropdown-bold .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold>li>a:hover,
        .nav-dropdown-bold.dark .nav-column li>a:hover,
        .nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
        .is-outline:hover,
        .tagcloud a:hover,
        .grid-tools a,
        input[type='submit']:not(.is-form),
        .box-badge:hover .box-text,
        input.button.alt,
        .nav-box>li>a:hover,
        .nav-box>li.active>a,
        .nav-pills>li.active>a,
        .current-dropdown .cart-icon strong,
        .cart-icon:hover strong,
        .nav-line-bottom>li>a:before,
        .nav-line-grow>li>a:before,
        .nav-line>li>a:before,
        .banner,
        .header-top,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover,
        .button.primary:not(.is-outline),
        input[type='submit'].primary,
        input[type='submit'].primary,
        input[type='reset'].button,
        input[type='button'].primary,
        .badge-inner {
            background-color: #183883;
        }

        /* Border */
        .nav-vertical.nav-tabs>li.active>a,
        .scroll-to-bullets a.active,
        .nav-pagination>li>.current,
        .nav-pagination>li>span:hover,
        .nav-pagination>li>a:hover,
        .has-hover:hover .badge-outline .badge-inner,
        .accordion-title.active,
        .featured-table,
        .is-outline:hover,
        .tagcloud a:hover,
        blockquote,
        .has-border,
        .cart-icon strong:after,
        .cart-icon strong,
        .blockUI:before,
        .processing:before,
        .loading-spin,
        .slider-nav-circle .flickity-prev-next-button:hover svg,
        .slider-nav-circle .flickity-prev-next-button:hover .arrow,
        .primary.is-outline:hover {
            border-color: #183883
        }

        .nav-tabs>li.active>a {
            border-top-color: #183883
        }

        .widget_shopping_cart_content .blockUI.blockOverlay:before {
            border-left-color: #183883
        }

        .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
            border-left-color: #183883
        }

        /* Fill */
        .slider .flickity-prev-next-button:hover svg,
        .slider .flickity-prev-next-button:hover .arrow {
            fill: #183883;
        }

        /* Background Color */
        [data-icon-label]:after,
        .secondary.is-underline:hover,
        .secondary.is-outline:hover,
        .icon-label,
        .button.secondary:not(.is-outline),
        .button.alt:not(.is-outline),
        .badge-inner.on-sale,
        .button.checkout,
        .single_add_to_cart_button,
        .current .breadcrumb-step {
            background-color: #ec6224;
        }

        [data-text-bg="secondary"] {
            background-color: #ec6224;
        }

        /* Color */
        .secondary.is-underline,
        .secondary.is-link,
        .secondary.is-outline,
        .stars a.active,
        .star-rating:before,
        .woocommerce-page .star-rating:before,
        .star-rating span:before,
        .color-secondary {
            color: #ec6224
        }

        /* Color !important */
        [data-text-color="secondary"] {
            color: #ec6224 !important;
        }

        /* Border */
        .secondary.is-outline:hover {
            border-color: #ec6224
        }

        body {
            font-family: "Lato", sans-serif
        }

        body {
            font-weight: 400
        }

        body {
            color: #353535
        }

        .nav>li>a {
            font-family: "Lato", sans-serif;
        }

        .mobile-sidebar-levels-2 .nav>li>ul>li>a {
            font-family: "Lato", sans-serif;
        }

        .nav>li>a {
            font-weight: 700;
        }

        .mobile-sidebar-levels-2 .nav>li>ul>li>a {
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .off-canvas-center .nav-sidebar.nav-vertical>li>a {
            font-family: "Lato", sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font,
        .banner h1,
        .banner h2 {
            font-weight: 700;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .heading-font {
            color: #353535;
        }

        .alt-font {
            font-family: "Dancing Script", sans-serif;
        }

        .alt-font {
            font-weight: 400 !important;
        }

        a {
            color: #1e1e1e;
        }

        @media screen and (min-width: 550px) {
            .products .box-vertical .box-image {
                min-width: 400px !important;
                width: 400px !important;
            }
        }

        .absolute-footer,
        html {
            background-color: rgba(0, 0, 0, 0.61)
        }

        /* Custom CSS */
        .title-wrapper {
            font-size: large;
            font-weight: bold;
        }

        .product-section-title-related {
            margin-left: 0px !important;
            text-transform: initial;
        }

        .nav>li>a,
        .nav-dropdown>li>a,
        .nav-column>li>a {
            color: rgb(43 43 43);
        }

        .woocommerce-breadcrumb {
            display: none;
        }

        .ftwp-unfade-trigger,
        .ftwp-fade-trigger {
            opacity: 100 !important;
            filter: none;
        }

        th,
        td {
            padding: 0.5em;
            text-align: left;
            border-bottom: 1px solid #ececec;
            line-height: 1;
            font-size: inherit;
            color: inherit;
        }

        div#ftwp-postcontent p a {
            text-decoration: underline;
        }

        .accordion-inner {
            padding: 15px 0 15px 0px;
        }

        .nhp-yt-home {
            padding: 0;
        }

        .image-cover {
            aspect-ratio: 5/3;
        }

        .label-new.menu-item>a:after {
            content: "New";
        }

        .label-hot.menu-item>a:after {
            content: "Hot";
        }

        .label-sale.menu-item>a:after {
            content: "Sale";
        }

        .label-popular.menu-item>a:after {
            content: "Popular";
        }
    </style>
<!--    <script async="" src="--><?//= $url ?><!--/assets/invisible.js"></script>-->
    <link rel="prefetch">
    <!-- <script charset="utf-8" src="<?= $url ?>/assets/twk-chunk-2d0d2b7c.js"></script>
    <script charset="utf-8" src="<?= $url ?>/assets/twk-chunk-2d224aff.js"></script>
    <script charset="utf-8" src="<?= $url ?>/assets/twk-chunk-48f46bef.js"></script>
    <script charset="utf-8" src="<?= $url ?>/assets/twk-chunk-4fe9d5dd.js"></script>
    <script charset="utf-8" src="<?= $url ?>/assets/twk-chunk-2d0b9454.js"></script>
    <script charset="utf-8" src="<?= $url ?>/assets/twk-chunk-f163fcd0.js"></script>
    <script charset="utf-8" src="<?= $url ?>/assets/twk-chunk-35f53b3a.js"></script> -->
    <style type="text/css">
        #bn4i8p827bag1fefkn5gc {
            outline: none !important;
            visibility: visible !important;
            resize: none !important;
            box-shadow: none !important;
            overflow: visible !important;
            background: none !important;
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity 1
            }

        ) !important;
        -mz-opacity: 1 !important;
        -khtml-opacity: 1 !important;
        top:auto !important;
        right: 0 px !important;
        bottom: 0 px !important;
        left:auto !important;
        position:fixed !important;
        border: 0 !important;
        min-height: 0 px !important;
        min-width: 0 px !important;
        max-height:none !important;
        max-width:none !important;
        padding: 0 px !important;
        margin: 0 px !important;
        -moz-transition-property:none !important;
        -webkit-transition-property:none !important;
        -o-transition-property:none !important;
        transition-property:none !important;
        transform:none !important;
        -webkit-transform:none !important;
        -ms-transform:none !important;
        width:auto !important;
        height:auto !important;
        display:block !important;
        z-index: 2000000000 !important;
        background-color:transparent !important;
        cursor:none !important;
        float:none !important;
        border-radius:unset !important;
        pointer-events:auto !important;
        clip:auto !important;
        }
    </style>
    <script src="<?= $url ?>/assets/emojione.min.js" type="text/javascript" async="" defer=""></script>
    <script src="<?= $url ?>/assets/emojione.min.js" type="text/javascript" async="" defer=""></script>
    <style type="text/css">
        @keyframes tawkMaxOpen {
            0% {
                opacity: 0;
                transform: translate(0, 30px);
                ;
            }

            to {
                opacity: 1;
                transform: translate(0, 0px);
            }
        }

        @-moz-keyframes tawkMaxOpen {
            0% {
                opacity: 0;
                transform: translate(0, 30px);
                ;
            }

            to {
                opacity: 1;
                transform: translate(0, 0px);
            }
        }

        @-webkit-keyframes tawkMaxOpen {
            0% {
                opacity: 0;
                transform: translate(0, 30px);
                ;
            }

            to {
                opacity: 1;
                transform: translate(0, 0px);
            }
        }

        #plm1s0681nfg1fefkn5ko.open {
            animation: tawkMaxOpen .25s ease !important;
        }

        @keyframes tawkMaxClose {
            from {
                opacity: 1;
                transform: translate(0, 0px);
                ;
            }

            to {
                opacity: 0;
                transform: translate(0, 30px);
                ;
            }
        }

        @-moz-keyframes tawkMaxClose {
            from {
                opacity: 1;
                transform: translate(0, 0px);
                ;
            }

            to {
                opacity: 0;
                transform: translate(0, 30px);
                ;
            }
        }

        @-webkit-keyframes tawkMaxClose {
            from {
                opacity: 1;
                transform: translate(0, 0px);
                ;
            }

            to {
                opacity: 0;
                transform: translate(0, 30px);
                ;
            }
        }

        #plm1s0681nfg1fefkn5ko.closed {
            animation: tawkMaxClose .25s ease !important
        }
    </style>
    <style>
    </style>
    <link rel="stylesheet" href="<?= $url ?>/asset/style.css">
<!--    <link rel="stylesheet" href="--><?//= $url ?><!--/asset/responsive.css">-->
<!--    <link rel="stylesheet" href="--><?//= $url ?><!--/asset/lightbox.min.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

</head>

<body class="home page-template page-template-page-transparent-header-light page-template-page-transparent-header-light-php page page-id-16 theme-flatsome woocommerce-js wp-schema-pro-2.6.0 lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow catalog-mode no-prices">


    <a class="skip-link screen-reader-text" href="">Skip to content</a>
    <div id="wrapper">
        <header id="header" class="header has-sticky sticky-jump sticky-hide-on-scroll">
            <!-- style="position: fixed;object-fit:cover" -->
            <div class="header-wrapper">
                <div id="top-bar" class="mobiles header-top nav-dark" style="padding-top: 10px; padding-bottom: 10px;">
                    <div class="flex-row container">
                        <div class="item-box1">
                            <ul>
                                <li style="font-size: 15px;"><i class="fas fa-envelope" style="font-size: 16px;"></i> <?php echo $emails ?></li>
                                <li style="font-size: 15px;"><i class="fas fa-phone" style="font-size: 16px;"></i> <?php echo $phone_number ?></li>
                            </ul>
                        </div>
                        <style>
                            .item-box1 ul {
                                list-style: none;
                                font-size: 13px;
                                padding: 0;
                                margin: 0;
                            }

                            .item-box1 ul li {
                                padding: 10px;
                                display: inline-block;
                                font-size: 13px;
                            }

                            .item-box1 ul li a {
                                text-decoration: none;
                                color: red;
                            }

                            .item-box1 ul li a:hover {
                                text-decoration: none;
                                color: black;
                            }
                        </style>
                        <div class="item-box2">
                            <div class="form-search">
                                <form action="<?= home_url('') ?>" style="
                                    margin: 0;
                                    padding: 0;
                                    align-items: center;
                                    justify-content: center;
                                    display: flex;
">
                                    <div class="input-form-search">
                                        <input class="search-item" style="
    margin: 0;
" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php _e("Search","acplast");?>">
                                        <button style="height: 39px;width: 60px;background-color: #DCDCDC;padding: 0;margin: 0;" type="submit" name=""><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="icon-fb">
                                <li class="abc"><a href="<?php echo $linkfb ?>"><i class="fab fa-facebook-f" style="font-size: 18px;"></i></a></li>
                                <li class="abc"><a href="<?php echo $linkst ?>"><i class="fab fa-twitter" style="font-size: 18px;"></i></a></li>
                            </div>
                            <?php
                            $linkurl = site_url();//link url
                            $sub_url = $_SERVER['REQUEST_URI'];
                            $link1 = '';
                            $link2 = '';
                            if (ICL_LANGUAGE_CODE == "vi") {
                                $link1 = '#';
                                $sub_url = str_replace('/vi','',$sub_url);
                                $link2 = $linkurl . $sub_url;
                            }
                            else{
                                $link1 = $linkurl . '/vi' . $sub_url;
                                $link2 = '#';
                            }
                            $link = get_permalink();
                            $link1 = $linkurl . '/vi' . $sub_url;
                            $link2 = $linkurl . $sub_url;
//                            print_r($link);
//                            echo "<br>";
//                            print_r($link1);
//                            echo "<br>";
//                            print_r($link2);die();
                            ?>
                            <div class="language">
                                <li><span><a <?php if($link == $link1 ) : ?> class="actives"  <?php endif; ?> href="<?php echo $link1 ?>">VI</a></span></li> <span> | </span>
                                <li><span><a <?php if($link == $link2 ) : ?> class="actives"  <?php endif; ?> href="<?php echo $link2 ?>">EN</a></span></li>
                            </div>
                        </div>
                        <style>
                            .actives{
                                color: red;
                            }
                            .language{
                                list-style: none;
                                display: flex;
                                flex: 1;
                                font-weight: bold;
                                margin-top: 20px;
                            }
                            span {
                                margin-left: 10px;
                            }
                            .language li a:hover{
                                    color: red;
                            }
                            .item-box2 {
                                /*margin-top: 40px;*/
                                /*width: 200px;*/
                                /*list-style: none;*/
                                /*display: flex;*/
                                list-style: none;
                                display: flex;
                            }

                            .form-search {
                                /*width: 210px;*/
                                display: flex;
                            }

                            .btn {
                                width: 50px;
                                height: 30px;
                                background-color: white;
                            }

                            .abc a:hover {
                                color: red;
                            }

                            .icon-fb {
                                display: flex;
                                flex: 1;
                                margin: 0px;
                                margin-left: 200px;
                            }

                            .icon-fb li {
                                margin: 20px;
                                /*margin: 10px;*/
                                /*margin-bottom: 0.6em;*/
                                /*margin-right: 10px;*/
                            }

                            .search-item {
                                width: 300px !important;
                            }

                            .input-form-search {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            }

                            form {
                                /* display: flex; */
                            }
                        </style>
                    </div>
                </div>

                <div id="top-bar" class="mobile header-top nav-dark" style="padding-top: 10px;padding-bottom: 10px;">
                    <div class="">
                        <div class="item-box1" style="display: flex">
                            <div>
                                <ul style="padding-left: 16px;">
                                    <li style="font-size: 15px;"><i class="fas fa-envelope" style="font-size: 16px;"></i> <?php echo $emails ?></li>
                                    <li style="font-size: 15px;"><i class="fas fa-phone" style="font-size: 16px;"></i> <?php echo $phone_number ?></li>
                                </ul>

                            </div>
                            <?php
                            $linkurl = site_url();//link url
                            $sub_url = $_SERVER['REQUEST_URI'];
                            $link1 = '';
                            $link2 = '';
                            if (ICL_LANGUAGE_CODE == "vi") {
                                $link1 = '#';
                                $sub_url = str_replace('/vi','',$sub_url);
                                $link2 = $linkurl . $sub_url;
                            }
                            else{
                                $link1 = $linkurl . '/vi' . $sub_url;
                                $link2 = '#';
                            }
                            $link = get_permalink();
                            $link1 = $linkurl . '/vi' . $sub_url;
                            $link2 = $linkurl . $sub_url;
                            //                            print_r($link);
                            //                            echo "<br>";
                            //                            print_r($link1);
                            //                            echo "<br>";
                            //                            print_r($link2);die();
                            ?>
                            <div class="language55" style="padding-left: 30px;">
                                <li style="display: contents;"><span><a <?php if($link == $link1 ) : ?> class="actives"  <?php endif; ?> href="<?php echo $link1 ?>">VI</a></span></li> <span> | </span>
                                <li style="display: contents;"><span><a <?php if($link == $link2 ) : ?> class="actives"  <?php endif; ?> href="<?php echo $link2 ?>">EN</a></span></li>
                            </div>
                        </div>

                        <div class="item-box22">
                            <div class="form-searchs">
                                <form action="<?= home_url('') ?>" style="
                                    margin: 0;
                                    padding: 0;
                                    align-items: center;

">
                                    <div class="input-form-search" style="margin-left: 18px">
                                        <input class="search-item" style="
    margin: 0;
" type="text" name="s" value="<?php the_search_query(); ?>" placeholder="Search">
                                        <button style="height: 39px;width: 60px;background-color: #DCDCDC;padding: 0;margin: 0;" type="submit" name=""><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="masthead" class="header-main show-logo-center nav-dark">
                    <div class="header-inner flex-row container logo-center medium-logo-center" role="navigation">
                        <div id="logo" class="flex-col logo" style="">
                            <a href="<?= home_url() ?>" title="" rel="home">
                                <img width="155" height="100" src="<?= $logo ?>" class="header-logo-dark" alt="">
                            </a>
                            <style>

                            </style>
                        </div>
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="nav-icon has-icon">
                                    <a href="" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                                        <i class="fas fa-bars"></i>
                                        <span class="menu-title uppercase hide-for-small">Menu</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="flex-col hide-for-medium flex-left">
                            <!--menu tiếng việt-->
                            <?php
                            if (ICL_LANGUAGE_CODE == "vi") : ?>
                                <ul class="header-nav header-nav-main nav nav-left  nav-divided nav-uppercase" style="margin-left: 90px;">
                                    <?php foreach ($menu1vi as $mvi) : ?>
                                        <li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-54 menu-item-design-default has-dropdown">
                                            <a href="<?php echo $mvi['url'] ?>" class="nav-top-link"><?php echo $mvi['title'] ?>
                                                <?php if (!empty($mvi['menu_sub'])) : ?>
                                                    <i class="fas fa-angle-down" style="font-size: 15px;margin: 10px;"></i>
                                                <?php endif ?>
                                            </a>
                                            <?php if ($mvi['classes'] == 'menuvi') : ?>
                                                <?php if (!empty($mvi['menu_sub'])) : ?>
                                                    <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                                                        <?php foreach ($mvi['menu_sub'] as $msvi) : ?>
                                                            <li id="menu-item-526" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-526">
                                                                <a href="<?php echo $msvi['url'] ?>"><?php echo $msvi['title'] ?></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                            <?php elseif (ICL_LANGUAGE_CODE == "en") : ?>
                                <ul class="header-nav header-nav-main nav nav-left  nav-divided nav-uppercase" style="margin-left: 90px;">
                                    <?php foreach ($menu as $m) : ?>
                                        <li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-54 menu-item-design-default has-dropdown">
                                            <a href="<?php echo $m['url'] ?>" class="nav-top-link"><?php echo $m['title'] ?>
                                                <?php if (!empty($m['menu_sub'])) : ?>
                                                    <i class="fas fa-angle-down" style="font-size: 15px;margin: 10px;"></i>
                                                <?php endif ?>
                                            </a>
                                            <?php if ($m['classes'] == 'mega-menu') : ?>
                                                <?php if (!empty($m['menu_sub'])) : ?>
                                                    <ul class="sub-menu nav-dropdown nav-dropdown-bold">
                                                        <?php foreach ($m['menu_sub'] as $ms) : ?>
                                                            <li id="menu-item-526" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-526">
                                                                <a href="<?php echo $ms['url'] ?>"><?php echo $ms['title'] ?></a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <style>
                                #menu-item-54 {
                                    font-size: 20px;
                                    margin: 15px;
                                }

                                #logo {
                                    margin-left: -30px;
                                    width: 255px;
                                }
                            </style>

                        </div>
                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="header-nav header-nav-main nav nav-right  nav-divided nav-uppercase">
                                <li class="html custom html_topbar_left" style="font-size: 17px;"><span style="color: #000000;"> <?php _e("Questions? Call", "acplast"); ?> <a style="color: #000000;" href=""><?php echo $phone_number ?></a></span></li>
                                <li class="html header-button-1">
                                    <div class="header-button">
                                        <a href="<?php echo $link_free_quote ?>" class="button secondary" style="border-radius:99px;background-color:#DA251C !important;">
                                            <span><?php _e("Free quote","acplast"); ?></span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <div class="top-divider full-width"></div>
                    </div>
                </div>
                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
            </div>
        </header>