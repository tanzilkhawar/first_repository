<!doctype html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>DataTables Editor - students</title>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jqc-1.11.3,dt-1.10.9,b-1.0.3,se-1.0.1/datatables.min.css">
		
		<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/r/dt/jqc-1.11.3,dt-1.10.9,b-1.0.3,se-1.0.1/datatables.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
		<script type="text/javascript" charset="utf-8" src="js/table.students.js"></script>
        <script>
		
/*
 * Editor client script for DB table students
 * Created by http://editor.datatables.net/generator
 */

(function($){

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: 'php/table.students.php',
		table: '#students',
		fields: [
			{
				"label": "Student Name",
				"name": "stu_name"
			},
			{
				"label": "Father Name",
				"name": "std_fname"
			},
			{
				"label": "Contact Number",
				"name": "std_ph_no"
			}
		]
	} );

	var table = $('#students').DataTable( {
		dom: 'Bfrtip',
		ajax: 'php/table.students.php',
		columns: [
			{
				"data": "stu_name"
			},
			{
				"data": "std_fname"
			},
			{
				"data": "std_ph_no"
			}
		],
		select: true,
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor }
		]
	} );
} );

}(jQuery));

		
		</script>
	</head>
	<body class="dataTables">
		<div class="container">

			<h1>
				DataTables Editor <span>students</span>
			</h1>
			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="students" width="100%">
				<thead>
					<tr>
						<th>Student Name</th>
						<th>Father Name</th>
						<th>Contact Number</th>
					</tr>
				</thead>
			</table>

		</div>
	</body>
</html>