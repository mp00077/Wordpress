<?php
/**
 * Title: Travel hero
 * Slug: travel-blog/hero
 * Categories: travel-blog, featured
 * Viewport Width: 1440
 *
 * @package TravelBlog
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-travel-blog.png' ) ); ?>","dimRatio":55,"overlayColor":"ink","focalPoint":{"x":0.68,"y":0.48},"minHeight":720,"minHeightUnit":"px","contentPosition":"center left","isDark":true,"align":"full","className":"travel-blog-hero","style":{"spacing":{"padding":{"top":"6rem","bottom":"5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-dark has-custom-content-position is-position-center-left travel-blog-hero" style="padding-top:6rem;padding-bottom:5rem;min-height:720px">
	<span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-60 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-travel-blog.png' ) ); ?>" style="object-position:68% 48%" data-object-fit="cover" data-object-position="68% 48%"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left","contentSize":"680px"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"className":"travel-blog-eyebrow travel-blog-stamp","textColor":"sun"} -->
			<p class="travel-blog-eyebrow travel-blog-stamp has-sun-color has-text-color">Field notes for curious routes</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"var:preset|font-size|hero","lineHeight":"0.95"}},"textColor":"white"} -->
			<h1 class="wp-block-heading has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--hero);line-height:0.95">Travel Blog</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|lead","lineHeight":"1.55"},"spacing":{"margin":{"top":"1.25rem"}}},"textColor":"background"} -->
			<p class="has-background-color has-text-color" style="margin-top:1.25rem;font-size:var(--wp--preset--font-size--lead);line-height:1.55">A cinematic WordPress theme for long-form journeys, practical guides, destination archives, and photo-led travel stories.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
			<div class="wp-block-buttons" style="margin-top:2rem">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#stories">Read stories</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#destinations">Browse destinations</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
