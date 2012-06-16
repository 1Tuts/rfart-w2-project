<?php if ( ! is_single() && 'false' == get_option('gleam_blog_style') && ( $index_postinfo = get_option('gleam_postinfo1') ) && $index_postinfo ) { ?>
	<p class="meta">
		<?php et_postinfo_meta( $index_postinfo, get_option('gleam_date_format'), esc_html__('0 comments','Gleam'), esc_html__('1 comment','Gleam'), '% ' . esc_html__('comments','Gleam') ); ?>
	</p>
<?php } elseif ( ( is_single() && get_option('gleam_postinfo2') ) || 'on' == get_option('gleam_blog_style') ) { ?>
	<p class="meta-info">
		<?php et_postinfo_meta( get_option('gleam_postinfo2'), get_option('gleam_date_format'), esc_html__('0 comments','Gleam'), esc_html__('1 comment','Gleam'), '% ' . esc_html__('comments','Gleam') ); ?>
	</p>
<?php }; ?>