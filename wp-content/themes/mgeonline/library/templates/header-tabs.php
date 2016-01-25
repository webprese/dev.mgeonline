<div class="tabbed-content">
	<div class="container">
		<div id="tabs" >
			<ul>
				<li id="tab1" class="tab">Categories of Articles</li>
				<li id="tab2" class="tab">Most Recent Articles</li>
				<li id="tab3" class="tab">Authors</li>
				<li id="tab4" class="tab">Archives</li>
			</ul>
		</div>
	</div>
</div>
<div id="tabcontents">
<div class="tabbed-content ">

    <div id="tab1content" class="tabcontent container">
        <?php 
    $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => '',
	'show_option_none'   => __( '' ),
	'number'             => 18,
	'echo'               => 1,
	'depth'              => 1,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
    );
    wp_list_categories( $args ); 
?>
    </div>
    </div>
    <div id="tab2content" class="tabcontent">
   <ul>
<?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>

    </div>
    
    <div id="tab3content" class="tabcontent">
              <?php wp_list_authors('show_fullname=1&optioncount=1&orderby=post_count&order=DESC'); ?>

    </div>
    <div id="tab4content" class="tabcontent">
 <?php $args = array(
	'type'            => 'monthly',
	'limit'           => '15',
	'format'          => 'html', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC',
        'post_type'     => 'post'
);
wp_get_archives( $args ); ?>
    </div>
</div>


