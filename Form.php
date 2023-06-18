<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<?php include('Header.php'); ?>
<title>HomePage</title>

	<center><img src="PicturesOfWork\COGS.JPG" class="img-fluid" alt="..." /></center>
			
	<div class="line"></div>
	<h1><center>Daniel Donovan</center></h1>
			<p><center><b>COG's NSCC ~ Student ~ W0302046</b></center></p>
			<br>
			<br>
			<br>
			<br>
<!--This here will insert into my database on SQL to store this message -->
<p>Would you like to leave me a message, if so fill in the texts boxes below and I will get back to you</p><br>
<form action="insert.php" method="post">
	Name: <input type="text" name="name"><br><br>
	Email: <input type="text" name="email"><br><br>
	Comment: <br><textarea name="comment" rows="5" cols="40"></textarea><br>
<br>
<input type="submit" value="insert">
</form>
<br>
<p>would you like to see all entries, if so click the "pull" button</p>
<form action="Pull.php" method="get">
<input type="submit" value="pull">
</form>





<div class="line"></div>
			
<!-- Main Content End -->
<?php include('Footer.php'); ?>

</html>
