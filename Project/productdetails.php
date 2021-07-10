<?php
 

session_start();
$st=$_GET['p_id'];
//echo $st;
  if(!isset($_SESSION['ID'])){
	header ('location:allproduct.php');
  }
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

<div class="row mt-5 mb-5"  >
   	 <?php 
                    
			
	                $con2 = mysqli_connect("localhost","root","","170204016");
                   $query2 = "SELECT * FROM allpro WHERE product_ID ='".$st."'";
				  //$query2 = "SELECT * FROM allpro WHERE ID = $_SESSION['ID']";


                   $select_all_product_query2 = mysqli_query($con2,$query2);
                 while($row = mysqli_fetch_assoc($select_all_product_query2)) {
                     
					 $des2 = $row['product_description'];
					 $direction2 = $row['product_image'];
					  
					   
					    $price2 = $row['product_price'];
						$title2 = $row['product_title'];

					

               
 					   ?>

  

 
<div class="col-md-3">

         <div class="card">
		  <a href='productdetails.php?p_id=<?php echo $product_id?> &c_id=<?php echo $cat_id?>'>
            <img class="card-img-top img-fluid" src="<?php echo $direction2 ?>">
			</a>
            <div class="card-title">
               <h1><?php echo $title2 ?></h1>
             <h3> ৳<?php echo $price2 ?></h3>
			  <h5> <?php echo $des2 ?></h5>
            </div> 
            <div class="card-text">
			  <?php
                  ?>
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">See Our Dealers</button><br/><br/>
                  <?php
                ?>

               
            </div>
         </div>
      </div>
 <?php } ?>
 </div>

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Our Dealers</h2>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <H3>Car City</H3>
        <H5>Ka-96, Kuril, Kazibari, Bisshwaroad, Pragati Sarani, Dhaka 1229</H5>
        <H6>Phone: 01716-398637</H6>
        <hr>
        <H3>Nippon Auto Trading</H3>
        <H5>67/1 (1st Floor) Kakrail,Dhaka-1000, Bangladesh. VIP Rd, Dhaka 1205</H5>
        <H6>Phone: 01711-522991</H6>
        <hr>
        <H3>Car House Ltd</H3>
        <H5>Opposite SA Showroom, 105 Kakrail Rd, Dhaka 1000</H5>
        <H6>Phone: 01799-779966</H6>
        <hr>
        <H3>Continental Motors</H3>
        <H5>191/1, Rahman’s Regnum Centre, Ground Floor, Bir Uttam Mir Shawkat Road Tejgaon C/A, Dhaka 1208</H5>
        <H6>Phone: 01886-000600</H6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 <?php include 'footer.php'; ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>