<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), TRUE);


if (isset($data['firstName']) && isset($data['lastName']) && isset($data['_subject']) && isset($data['emailAddress']) && isset($data['_message'])) {


    

$username = "contentk_contentk";
$password = "9Ab_yz13ck";
$hostname = "localhost"; 
$dbname = "contentk_userform";

$firstName = $data['firstName'];
$lastName = $data['lastName'];
$subject = $data['_subject'];
$emailAddress = $data['emailAddress'];
$message = $data['_message'];
$tableName = "contentkidsform";



$mailTo = "ecandy@content-kids.com";
$headers = "From: $emailAddress";
$txt = "$message";

mail($mailTo, $subject, $txt, $headers );

// echo 'It has done something';

//connection to the database


// try{

//     $dbhandle = mysqli_connect($hostname, $username, $password, $dbname);
   
    
//     $query = "INSERT INTO  $tableName set firstname= $firstName, lastname= $lastName, email= $emailAddress, _message = $message";
 

//     try{

//         if($dbhandle->query($query)){
//             echo "added to database<br>";
//         }else{
//             echo "not added to database<br>";
//         }
        
//     }catch(mysqli_sql_exception $e){
//         echo "Failed to post to database: " . $e->getMessage()."\n";
//     }
  

    

// }catch(mysqli_sql_exception $e){
//     echo "Connection failed: " . $e->getMessage()."\n";
// }
}
else {

    echo "It has done NOTHING!";

}

?>