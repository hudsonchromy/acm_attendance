<?
session_start();
if (!isset($_SESSION['event'])) {
	$_SESSION['event'] = "-- Select Event --";
}
if (isset($_POST['eventSelect'])) {
	$_SESSION['event'] = $_POST['club'];
	header('location: index.php');
}
if (isset($_POST['login'])) {
	if ($_SESSION['event'] == "-- Select Event --") {
		header("location: event.php");
	}
	$club = $_SESSION['event'];
	$HOST = getenv('host');
	$USERNAME = getenv('username');
	$PASSWORD = getenv('password');
	$DBNAME = getenv('dbname');
	$db = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DBNAME) or die('Error: Unable to Connect');
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$times = microtime(true);
	$sql = "INSERT INTO checkins (username, timems, event) VALUES ('$username', $times, '$club')";
	$result = mysqli_query($db, $sql);
}
?>