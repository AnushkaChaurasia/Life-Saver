<?php

$response = array();
// get the values
	  $State = $_REQUEST['State'];

// include db connect class
   
 require_once __DIR__ . '/db_connect.php';
 
   // connecting to db

    $db = new DB_CONNECT();
  
    // mysql view Record

$result = mysql_query("SELECT name ,address,contact FROM bank WHERE state='$State'");
$num = mysql_num_rows($result);

header('Content-Type: application/json');
while($record = mysql_fetch_array($result)) 
{
 $Name[] = $record['name'];
 $Address[] = $record['address'];
 $Contact[] = $record['contact'];
}

$seprator = '@ ';

for ($x = 0; $x < $num; $x++) 
{
$response[$x]=    $Name[$x].$seprator.
                             $Address[$x].$seprator.
	           $Contact[$x];
} 

echo json_encode($response);
 
?>