<!Doctype html>
<html>
	<head>
		<title>Home</title>
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/slate/bootstrap.min.css">
	</head>
	<body>
		<header class="header">
		<nav class="navbar navbar-style">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href=""><img style="width:10%;height:5%" class="logo" src="https://i.pinimg.com/originals/33/b8/69/33b869f90619e81763dbf1fccc896d8d.jpg"</a>
					<a class="navbar-brand" href="contact.php">THOGARUCHEETI VINAY</a>
					<a class="navbar-brand" href="index.php">Home</a>
					<a class="navbar-brand" href="admin.php">Admin panel</a>
					<a class="navbar-brand" href="#">contact</a>
				</div>
				</div>
		</nav>
		<div class="container-fluid">
			<div class="jumbotron">
				<h1>Products On Sale!</h1>
			</div>
			<?php 
				$servername="localhost";
				$username="root";
				$password="";
				$dbname="products";
				$conn=new mysqli($servername,$username,$password,$dbname);
				
				$sql="SELECT Name,Price,Description FROM cart";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
					while($row= $result->fetch_assoc())
					{
					echo 
					"<div class='vinay' style='display:inline-block'>
							<div  style='display:inline-block'class='thumbnail'><img src='http://placehold.it/400x300' alt=''>
						`		<div style='display:inline' class='caption'>
									<h3>".$row['Name']."</h3>
									<p >".$row['Price']."</p>
									<p>".$row['Description']."</p>
									<p>
										<a href='#' class='btn btn-success'>Buy Now!</a>
										<a href='#' class='btn btn-info'>More info</a>
									</p>
							
							</div>
						</div>
					</div>";
					}
				}
				else{
					echo "<p>No Products to Show!</p>";
				}
				$conn->close();
			?>
		</div>
	</body>
</html>