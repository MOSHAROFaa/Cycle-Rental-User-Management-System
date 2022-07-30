<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
//add db.php file
require '../api/db.php';

$app = new \Slim\App;

$app->get('/regusers', function (Request $request, Response $response, array $args) {


    $sql = "SELECT * FROM tblusers";

    try {
        // Get DB Objectqw
        $db = new db();
        // Connect
        $db = $db->connect();

        $stmt = $db->query($sql);
        $user = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($user);
    } catch (PDOException $e) {
        $data = array("status" => "fail");
        echo json_encode($data);
    }
});

$app->post('/id', function (Request $request, Response $response, array $args) {
  

  
  
     
     $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
   $ppic=$_FILES["profilepic"]["name"];
 
 
     try{
         $sql = "INSERT INTO antiqueitem (itemid, firstName, lastName, mobileNumber,  email, address, profilePicture) 
         values(:itemid, :firstName, :lastName, :mobileNumber,  :email, :address,  :profilePicture )";
 
         $db = new db();
     // Connect
     $db = $db->connect();
     $stmt = $db->prepare($sql);
 
     
     $stmt->bindValue(':fname', $fname);
     $stmt->bindValue(':lname', $lname);
     $stmt->bindValue(':contno', $contno);
     $stmt->bindValue(':email', $email);
     $stmt->bindValue(':add', $add);
     $stmt->bindValue(':ppic', $ppic);
    
  
 
     $stmt->execute();
     $count = $stmt->rowCount();
     $db = null;
 
     $data = array(
         "status" => "success",
         "rowcount" =>$count
     );
     echo json_encode($data);
 } catch (PDOException $e) {
     $data = array(
         "status" => "fail"
     );
     echo json_encode($data);
 }
 }
 );

 
 $app->delete('/id/{u_id}', function (Request $request, Response $response, array $args) {
    
    //delete a user from database based on id
    $id = $args['u_id'];
    $sql = "DELETE FROM id WHERE u_id = $id";
    try {
        // Get DB Object
        $db = new db();
        // Connect
        $db = $db->connect();
    
        $stmt = $db->query($sql);
        $user = $stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;

        $data = array(
            "status" => "success"
        );
        echo json_encode($user);

    } catch (PDOException $e) {
        $data = array(
            "status" => "fail"
        );
        echo json_encode($data);
    }
        
   

       
});




$app->run();
