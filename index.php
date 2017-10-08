<?php
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=change_tkts', 'ticketsuser','test');
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
	$error = 'Error fetching changes list: ' . $e->getMessage();
	include 'error.html.php';
	exit();
}

while ($row = $result->fetch())
{
	$requests[] = $row['change_requested'];

}
include 'tickets.html.php';
