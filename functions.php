<?php

/*
* BLOCK STYLES
*/
add_action( 'init', function() {
	register_block_style( 'core/group', [
		'name'         => 'full-height',
		'label'        => __( 'Full Height' ),
		'inline_style' => '.wp-block-group.is-style-full-height { height: 100%; display: flex; flex-direction: column; justify-content: space-between; align-items: center; text-align: center }'
	] );
} );

/*
* BLOCK PATTERNS
*/

if ( function_exists( 'register_block_pattern_category' ) ) {
    register_block_pattern_category(
      'urban-index',
      array( 'label' => __( 'Urban Index', 'urban-index' ) )
   );
}

function urban_index_block_patterns() {
	register_block_pattern(
        'urban-index/ui-category-latest-articles-query',
        array(
            'title'       => __( 'Latest Articles in Category', 'urban-index'),
            'description' => _x( 'Use to display the latest articles in a category', 'urban-index' ),
            'categories'  => array( 'urban-index', 'query' ),
            'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading -->
			<h2>Latest Articles</h2>
			<!-- /wp:heading -->
			
			<!-- wp:query {"queryId":6,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]}},"displayLayout":{"type":"flex","columns":3}} -->
			<div class="wp-block-query"><!-- wp:post-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"1rem"}},"borderColor":"main","className":"is-style-full-height","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-full-height has-border-color has-main-border-color" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"height":""} /-->
			
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-default" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-date /-->
			
			<!-- wp:post-title /--></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
			
			<!-- wp:query-no-results -->
			<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
			<p></p>
			<!-- /wp:paragraph -->
			<!-- /wp:query-no-results --></div>
			<!-- /wp:query --></div>
			<!-- /wp:group -->'
			)
    );

    register_block_pattern(
        'urban-index/ui-category-all-articles-query',
        array(
            'title'       => __( 'All Articles in Category', 'urban-index'),
            'description' => _x( 'Use to display all articles in a category', 'urban-index' ),
            'categories'  => array( 'urban-index', 'query' ),
            'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group"><!-- wp:heading -->
			<h2>All Articles</h2>
			<!-- /wp:heading -->
			
			<!-- wp:query {"queryId":23,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]}}} -->
			<div class="wp-block-query"><!-- wp:post-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"0rem","bottom":{"radius":"0rem","color":"var:preset|color|main"}}},"className":"is-style-default","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group is-style-default" style="border-radius:0rem;border-bottom-color:var(--wp--preset--color--main);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"width":"30vw","height":"","scale":"contain","style":{"border":{"radius":{"bottomRight":"0rem","topRight":"0rem","topLeft":"0rem","bottomLeft":"0rem"}}}} /-->
			
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
			<div class="wp-block-group"><!-- wp:post-title /-->
			
			<!-- wp:post-date /--></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
			
			<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			
			<!-- wp:query-pagination-numbers /-->
			
			<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
			
			<!-- wp:query-no-results -->
			<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
			<p></p>
			<!-- /wp:paragraph -->
			<!-- /wp:query-no-results --></div>
			<!-- /wp:query --></div>
			<!-- /wp:group -->'
            )
    );
}

add_action( 'init', 'urban_index_block_patterns' );