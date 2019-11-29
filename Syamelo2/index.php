<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
  
<div class="container">
 

<div class="header">
	<h2>Home Page</h2>
</div>

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

   <center>
    <?php  if (isset($_SESSION['username'])) : ?>
    	
</center>
    <?php endif ?>
    

		
    <div class="container">
    <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="add.css">
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">


<nav class="navbar navbar-inverse">
	<ul class="nav navbar-nav">
		<li><a href="add.html">User</a></li>
		 <li><a href="add2.php">Admin</a></li>
		   <li><a href="index3.php"> View User</a></li>
		 <li><a href="index2.php"> View Status</a></li>
	
	  </ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
		  </ul>
	  </nav>
	  
	  </nav>
	<br/><br/>
	<style> 
		input[type=text] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 3px solid #ccc;
		  -webkit-transition: 0.5s;
		  transition: 0.5s;
		  outline: none;
		}
		
		input[type=text]:focus {
		  border: 3px solid #555;
		  
		}
		.navbar-inverse {
    background-color: #10161f;
    border-color: #fffb00;
    color: black;
}
	.navbar-inverse .navbar-nav>li>a {
    color: #fffdfd;
    font-size: 20px;
}

		
		</style>
		<body>
<center>
	<form action="add.php" method="post" name="form1" required>
		<table>
			<tr> 
				<td>User ID</td>
				<td><input type="text" name="studentid"></td>
			</tr>
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="fname"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lname" ></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td><input type="text" name="gender"></td>
			</tr>
			<tr> 
				<td>Birth Date</td>
				<td><input type="text" name="birthdate"></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="address" ></td>
			</tr>
			<tr> 
				<td>Contact</td>
				<td><input type="text" name="contact" ></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add" class="btn btn-danger"></td>
			</tr>
		</table>
	</form>
</center>
</body>
</html>


    </div>
</body>
</html>
<?php 
   

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
