<?php include('server.php')?>
<HTML>
	<head>
		<title>ACM Attendance</title>
	</head>
	<body>
		<form action="event.php" method="post">
			<select name="club">
				<option disable="disabled" selected="selected">-- Select Event --</option>
			  <option value="EHC">EHC</option>
			  <option value="CPT">CPT</option>
			  <option value="AI">AI</option>
			  <option value="other">Other</option>
			</select>
			<button type="submit" name="eventSelect" class="btn">Start Event</button>
		</form>
	</body>
</HTML>