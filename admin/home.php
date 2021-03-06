 <?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> GoodHealth Hospital</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link"  href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="width:40%;" method="post" action="search.php">
      <input class="form-control mr-sm-2"  type="text" placeholder="enter contact number" aria-label="Search" name="contact">
      <input type="submit" class="btn btn-primary" id="inputbtn" name="search_submit" value="Search">
    </form>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
 <div class="jumbotron" style="background:url('images/cardback.jpg') no-repeat;background-size: cover;height: 300px;"></div>
   <div class="container-fluid" style="margin-top:10px;">
<div class="row">
  <div class="col-md-3">
	  	 <div class="list-group">
	  	 	<a href=""class="list-group-item active"style="background color:#3498DB;color:#ffffff;">Doc Update profile</a>
	  	 </div>
	  	 
         <div class="list-group">
	  	 	<a href="appointments.php"class="list-group-item ">Appointments</a>
	  	 </div>
	  	 <div class="list-group">
	  	 	<a href="about_goodhealth.php"class="list-group-item ">Hospital information</a>
	  	 </div>
   </div> 
   <div class="col-md-8">
   	  <div class="card">
	   	  <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
	   	  Profile Update

	   	  	</div>
  	   	  	  <div class="card-body">
    	   	  		<form class="form-group"action="func.php"method="post">
    	   	  			<label>Full Name :</label>
    	   	  			<input type="text" name="fullname"class="form-control"><br>
    	   	  			<label>Email Id :</label>
    	   	  			<input type="text" name="email"class="form-control"><br>
    	   	  			<label>Contact :</label>
    	   	  			<input type="text" name="contact"class="form-control"><br>
                  <label>Speciality :</label>
                  <input type="text" name="speciality"class="form-control"><br>
                   <label>Working hours :</label>
                  <input type="text" name="hours"class="form-control"><br>
                  <label>Date Updated:</label>
                  <input type="date" name="date"class="form-control"><br>
    	   	  			
    	   	  			<input type="submit" class="btn btn-primary" name="profile-submit"value= "Update Profile">
                </form>

              </div>

   	    </div>
   </div>
   <div class="col-md-1"></div>
</div>  
   </div>  
   <div class="profile_info">
			<img src="../images/.jpg"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!--Sweet alert js-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>