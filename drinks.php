<?php
require'includes/config.php';
include 'includes/header.php';
include 'includes/credentials.php';?>

<h1>Island Beverages</h1>
<p>To get you on Island time.</p>

<?php
$sql = 'SELECT * FROM island_Drinks';

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysqli_fetch_assoc($result))
    {
	   echo "<p>";
	   echo "Drink: <b>" . $row['DrinkName'] . "</b><br />";
	   echo "Size: <b>" . $row['Size'] . "</b><br />";
	   echo "Price:" . "<b> $ " . $row['Price'] . "</b><br />";
	   echo "</p>";
    }
}else{//no records
	echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database
/*
//Connect to MySQL, authenticate the MySQL users
$myConn = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD)or die(mysql_error());

//Connect to the Database, verify authorization to this resource
mysql_select_db(DB_NAME,$myConn);

//Select data to be retrieved via SQL statement
//Retrieve data set (result)
$result = mysql_query($sql,$myConn);

//Loop through the data, and insert it into our page
while($row=mysql_fetch_assoc($result))                
{ //pull data from array                              
    echo "Drink Name: " . $row['DrinkName'] . "<br />";
    echo "Size: " . $row['Size'] . "<br />";  
    echo "Price: " . $row['Price'] . "<br />" . "<br />";        
}  
                                                   
//Disconnect from MySQL, and release resources
@mysql_free_result($result); # releases web server memory
@mysql_close($myConn);
*/


?>

<?php include 'includes/footer.php';?>                                             