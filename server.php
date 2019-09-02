<?
session_start();
if (isset($_POST['eventSelect'])) {
	$_SESSION['event'] = $_POST['club'];
	header('location: index.php');
}
if (isset($_POST['login'])) {
	$club = $_SESSION['event'];
	$db = mysqli_connect('127.0.0.1', 'root', '12345', 'attendance') or die('Error: Unable to Connect');
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$times = microtime(true);
	$sql = "INSERT INTO checkins (username, timems, event) VALUES ('$username', $times, '$club')";
	mysqli_query($db, $sql);
}
?>