 <!DOCTYPE html>
 <?php include ('func.php');?>
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
      <input class="form-control mr-sm-2"  type="text" placeholder="enter contact " aria-label="Search" name="contact">
      <input type="submit" class="btn btn-primary" id="inputbtn" name="patient_search_submit" value="Search">
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
	  	 	<a href=""class="list-group-item active"style="background color:#3498DB;color:#ffffff;">Patients</a>
	  	 </div>
	  	 
         <div class="list-group">
	  	 	<a href="doctors_information.php"class="list-group-item ">Doctors Information</a>
	  	 </div>
	  	 <div class="list-group">
	  	 	<a href="about_goodhealth.php"class="list-group-item ">About GoodHealth Hospital</a>
	  	 </div>
   </div> 
   <div class="col-md-8">
   	  <div class="card" >
	   	  <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
	   	  	Book an Appointment

	   	  	</div>
  	   	  	  <div class="card-body" >
    	   	  		<form class="form-group"action="func.php"method="post">

    	   	  			<label>First Name :</label>
    	   	  			<input type="text" name="fname"class="form-control"><br>

    	   	  			<label>Last Name :</label>
    	   	  			<input type="text" name="lname"class="form-control"><br>

    	   	  			<label>Email Id :</label>
    	   	  			<input type="text" name="email"class="form-control"><br>

    	   	  			<label>Contact :</label>
    	   	  			<input type="text" name="contact"class="form-control"><br>

                  <label>Date :</label>
                  <input type="date" name="date"class="form-control"><br>

    	   	  	    <label>Doctor Appointment :</label>
                 
                    <select  class="form-control" name="docapp">
                      
                     <!-- <option value="Dr Ann Wangui">Dr Ann Wangui</option>
                      <option value="Dr Daniel Mark">Dr Daniel Mark</option>--> 
                        <?php display_docs();?>
                    </select>
                 
                 
    	   	  			<input type="submit" class="btn btn-primary" name="patient-submit"value= "Book Appointment">
                </form>

              </div>

   	    </div>
   </div> 
   <div class="col-md-1"></div>
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