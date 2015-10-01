<!DOCTYPE html>
<html lang="en">
    <head>
      <title>file_uploading_progress_bar</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="<?php  echo base_url().'js/ajax_form_submit.js'?>"></script>

<script type="text/javascript">
$(document).ready(function() { 
	 $('#fileupload').submit(function(e) {	
		
			e.preventDefault();
			//$('#loader-icon').show();
			$(this).ajaxSubmit({ 
				//target:   '#targetLayer', 
				beforeSubmit: function() {
				 // $("#progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){	
					$("div#progress_bar").attr("aria-valuenow",percentComplete);
					$("div#progress_bar").css("width", percentComplete+"%");
					$("div#progress_bar").html( percentComplete +' %');
				},
				success:function (){
					//$('#loader-icon').hide();
				},
				resetForm: true 
			}); 
			return false; 
		
	});
}); 

</script>
 <body>
    	<div class="container">
            <form id="fileupload" action="<?php echo base_url().'index.php/file_uploding_progress_bar/do_upload'; ?>"
            	method="POST" enctype="multipart/form-data">
        
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add file</span>
                    <input type="file" name="userfile" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                
            </form>
           <div id="progress" class="progress" >
              <div id="progress_bar" class="progress-bar progress-bar-striped active" role="progressbar"
              aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                0%
              </div>
            </div>
     	</div>
    </body>