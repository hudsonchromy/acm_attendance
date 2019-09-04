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
		$db = mysqli_connect("us-cdbr-iron-east-02.cleardb.net", "b712252c7b12bc", "1faea87e") or die('Error: Unable to Connect');
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$times = microtime(true);
	$sql = "INSERT INTO checkins (username, timems, event) VALUES ('$username', $times, '$club')";
	echo $sql;
	$result = mysqli_query($db, $sql);
	echo $result;
}
?>