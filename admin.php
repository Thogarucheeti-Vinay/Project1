<!Doctype html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/slate/bootstrap.min.css">
	</head>
	<body>
		<header class="header">
		<nav class="navbar navbar-style">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href=""><img style="width:10%;height:5%" class="logo" src="https://i.pinimg.com/originals/33/b8/69/33b869f90619e81763dbf1fccc896d8d.jpg"</a>
					<a style="" class="navbar-brand" href="contact.php">THOGARUCHEETI VINAY</a>
					<a class="navbar-brand" href="index.php">Home</a>
					<a class="navbar-brand" href="admin.php">Admin panel</a>
					<a class="navbar-brand" href="#">contact</a>
				</div>
				</div>
		</nav>
		<div class="container-fluid">
		<form action="insert.php" method="POST">
			<div class="form-group">
			<label for="name">Name:</label>
			<input id="name" class="form-control"  type="text" name="Name">
			</div>
			<div class="form-group">
			<label for="price">Price:</label>
			<input id="price" class="form-control" type="text" name="Price">
			</div>
			<div class="form-group">
			<label for="description">Description:</label>
			<input id="description" class="form-control"  type="text" name="Description">
			</div>
			<div class="form-group">
			<button class="btn btn-success" type="submit">Add Product</button>
			</div>
		</form>
		</div>
		
	</body>
</html>