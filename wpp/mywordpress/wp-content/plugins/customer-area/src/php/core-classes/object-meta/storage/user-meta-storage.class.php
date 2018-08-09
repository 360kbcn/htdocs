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

if (!class_exists('CUAR_UserMetaStorage')) :

include_once( CUAR_INCLUDES_DIR . '/core-classes/object-meta/storage/storage.interface.php' );

/**
 * An implementation to store info as user meta
*
* @author Vincent Prat @ MarvinLabs
*/
class CUAR_UserMetaStorage implements CUAR_Storage {

	public function __construct() {
	}

	public function update_field_value( $object_id, $field_id, $value ) {
		update_user_meta( $object_id, $field_id, $value );
	}

	public function fetch_field_value( $object_id, $field_id ) {
		return get_user_meta( $object_id, $field_id, true );
	}
	
}

endif; // if (!class_exists('CUAR_UserMetaStorage')) :