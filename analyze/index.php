<?php include('../server.php')?>
<HTML>
	<head>
		<title>ACM Attendance</title>
		<link rel="stylesheet" href="https://cdn.auburn.edu/assets/css/bootstrap.min.css">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		<form action="index.php" method="post">
			<input type="text" name="start">
			<input type="text" name="end">
			<br>
			<button type="submit" name="analyze" class="btn">Check In</button>
		</form>
	</body>
	<script>
		function showUsers(letter) {
			console.log(letter);
			$('.letterBox').hide();
		}
	</script>
</HTML>