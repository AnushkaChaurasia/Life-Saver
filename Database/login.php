<?php


// get the values

	$EnteredEmail = $_REQUEST['EnteredEmail'];
	$EnteredPassword = $_REQUEST['EnteredPassword'];

// include db connect class
   
 require_once __DIR__ . '/db_connect.php';
 
   // connecting to db

    $db = new DB_CONNECT();
  
    // mysql view Record

$result = mysql_query("SELECT * FROM donors WHERE email='$EnteredEmail'");
header('Content-Type: application/json');
if ($record = mysql_fetch_array($result)) 
{
 $Name = $record['name'];
 $Email=$record['email'];
 $Password = $record['password'];
 $City = $record['city'];
 $Distric = $record['distric'];
 $State = $record['state'];
 $Contact = $record['contact'];
 $Bloodgroup=$record['bloodgroup'];


}

 $response=array('Name' =>$Name,
	           'Email' =>$Email,
                             'Password'=>$Password,
                             'City'=>$City,
	           'Distric'=>$Distric,
	           'State'=>$State,
	           'Contact'=>$Contact,
                             'Bloodgroup'=>$Bloodgroup
	          );

 echo json_encode($response);

?>