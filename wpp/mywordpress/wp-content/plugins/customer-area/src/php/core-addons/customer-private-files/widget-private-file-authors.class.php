<?php
/*  Copyright 2013 MarvinLabs (contact@marvinlabs.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

require_once( CUAR_INCLUDES_DIR . '/core-classes/addon-page.class.php' );
require_once( CUAR_INCLUDES_DIR . '/core-classes/widget-content-authors.class.php' );

if (!class_exists('CUAR_PrivateFileAuthorsWidget')) :

/**
 * Widget to show private file categories
*
* @author Vincent Prat @ MarvinLabs
*/
class CUAR_PrivateFileAuthorsWidget extends CUAR_ContentAuthorsWidget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
				'cuar_private_file_authors', 
				__('WPCA - File Authors', 'cuar'),
				array( 
						'description' => __( 'Shows the private file author archives of the Customer Area', 'cuar' ), 
					)
			);
	}

	protected function get_post_type() {
		return 'cuar_private_file';
	}
	
	protected function get_default_title() {
		return __( 'Created By', 'cuar' );
	}
	
	protected function get_link( $author_id ) {
		/** @var CUAR_CustomerPrivateFilesAddOn $addon */
		$addon = cuar_addon( 'customer-private-files' );

		return $addon->get_author_archive_url( $author_id );
	}
	
}

endif; // if (!class_exists('CUAR_PrivateFileAuthorsWidget')) 
