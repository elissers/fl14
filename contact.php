<?php require'includes/config.php';?>
<?php include 'includes/header.php';?>

<h1>Contact Us</h1>
<p>Why? Because we care!</p>
<?php
if(isset($_POST['First_Name']))
{//if there is data, show it
	/*echo $_POST['FirstName'];*/
	
	$message = process_post();
	
	safeEmail('etorge01@seattlecentral.edu','test subject',$message);
	echo 'Thank you for your message!';
	
}else{//show the form
	echo ' 
	<form action="contact.php" method="post">
		<p>First Name: <input type="text" name="First_Name" required="required" /></p>	
		<p>Email: <input type="email" name="Email" required="required" /></p>		
		<p>Comments:<textarea rows="6" cols="50" name="Comments"></textarea></p>
		<input type="submit" value="Submit" />
	</form>
	';	
}

?>
<?php include 'includes/footer.php';?>