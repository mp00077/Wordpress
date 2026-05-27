<?php
/**
 * Title: Front page travel sections
 * Slug: travel-blog/front-page-sections
 * Categories: travel-blog, featured
 *
 * @package TravelBlog
 */
?>
<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:group {"metadata":{"name":"Latest stories"},"align":"wide","className":"travel-blog-reveal","style":{"spacing":{"padding":{"top":"5rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
	<div id="stories" class="wp-block-group alignwide travel-blog-reveal" style="padding-top:5rem;padding-bottom:4rem">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"style":{"typography":{"fontSize":"var:preset|font-size|large"}}} -->
			<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large)">Latest dispatches</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"360px"},"typography":{"fontSize":"var:preset|font-size|base"}}} -->
			<p style="font-size:var(--wp--preset--font-size--base)">A flexible query layout for photo essays, itineraries, reviews, and field notes.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:query {"queryId":1,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
		<div class="wp-block-query alignwide">
			<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
				<!-- wp:group {"className":"travel-blog-card","style":{"border":{"width":"1px","color":"#121d181a","radius":"8px"},"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1.1rem","left":"1rem"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
				<div class="wp-block-group travel-blog-card has-border-color has-white-background-color has-background" style="border-color:#121d181a;border-width:1px;border-radius:8px;padding-top:1rem;padding-right:1rem;padding-bottom:1.1rem;padding-left:1rem">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"6px"}}} /-->
					<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.78rem","fontWeight":"700","textTransform":"uppercase"},"spacing":{"margin":{"top":"1rem"}}},"textColor":"terracotta"} /-->
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.55rem","lineHeight":"1.05"},"spacing":{"margin":{"top":"0.4rem","bottom":"0.65rem"}}}} /-->
					<!-- wp:post-excerpt {"moreText":"Continue reading","excerptLength":20,"style":{"typography":{"fontSize":"0.95rem"}}} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
			<!-- wp:query-no-results -->
				<!-- wp:paragraph -->
				<p>Add your first travel stories and they will appear here automatically.</p>
				<!-- /wp:paragraph -->
			<!-- /wp:query-no-results -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Destinations"},"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"backgroundColor":"pine","textColor":"background","layout":{"type":"constrained"}} -->
	<div id="destinations" class="wp-block-group alignfull has-background-color has-pine-background-color has-text-color has-background" style="padding-top:5rem;padding-bottom:5rem">
		<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
				<!-- wp:paragraph {"className":"travel-blog-eyebrow","textColor":"sun"} -->
				<p class="travel-blog-eyebrow has-sun-color has-text-color">Destination system</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"style":{"typography":{"fontSize":"var:preset|font-size|large"}},"textColor":"white"} -->
				<h2 class="wp-block-heading has-white-color has-text-color" style="font-size:var(--wp--preset--font-size--large)">Build archives that feel like route maps.</h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|lead"}}} -->
				<p style="font-size:var(--wp--preset--font-size--lead)">Use categories for regions, tags for travel styles, and patterns for recurring city guide sections.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:group {"className":"travel-blog-route-line","style":{"spacing":{"padding":{"left":"2rem"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group travel-blog-route-line" style="padding-left:2rem">
					<!-- wp:group {"className":"travel-blog-feature","style":{"border":{"width":"1px","color":"#fbf7ef40","radius":"8px"},"spacing":{"padding":{"top":"1.2rem","right":"1.2rem","bottom":"1.2rem","left":"1.2rem"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group travel-blog-feature has-border-color" style="border-color:#fbf7ef40;border-width:1px;border-radius:8px;padding-top:1.2rem;padding-right:1.2rem;padding-bottom:1.2rem;padding-left:1.2rem">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.35rem"}},"textColor":"white"} -->
						<h3 class="wp-block-heading has-white-color has-text-color" style="font-size:1.35rem">48-hour city guides</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p>Compact itineraries with where to stay, eat, walk, and photograph.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"className":"travel-blog-feature","style":{"border":{"width":"1px","color":"#fbf7ef40","radius":"8px"},"spacing":{"padding":{"top":"1.2rem","right":"1.2rem","bottom":"1.2rem","left":"1.2rem"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group travel-blog-feature has-border-color" style="border-color:#fbf7ef40;border-width:1px;border-radius:8px;padding-top:1.2rem;padding-right:1.2rem;padding-bottom:1.2rem;padding-left:1.2rem">
						<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.35rem"}},"textColor":"white"} -->
						<h3 class="wp-block-heading has-white-color has-text-color" style="font-size:1.35rem">Slow travel journals</h3>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p>Long-form entries for trains, coastlines, villages, mountains, and local rituals.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Guides"},"align":"wide","className":"travel-blog-reveal","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem"}}},"layout":{"type":"constrained"}} -->
	<div id="guides" class="wp-block-group alignwide travel-blog-reveal" style="padding-top:5rem;padding-bottom:5rem">
		<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"3rem"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"travel-blog-image-lift travel-blog-parallax"} -->
				<figure class="wp-block-image size-full travel-blog-image-lift travel-blog-parallax"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-travel-blog.png' ) ); ?>" alt="Travel desk with map, notebook, camera, and coastal light"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:paragraph {"className":"travel-blog-eyebrow","textColor":"terracotta"} -->
				<p class="travel-blog-eyebrow has-terracotta-color has-text-color">Editorial toolkit</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"style":{"typography":{"fontSize":"var:preset|font-size|large"}}} -->
				<h2 class="wp-block-heading" style="font-size:var(--wp--preset--font-size--large)">Designed for beautiful posts without custom coding.</h2>
				<!-- /wp:heading -->
				<!-- wp:list {"style":{"spacing":{"padding":{"left":"1.2rem"}}}} -->
				<ul style="padding-left:1.2rem">
					<li>Full-width hero photography and readable article rhythm.</li>
					<li>Cards for guides, destinations, gear lists, and route notes.</li>
					<li>Subtle reveal and parallax motion with reduced-motion support.</li>
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->
