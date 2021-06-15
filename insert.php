<?php    

//to insert in php through json

include('dbconnection.php');
// $data= stripslashes(file_get_contents("php://input"));
// $mydata=json_decode($data,true);
// $Sender=$mydata['from'];
// $Receiver=$mydata['to'];
// $Transferred_Amount=$mydata['amount'];
  


// to insert in databse
//print_r($_POST); die;
$From=$_POST['From'];
$To=$_POST['To'];
$Amount=$_POST['Transferred_Amount'];

   if(!empty($From) && !empty($To) && !empty($Amount)){
       $sql= "INSERT INTO accountholder(Sender,Receiver,Transferred_Amount) VALUES 
       ('$From','$To','$Amount' )";
       if($conn->query($sql)==TRUE){
        echo '<script>alert(" Transaction Saved Successfully");
        window.location.href = "homepage.html";
        </script>';
           
       }else{
         echo '<script>alert("Unable to Save Transaction");
        window.location.href = "homepage.html";
        </script>';
         
       }
   }else{
    echo '<script>alert("FILL ALL FIELDS");
    window.location.href = "homepage.html";
    </script>';
      
   }
?>