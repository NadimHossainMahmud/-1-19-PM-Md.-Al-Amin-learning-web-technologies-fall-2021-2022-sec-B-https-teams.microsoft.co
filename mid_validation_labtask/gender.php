<?php

	if(isset($_POST['submit']))
    {

		$gender = $_POST['gender'];

		if($gender == "")
        {
			echo "Null submission";
		}else{
			echo "Gender: ",$gender;
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gender Input</title>
</head>
<body>
	<form method="post" action="gender.php">
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="gender" value="Male"> Male 
			<input type="radio" name="gender" value="Female"> Female 
			<input type="radio" name="gender" value="Other"> Other <br> <hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html