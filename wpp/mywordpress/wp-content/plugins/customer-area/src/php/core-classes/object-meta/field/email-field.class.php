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

if (!class_exists('CUAR_EmailField')) :

include_once( CUAR_INCLUDES_DIR . '/core-classes/object-meta/field/simple-field.class.php' );

/**
 * An email field
 *
 * @author Vincent Prat @ MarvinLabs
 */
class CUAR_EmailField extends CUAR_SimpleField {

	public function __construct( $id, $storage, $args ) {
		parent::__construct( $id, $storage, $args );

		$this->set_renderer( new CUAR_EmailFieldRenderer( 
				$this->get_arg( 'label' ), 
				$this->get_arg( 'readonly' ), 
				$this->get_arg( 'inline_help' ) 
			) );
		
		$this->set_validation_rule( new CUAR_EmailValidation( 
				$this->get_arg( 'required' ) 
			) );
	}

	// See CUAR_Field
	public function get_type( $is_for_display ) {
		return $is_for_display ? __( 'Email', 'cuar' ) : 'email';
	}
	
	protected function get_default_args() {
		return array_merge( parent::get_default_args(), array( 
				'inline_help' 		=> '',
				'readonly' 			=> false,
				
				'required' 			=> false,				
			) );
	}
}

endif; // if (!class_exists('CUAR_EmailField')) :