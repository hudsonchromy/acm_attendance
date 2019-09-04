<?php include('server.php')?>
<HTML>
	<head>
		<title>ACM Attendance</title>
		<link rel="stylesheet" href="https://cdn.auburn.edu/assets/css/bootstrap.min.css">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Auburn_Tigers_logo.svg/1158px-Auburn_Tigers_logo.svg.png">
		<h1><?echo $_SESSION['event'];?> Check In</h1>
		<h1>Fuck Turner</h1>
		<form action="index.php" method="post">
			<input placeholder="AU Username (abc0012)" type="text" name="username">
			<br>
			<button type="submit" name="login" class="btn">Check In</button>
		</form>
	</body>
	<script>
		function showUsers(letter) {
			console.log(letter);
			$('.letterBox').hide();
		}
	</script>
</HTML>