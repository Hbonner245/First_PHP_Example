<doctype! html>
<html>
<head>
	<title> User Data</title>
</head>
<body>
	<?php 
		$Name  = $_POST['name'];
		$Fav_Food = $_POST['Fav_Food'];
		$Age = $_POST['Age'];
		
		echo "<p>Welcome <strong>" .$Name. "</Strong></p>";
		echo "<p>Your fav food is: " . $Fav_Food . "and your age is: " .$Age. "</p>";

	?> 

</body>
</html>
