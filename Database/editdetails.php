<?php
 
// get the values
	$Name = $_REQUEST['Name'];
	$Email = $_REQUEST['Email'];
	$Password = $_REQUEST['Password'];
	$City = $_REQUEST['City'];
	$Distric = $_REQUEST['Distric'];
	$State = $_REQUEST['State'];
	$Contact = $_REQUEST['Contact'];

    // include db connect class
    require_once __DIR__ . '/db_connect.php';
 
    // connecting to db
    $db = new DB_CONNECT();

    // mysql Update a  row
    $result1 =@mysql_query("UPDATE donors SET name='$Name',
				            password='$Password',
				            city='$City',
				            distric='$Distric',
			 	            state='$State',
				            contact='$Contact' WHERE email='$Email'")
			 	            or die(mysql_error());
			

// check if row Updated or not
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