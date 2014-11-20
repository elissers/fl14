<?php require'includes/config.php';?>
<?php include 'includes/header.php';?>

<h1>So you want to go to the island right now?</h1>

<?php
if(isset($_POST['First_Name']))
{//if there is data, show it
	
	$message = process_post();
	
	safeEmail('etorge01@seattlecentral.edu','test subject',$message);
	echo 'Thank you for your message!';
	
}else{//show the form
	echo ' 
	<form action="go.php" method="post">
		<p>First Name:<input type="text" name="First_Name" required="required" /></p>
		<p>Last Name: <input type="text" name="Last_Name" required="required" /></p>
		<p>Email: <input type="email" name="Email" required="required" /></p>
            
		<p>Please select which island(s) you want to go to:<br />
		<input type="checkbox" name="Island" value="Hawaii" id="islandPick_0"/>Hawaii<br />
		<input type="checkbox" name="Island" value="Jamaica" id="islandPick_1" />Jamaica<br />
		<input type="checkbox" name="Island" value="Fiji" id="islandPick_2" />Fiji<br /></p>
            
		<p>Please tell us, are you:<br /> 
		<input type="radio" name="Sex" value="Male" id="sex_0" />Male<br />
		<input type="radio" name="Sex" value="Female" id="sex_1" />Female<br /></p>
            
		<p>Why do you feel you need an island vacation?<br />
		<textarea name="Why" rows="6" cols="50">Enter your comments here...</textarea><br /></p>
            
		<input type="submit" value="Submit" />
	</form>
	';	
}

?>
<?php include 'includes/footer.php';?>