<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div cass="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    	data-target="#navbarResponsive">
    		<span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    	<ul class="navbar-nav ml-auto">
    		<li class="nav-item active">
    			<a class="nav-link" href="index.html">Home</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="about.html">About</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="MyCollection.html">My Collection</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="NewCollection.html">Create New Collection</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="Message.html" class="selected">Buy/Sell</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="Login.html">Login</a>
    		</li>
    	</ul>
    </div>
    </div>
    </nav>



<!--- Welcome Section -->
<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
		<h1 class="display-4">Create Your Collection Below:</h1>
	</div>
	<hr clas="dark">
	<div class="col-12">
		<p class="lead"></p>
	</div>
</div>
</div>

<!--<form>-->
    <?php include("http://localhost/db-newcollection.php");?>
    <form id="form1" action="http://localhost/db-newcollection.php" method="POST">
	Item Name:<br>
	<input type="text" name="Item_Name" required><br>
	Date Added:<br>
	<input type="text" name="Date_Added" required><br>
	For Sale (yes/no/maybe):<br>
	<input type="text" name="For_Sale" required><br>
	Description:<br>
	<input type="text" name="Description" required><br>
	<br>
    <input type="submit" value="Submit" name='submit'>
</form> 
</body>
</html>









 