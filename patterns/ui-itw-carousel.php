<?php
/**
 * Title: ui-itw-carousel
 * Slug: urban-index/ui-itw-carousel
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"90vw"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2>Latest Interviews</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"border":{"radius":"1rem"}},"borderColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-main-border-color" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:cb/carousel {"infinite":true,"responsiveWidth":2000,"className":"ticss-c967de29","hasCustomCSS":true} -->
<div class="wp-block-cb-carousel ticss-c967de29" data-slick="{"slidesToShow":3,"slidesToScroll":1,"speed":300,"arrows":true,"dots":true,"autoplay":false,"autoplaySpeed":3000,"infinite":true,"responsive":[{"breakpoint":2001,"settings":{"slidesToShow":1,"slidesToScroll":1}}]}"><!-- wp:cb/slide -->
<div class="wp-block-cb-slide"><!-- wp:query {"queryId":19,"query":{"perPage":"1","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[16]}},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"textAlign":"center"} /-->

<!-- wp:post-date {"textAlign":"center"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cb/slide -->

<!-- wp:cb/slide -->
<div class="wp-block-cb-slide"><!-- wp:query {"queryId":19,"query":{"perPage":"1","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[16]}},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"textAlign":"center"} /-->

<!-- wp:post-date {"textAlign":"center"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cb/slide -->

<!-- wp:cb/slide -->
<div class="wp-block-cb-slide"><!-- wp:query {"queryId":19,"query":{"perPage":"1","pages":"1","offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[16]}},"displayLayout":{"type":"list","columns":3},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-featured-image /-->

<!-- wp:post-title {"textAlign":"center"} /-->

<!-- wp:post-date {"textAlign":"center"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:cb/slide -->

<!-- wp:cb/slide -->
<div class="wp-block-cb-slide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:image {"id":25,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/ui-logo.webp" alt="" class="wp-image-25"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><a href="https://www.urbanindex.fyi/category/interviews/" data-type="category" data-id="16">See more Interviews</a></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:cb/slide --></div>
<!-- /wp:cb/carousel --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->