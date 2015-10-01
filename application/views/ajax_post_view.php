<html>
	<head>
		<title>Insert 10 records of Students</title>
	</head>
	<body>
        <?php foreach ($single_student as $student): ?>
        <p>Edit Detail & Click Update Button</p>
        <form method="post" action="<?php echo site_url() . "/students/editfirst1"?>">
            <label >	Click Submit to Insert 10 records of Students	</label>
            <input type="submit" id="submit" name="dsubmit" value="Update">
        </form>
        <?php endforeach; ?>
	</body>
</html>