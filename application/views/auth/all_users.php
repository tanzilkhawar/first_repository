<?php
$this->load->view('_blocks/header');
?>
<html>
	<head>
    	<!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.css">
          
        <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
          
        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.js"></script>
        <script>
        	$(document).ready(function() {
				$('#users_table').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax": '<?php echo base_url() . "index.php/auth/process_data_table_ajax_with_join"?>'
				} );
			} );
	
		</script>
    </head>
<body>

<table id="users_table" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Father Name</th>
             <th>Phone </th>
            <th>Class</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

</html>