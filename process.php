<!DOCTYPE html>
<html>
<body>
<?php

if(isset($_POST['submit'])) {
	$firstName = $_POST['first'];
    echo "First Name: ".$firstName."<br/>";
	$lastName = $_POST['last'];
    echo "Last Name: ".$lastName."<br/>";
    
}
?>
</body>
</html>