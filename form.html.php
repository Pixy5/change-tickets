<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Add ticket</title>
    <style type="text/css">
    textarea {
    	display: block;
    	width: 100%;
    }
    </style>
  </head>
  <body>
  	<form action="?" method="post">
  		<div>
        <label for="requester">Your Initials:</label>
        <input type=text id="requester" name="requester"></input>
        <label for="ident_to_change">Ident of contact to change:</label>
        <input type=text id="ident_to_change" name="ident_to_change"></input>
  			<label for="change_requested">Type your contact change request here:</label>
  			<textarea id="change_requested" name="change_requested" rows="3" cols="40">
  			</textarea>
  		</div>
  		<div><input type="submit" value="Add"></div>
  	</form>

  </body>
</html>
