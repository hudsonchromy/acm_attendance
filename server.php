<?
session_start();
if (isset($_POST['eventSelect'])) {
	$_SESSION['event'] = $_POST['club'];
	header('location: index.php');
}
if (isset($_POST['login'])) {
	$club = $_SESSION['event'];
	$HOST = getenv('host');
		$USERNAME = getenv('username');
		$PASSWORD = getenv('password');
		$DBNAME = getenv('dbname');
		echo $HOST;
		echo "     ";
		echo $USERNAME;
		echo "     ";
		echo $PASSWORD;
		echo "     ";
		echo $DBNAME;
		echo "     ";
		$db = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DBNAME, 3306) or die('Error: Unable to Connect');
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$times = microtime(true);
	$sql = "INSERT INTO checkins (username, timems, event) VALUES ('$username', $times, '$club')";
	mysqli_query($db, $sql);
}
?>