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
	else {
		$club = $_SESSION['event'];
		$HOST = getenv('host');
		$USERNAME = getenv('username');
		$PASSWORD = getenv('password');
		$DBNAME = getenv('dbname');
		$db = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DBNAME) or die('Error: Unable to Connect');
		$username = substr(strtolower(mysqli_real_escape_string($db, $_POST['username'])), 0, 7);

		if (ctype_alpha(substr($username, 0, 3)) && ctype_digit(substr($username, 3, 4))) {
			$times = microtime(true);
			$sql = "INSERT INTO checkins (username, timems, event) VALUES ('$username', $times, '$club')";
			$result = mysqli_query($db, $sql);
		}
		else {
			echo "Error";
		}
	}
}
if (isset($_POST['analyze'])) {
	$db = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DBNAME) or die('Error: Unable to Connect');
	$start = mysqli_real_escape_string($db, $_POST['start']);
	$end = mysqli_real_escape_string($db, $_POST['end']);
	$find = "SELECT * FROM checkins WHERE timems BETWEEN $start AND $end" ;
	$result = mysqli_query($db, $sql);
	echo $find;
}
?>