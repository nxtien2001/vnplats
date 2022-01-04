<aside id="woocommerce_product_categories-2" <?php $title_cate = get_field('title_cate', 'option') ?> class="widget woocommerce widget_product_categories"><span class="widget-title "><span><?php echo  $title_cate ?></span></span>
    <div class="is-divider small"></div>
    <ul class="product-categories">
        <?php
//        $args = array(
//            'type' => 'product',
//            'hide_empty' => 0,
//            'taxonomy' => 'category_product'
//        );
//        $categories = get_categories($args);
        $id = get_the_ID();
        $categories = get_field('cate_pro',$id);
        foreach ($categories as $item) { ?>
            <li class="cat-item cat-item-28"><a href="<?= get_term_link($item->term_id) ?>"><?= $item->name ?></a> <span class="count"></span>
            </li>
        <?php } ?>
    </ul>
</aside>
<aside id="woocommerce_products-2" class="widget woocommerce widget_products">
    <?php $title_pro = get_field('title_pro', 'option') ?>
    <span class="widget-title "><span><?php echo  $title_pro ?></span></span>
    <div class="is-divider small"></div>
    <ul class="product_list_widget">
        <?php
        $pagedd = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $argss = array(
            'post_type' => array(
                'product'
            ),
            'paged' => $pagedd,
            'posts_per_page' => 5,
        );
        $wp_query = new WP_Query($argss);
        //            echo "<pre>";
        //            print_r($wp_query);die;
        $a = $wp_query->posts;
        ?>
        <?php foreach ($a as $item) : ?>
            <li>
                <a href="<?= get_permalink($item->ID) ?>">
                    <img width="100" height="100" src="<?= checkImage($item->ID) ?>" data-src="<?= checkImage($item->ID) ?>" class="" alt="" loading="lazy" srcset="<?= checkImage($item->ID) ?>" data-srcset="<?= checkImage($item->ID) ?>" sizes="(max-width: 100px) 100vw, 100px"> <span class="product-title"><?= $item->post_title ?></span>
                </a>
                <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>100</bdi></span>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>