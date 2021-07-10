<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "170204016";

$con = mysqli_connect($server,$user,$password,$db);

if(!$con){
	?>
		<script>
			alert("No Connection");
		</script>
	<?php
}

?>