<?php
if (get_magic_quotes_gpc())
{
	$process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
	while (list($key, $val) = each($process))
	{
		foreach ($val as $k =>$v)
		{
			unset($process[$key][$k]);
			if (is_array($v))
			{
				$process[$key][stripslashes($k)] = $v;
				$process[] =&$process[$key][stripslashes($v)];
			}
			else
			{
				$process[$key][stripslashes($k)] = stripslashes($v);
			}
		}
	}
	unset($process);
}
include 'connect.php';
if (isset($_GET['addticket']))
{
	include 'form.html.php';
	exit();
}



$output = 'Database connection established.';
include 'output.html.php';

if (isset($_POST['change_requested']))
{
	try
	{
		$sql = 'INSERT INTO requests SET
		change_requested = :change_requested,
		requester = :requester,
		ident_to_change = :ident_to_change;
	$s = $pdo->prepare($sql);
	$s->bindValue(':change_requested', $_POST['change_requested']);
	$s->bindValue(':requester', $_POST['requester']);
	$->bindValue(':ident_to_change', $_POST['ident_to_change']);
	$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error adding submitted request: ' . $e->getMessage();
		include 'error.html.php';
		exit();
	}
}

try
{
	$sql = 'SELECT request_no, requester, date_requested, ident_to_change,change_requested FROM requests';
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
	$requests[] = $row['request_no'].'   '.$row['requester'].'....'.date('d/m/Y',strtotime($row['date_requested']))."\n".$row['ident_to_change'].'----'.$row['change_requested'];


}
include 'tickets.html.php';
