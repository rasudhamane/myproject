<?php 
include('dbconnection.php');
 // retrive transaction

 $sql= "SELECT*from accountholder";
 $result=$conn->query($sql);
 if($result->num_rows > 0){
     $data=array();
     while($row=$result->fetch_assoc()){
         $data[]=$row;
     }
    }
    

// echo "<pre>";
// print_r($data);
// die;
//   echo json_encode($data)


?>