<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once 'databaseclass.php';
include_once 'student.php';
 
// get database connection
$database = new Database();
$db = $database->get_connection();
 
// prepare product object
$student = new Student($db);
 
// set ID property of record to read
//$student->id = isset($_GET['id']) ? $_GET['id'] : die();

if(isset($_SERVER['REQUEST_URI'])){
    $array = explode('/', $_SERVER['REQUEST_URI']);
   // if(isset($array[0])){ $x = $array[0]; }
    //if(isset($array[1])){ $o->api = $array[1]; }
    //if(isset($array[2])){ $o->api = $array[2]; }
    if(isset($array[2])){ $student->id = $array[2]; }
    //if(isset($array[4])){ $o->action = $array[4]; }
 }	
// read the details of product to be edited
 if(isset($array[3]))
 {
    $student->readOne($array[3]);    
 }
 else
 {
  $student->readOne("GET");  
 }
 
if($student->name!=null)
{
    // create array
 $student_arr = array(
 "id" => $student->id,
 "name" => $student->name,
 "last_name" => $student->last_name,
 "height" => $student->height,
 "weight" => $student->weight,
 "batch" => $student->batch,
 "description" => $student->description,
 "address" => $student->address,
 "city" => $student->city,
 "province" => $student->province,
 "country" => $student->country,
 "phone" => $student->phone,
 "email" => $student->email,
 "website" => $student->website,
 "MAD100" => $student->MAD100,
 "MAD105" => $student->MAD105,
 "MAD110" => $student->MAD110,
 "MAD120" => $student->MAD120,
 "MAD125" => $student->MAD125,
 "MAD200" => $student->MAD200,
 "MAD225" => $student->MAD225,
 "status" => $student->status
    );
 
    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($student_arr);
}
else if($student->delFlag == 1)
{
	 // set response code - 200 OK
    http_response_code(200);
 
    // tell the user product does not exist
    echo json_encode(array("message" => "Student Record Deleted Successfully!"));
}
else{
    // set response code - 404 Not found
    http_response_code(404);
 
    // tell the user product does not exist
    echo json_encode(array("message" => "Student does not exist!"));
}
?>