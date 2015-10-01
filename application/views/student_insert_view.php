<html>
	<head>
    	<title>CodeIgniter ajax post</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">
			// Ajax post
			$(document).ready(function() {
				$("#insert_product").submit(function(event) {
					event.preventDefault();
					var number_of_students_record_to_insert = $("input#number_of_students").val();
					$.ajax({
						type: "POST",
						url:$("#insert_product").attr("action"),
						dataType: 'json',
						data: {nos: number_of_students_record_to_insert},
						success: function(res) {
							if (res)
							{
								// Show Entered Value
								alert("Submitted");
								$("#test").show();
								$("#message").html(res.message);
								$("#status").html(res.status);
							}
							
						}
					});
					return false;
				});
			});
    	</script>  
	</head>
       	<h3>Insert students Records</h3>
        <form method="post" id='insert_product' action="<?php echo site_url() . "/students/insert_10_students_ajax_submit"?>">
            <input type="number" min='0' id="number_of_students" name="number_of_students" placeholder="Number of records here" ><br><br>
            <input type="submit" id="submit" name="dsubmit" value="Click Me">
        </form>
        <?php
        echo "<div id='test'style='display: none'>";
                echo "<div id='content_result'>";
                echo "<div id='message'> </div>";
                echo "<div id='status'> </div>";
               echo "</div>";
                echo "</div>";
		?>
	</body>
</html>