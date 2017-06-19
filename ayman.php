<?php 
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		$users = array('ayman', 'adham');
		$user = $_POST['username'];

		session_start();

		if (in_array($user, $users)) {
			$_SESSION['username'] = $user;
			header('REFRESH:0;URL=global.php');
		}else {
			echo "You not allaw to view global page.";
			header('REFRESH:0;URL=login.php');
			$_SESSION['username'] = null;
		}
	}else {
		header('REFRESH:0;URL=login.php');
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: <?php echo $bodyColor; ?>"> 

</body>
</html>