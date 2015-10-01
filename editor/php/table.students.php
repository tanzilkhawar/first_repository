<?php

/*
 * Editor server script for DB table students
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
/*use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;
*/

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'students', 'stu_id' )
	->fields(
		Field::inst( 'stu_name' ),
		Field::inst( 'std_fname' ),
		Field::inst( 'std_ph_no' )
	)
	->process( $_POST )
	->json();
	
