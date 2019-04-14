<?php 

if (!function_exists('_themename_post_meta')) {
	function _themename_post_meta(){
		/* Tramslator: %s : Post Date */
		printf(
			esc_html__('Posted on %s', '_themename'),
			'<a href="' . get_permalink() . '"><time datetime="'. get_the_date('c') . '">' . get_the_date('l, F j, Y') . '</time></a>'
					
		);

		/* Tramslator: %s : Post Author */
		printf(esc_html__('By %s', '_themename'),
			'<a href="' . get_author_posts_url( get_the_author_meta('ID') ) . '">' . get_the_author() . '</a>'
		);
	}
}
function _themename_readMore_link(){
		/* Tramslator: %s : Post Title */
	echo '<a class="badge badge-info" href="' . esc_url(get_the_permalink()) . '" title="' . the_title_attribute(['echo' => false]) . '">';
	printf(wp_kses(__('Read more <span class="u-screen-reader-text">about %s', '_themename'),
			[
				'span' => [
					'class' => []
				]
			]
		), 
             get_the_title() 
	);
	echo "</span></a>";
}
