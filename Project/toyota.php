<?php

$st8=$_GET['tmpp8'];


?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css"href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap"rel="stylesheet">
</head>
<body>

	<?php include 'navbar.php'; ?>

            
			 
				<h5> Result for Toyota: </h5>
				
<div class="row mt-5 mb-5"  >
   	 <?php 

	                $con = mysqli_connect("localhost","root","","170204016");
                   $query = "SELECT * FROM allpro WHERE product_name ='".$st8."'";
                   $select_all_product_query = mysqli_query($con,$query);
                 while($row = mysqli_fetch_assoc($select_all_product_query)) {
                     $product_name = $row['product_name'];
					 $product_des = $row['product_description'];
					 $product_direction = $row['product_image'];
					  
					   $product_id = $row['product_ID'];
					    $product_price = $row['product_price'];
						$product_title = $row['product_title'];

					  $_SESSION['ID'] = $row['product_ID'];
					  $t =$row['product_ID'];
        

               
 					   ?>

  

 
<div class="col-md-3">

  

         <div class="card">
		  <a href='allproduct.php?p_id=<?php echo $product_id?> &c_id=<?php echo $cat_id?>'>
            <img class="card-img-top img-fluid" src="<?php echo $product_direction ?>">
			</a>
            <div class="card-title">
               <h5><?php echo $product_title ?></h5>
             <h1> ৳<?php echo $product_price ?></h1>
            </div> 
            <div class="card-text">
			  <?php
                  ?>
                   <a href="productdetails.php?testt=2" class="btn btn-success text-light"> See Details</a><br/><br/>
                  <?php
                ?>

               
            </div>
         </div>
      </div>
 <?php } ?>
 </div>

 <?php include 'footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>