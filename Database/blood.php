<?php

$response = array();
// get the values
	  $BloodGroup = $_REQUEST['BloodGroup'];

// include db connect class
   
 require_once __DIR__ . '/db_connect.php';
 
   // connecting to db

    $db = new DB_CONNECT();
  
    // mysql view Record

$result = mysql_query("SELECT name ,contact,address FROM donors WHERE bloodgroup='$SBloodGroup'");
$num = mysql_num_rows($result);

header('Content-Type: application/json');
while($record = mysql_fetch_array($result)) 
{
 $Name[] = $record['name'];
 
 $Contact[] = $record['contact'];
$Address[] = $record['address'];
}

$seprator = '@ ';

for ($x = 0; $x < $num; $x++) 
{
$response[$x]=    $Name[$x].$seprator.
                             
	           $Contact[$x].$separator.$Address[$x].$seprator.;
} 

echo json_encode($response);
 
?>