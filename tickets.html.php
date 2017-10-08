<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>List of open tickets</title>
  </head>
  <body>
  	<p><a href="?addticket">Add a change request</a></p>
  	<p>Here are all the current change requests:</p>
    <?php	foreach ($requests as $request): ?>
    <blockquote>
    	<p><?php echo htmlspecialchars($request, ENT_QUOTES, 'UTF-8');
    	?>
    </p>

    </blockquote>

<?php endforeach; ?>

  </body>
</html>
