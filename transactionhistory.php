<?php 
include('retrieve.php');
?>
<!DOCTYPE Html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name=viewport content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/style.css">
 
 <!--Part4 start-->

 <h1 class="alert-info text-center mb-5 p-2">Transaction Summary</h1>
 <table class="table table-bordered">

   <thead>
     <tr>
       <th scope="col">ID</th>
       <th scope="col">Sender</th>
       <th scope="col">Receiver</th>
       <th scope="col">Amount Transferred</th>
     </tr>
   </thead>
   <tbody id="tbody" > 
    <?php 

    foreach($data as $item) {?>
    
    <tr>
         <td><?php echo $item['ID'];  ?></td>
         <td><?php echo $item['Sender'];  ?></td>
         <td><?php echo $item['Receiver'];  ?></td>
         <td><?php echo $item['Transferred_Amount'];  ?></td>
    
     </tr>
    
    <?php  }?>
   </tbody>

   </table>

   <div class="col-lg-12 col-md-6 col-12 pt-1 text-center">
    <a href= "homepage.html" class="btn bg-primary">
      Home Page
    </a>

   <!--part4 end-->

   <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/ajaxscript.js"></script>
</body>
</html>