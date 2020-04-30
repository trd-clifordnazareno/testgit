<html><head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="./includes/style.css">
 	<script type="text/javascript" rel="stylesheet" src="./js/main.js"></script>
 </head>
<body>
<div class="overlay"><div class="loader"></div></div>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Inventory System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="login.php"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
      </li>
      
                
    </ul>
  </div>
</nav>	<br><br>
	<div class="container">
				<div class="card mx-auto" style="width: 20rem;">
		  <img class="card-img-top mx-auto" style="width:60%;" src="./image/rich.png" alt="Login Icon">
		  <div class="card-body">
		    <form action="" method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" name="log_email" id="username" placeholder="Enter email">
			    <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" class="form-control" name="log_password" id="password" placeholder="Password">
			  	<small id="p_error" class="form-text text-muted"></small>
			  </div>
			  <button type="submit" class="btn btn-primary" onclick="login()"><i class="fa fa-lock">&nbsp;</i>Login</button>
			<!--  <span><a href="Registration.php">Register</a></span>-->
			</form>
		    
		  </div>
		<!--  <div class="card-footer"><a href="#">Forget Password ?</a></div>-->
		</div>
	</div>


	<?php


 



   //require("database/constant.php");
  // required("database/db.php");

   
   //if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      
  //$sql = "SELECT id FROM user WHERE Username = '$myusername' and Password = '$mypassword'";
     // $result = mysqli_query($db,$sql); 
    //  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
     // $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
     // if($count == 1) {
     //    session_register("myusername");
      //   $_SESSION['login_user'] = $myusername;
         
      //   header("location: dashboard.php");
     // }else {
      //   $error = "Your Login Name or Password is invalid";
    //  }
 //  }
?>

</body></html>
<script>
login = function(){
	var uname = document.getElementById("username").value;
	var pword = document.getElementById("password").value;
	if(uname == "admin" && pword == "admin"){
		window.location.href = "http://richmedia.com.ph/updatedinv03272020/dashboard.php";
	}else{
		alert("you enter a wrong username or password")
	}
}
</script>
