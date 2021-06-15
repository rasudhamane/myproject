<?php 
// print_r($_GET["accholder"]);
// die;
$X=$_GET["accholder"];
//echo $X;
//die;



?>
<!DOCTYPE Html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name=viewport content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/style.css">

<!--part3 start-->


<h1 class="alert-info text-center mb-5 p-2">Transaction here</h1>
<div class="container">
<div class="row">
  <br>
  <form action="insert.php" id="bankform" method="POST" class="card shadow col-md-5 mx-auto p-3"> 
  <div class="col-sm-5" id="myform">
  <fieldset>
    <label for="fromid" class="form-label">From
    <input value="<?php echo $X; ?>" type="text" class="form-control" id="fromid" name="From" />
  </fieldset>

  <fieldset>
      <label for="toid" class="form-label">To

      <!--<input type="text" class="form-control" id="toid"  />-->
      <select type="text" class="form-control" id="toid" name="To">
        <option <?php  echo $X=="Pranali Jha" ? "Disabled" : "" ?> value="Pranali Jha">Pranali Jha</option>
        <option <?php  echo $X=="Anushka Sharma" ? "Disabled" : "" ?> value="Anushka Sharma">Anushka Sharma</option>
        <option <?php  echo $X=="Aditya Gupta" ? "Disabled" : "" ?>  value="Aditya Gupta">Aditya Gupta</option>
        <option <?php  echo $X=="Vaishnvi Mane" ? "Disabled" : "" ?> value="Vaishnvi Mane">Vaishnvi Mane</option>
        <option <?php  echo $X=="Sonakshi Bose" ? "Disabled" : "" ?> value="Sonakshi Bose">Sonakshi Bose</option>
        <option <?php  echo $X=="Dev Dixit" ? "Disabled" : "" ?> value="Dev Dixit">Dev Dixit</option>
        <option <?php  echo $X=="Prerna Sharma" ? "Disabled" : "" ?> value="Prerna Sharma">Prerna Sharma</option>
        <option <?php  echo $X=="Farhad Khan" ? "Disabled" : "" ?> value="Farhad Khan">Farhad Khan</option>
      </select>
      
  </fieldset>


  <fieldset >
    <label for="amountid" class="form-label" >Amount
    <input type="number" class="form-control" id="amountid" name="Transferred_Amount"/>
  </fieldset>
  <div class="mt-5">
    <button type="submit" class="btn btn-primary" id="btnadd">
       Proceed
    </button>

  </div>
</div>
</div>
<div id="msg"></div>
</div>
</form>

<!--part3 end-->

<script src="js/bootstrap.js"></script>
<script src="js/popper.js"></script>
<script src="js/ajaxscript.js"></script>
</body>
</html>