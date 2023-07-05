<?php
$response = array();
// get the values

	$Name = $_REQUEST['Name'];
	
	$Contact = $_REQUEST['Contact'];
	$Address = $_REQUEST['Address'];
	$BloodGroup = $_REQUEST['BloodGroup'];
	$Dob = $_REQUEST['Dob'];


// include db connect class
   
 require_once __DIR__ . '/db_connect.php';
 
   // connecting to db

    $db = new DB_CONNECT();
 
    // mysql inserting a new row

 $result1 =@mysql_query("INSERT INTO donors VALUES('$Name',
					'$Contact','$Address','$BloodGroup','$Dob')") 
					or die(mysql_error());

// check if row inserted or not

    if ($result1)
 {
      $msg = "success";
      $response = array('msg' => $msg);
 }

    else 
{
      $msg = "fail";
      $response = array('msg' => $msg);
}

echo json_encode($response);

?>