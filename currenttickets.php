<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of Current Tickets</title>
  </head>
  <body>
  	<p><a href="?addticket">Add a new ticket</a></p>
  	<p>Here are all the current tickets:</p>
    <!-- <?php try {
	$pdo = new PDO('mysql:host=localhost;dbname=change_tkts', 'change_tktsuser','mypassword');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');

}
catch (PDOException $e)
{
	$output = 'Unable to connect to the database server: ' .
	$e->getMessage();
	include 'output.html.php';
	exit();
}
$output = 'Database connection established.';
include 'output.html.php';

try
{
	$sql = 'SELECT change_requested FROM requests';
	$result = $pdo->query($sql);
}
catch (PDOException $e)
{
	$error = 'Error fetching tickets: ' . $e->getMessage();
	include 'error.html.php';
	exit();
}

while ($row = $result->fetch())
{
	$jokes[] = $row['change_requested'];
}
include 'tickets.html.php';-->

  </body>
</html>
