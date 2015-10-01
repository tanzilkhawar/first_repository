<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../../php/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'datatables_demo' )
	->fields(
		Field::inst( 'stu_name' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'std_fname' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'std_ph_no' )
	)
	->process( $_POST )
	->json();
