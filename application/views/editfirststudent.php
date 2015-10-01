<html>
	<head>
		<title>Edit First Student</title>
	</head>
	<body>
        <?php foreach ($single_student as $student): ?>
        <p>Edit Detail & Click Update Button</p>
        <form method="post" action="<?php echo site_url() . "/students/editfirst1"?>">
            <label id="hide">Id :</label>
            <input type="text" id="hide" name="did" value="<?php echo $student->stu_id; ?>">
            <label>Name :</label>
            <input type="text" name="name" value="<?php echo $student->stu_name; ?>">
            <label>Father Name :</label>
            <input type="text" name="fname" value="<?php echo $student->stu_fname; ?>">
            <input type="submit" id="submit" name="dsubmit" value="Update">
        </form>
        <?php endforeach; ?>
	</body>
</html>