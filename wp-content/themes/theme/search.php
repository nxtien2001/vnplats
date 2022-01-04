<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package theme
 */
$s = $_GET['s'];

$arr = new WP_Query(
	array(
		'posts_per_page' => -1,
		'post_type' => array(                   //(string / array) - tên post type cần lấy bài viết. Mặc định là 'post'
			// 'post',                         // -  post.
			'product',                         // - page.// - revision.

		),
		's' => $s,
	)
);


get_header();
?>
<main id="main" class="">
	<div class="row category-page-row">
		<div class="col large-12">
			<div class="shop-container">
				<div class="woocommerce-notices-wrapper"></div>
				<div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 equalize-box">
					<?php if (!empty(have_posts())) : ?>
						<h3><?php _e("Search results forresults for:","search"); ?> <i style="color: red;">"<?php echo $s ?>"</i></h3>
						<?php while ($arr->have_posts()) : $arr->the_post(); ?>
							<div class="product-small col has-hover product type-product post-907 status-publish first instock product_cat-reuse-recycled-plastic-bags has-post-thumbnail featured shipping-taxable product-type-simple">
								<div class="col-inner">
									<div class="badge-container absolute left top z-1">
									</div>
									<div class="product-small box ">
										<div class="box-image">
											<div class="image-zoom">
												<a href="<?= get_permalink($item->ID) ?>">
													<img src="<?= checkImage($arr->posts[$i]->ID); ?>" data-src="" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail lazy-load-active" alt="" loading="lazy" srcset="" style="object-fit: cover;" data-srcset="">
												</a>
												<style>
													.attachment-woocommerce_thumbnail {
														width: 300px;
														height: 320px;
													}
												</style>
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
												<p class="name product-title woocommerce-loop-product__title" style="height: 28px;">
													<a href="<?= get_permalink($item->ID) ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
														<?= get_the_title() ?></a>
												</p>
											</div>
											<div class="price-wrapper" style="height: 0px;"></div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php else : ?>
						<h3><?php _e("Results not found for:","nosearch"); ?> <i style="color: red;">"<?php echo $s ?>"</i></h3>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="paginate">
		<?php echo paginate_links(); ?>
	</div> -->
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
<?php
get_footer();
?>