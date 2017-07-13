<?php
/**
 * Plugin Name: Tennis Events
 * Plugin URI: http://www.tennis-events.com
 * Description: A simple plugin that adds Tennis Events as a Custom Post Type
 * Version: 1.0
 * Author: Chirstopher Schenk
 * Author URI: http://www.tennis-events.com
 * License: GPL2
 */

/*  Copyright 2017  Christopher Schenk  (email : christopher.schenk@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function tennis_events_posttype(){
	//labels arrayet is for the dashboard menu items
	$labels = array(
			'name'               => 'Tennis Events',
			'singular_name'      => 'Tennis Event',
			'menu_name'          => 'Tennis Events',
			'name_admin_bar'     => 'Tennis Event',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Event',
			'new_item'           => 'New Tennis Event',
			'edit_item'          => 'Edit tennis event',
			'view_item'          => 'View tennis event',
			'all_items'          => 'All tennis events',
			'search_items'       => 'Search tennis events',
			'parent_item_colon'  => 'Parent tennis events:',
			'not_found'          => 'No tennis events found',
			'not_found_in_trash' => 'No tennis events in trash'
		);


	//Arguments for events posttype (public = public for guests), label is for the backend
	$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'tennis-events' ),  //short code links
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'menu_icon'			 => 'dashicons-editor-justify',
			'supports'           => array('title'),
			'taxonomies'		 => array('category')
		);
	#Register the post type with name: tennis_events
  #This is the identifier to use as 'post_type' in WP_Query
	register_post_type('tennis_events', $args);
}

//When the plugine is initialized, the events_posttype function is run
add_action('init', 'tennis_events_posttype');

/*Rewrite flush*/
function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry,
    // when you add a post of this CPT.
    tennis_events_posttype();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    # Make permalinks work with above Custom Post Type:
    # http://wpengineer.com/2044/custom-post-type-and-permalink/

    flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'my_rewrite_flush' );
