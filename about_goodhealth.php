<?php include('func.php') ?>
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
 <div class="jumbotron" id="ab1"></div>
  <div class="container-fluid" style="margin-top:10px;">
   <div class='card'>
      <div class="card-body"style="background-color:#3498DB;color: #ffffff;">
        <div class="row">
          <div class="col-md-1">

            <a href="index.php"class="btn btn-light">Go Back</a>
           </div> 
            <div class="col-md-4">
              <h3>Hospital information</h3>
            </div>
            
        </div>

      </div>
       <div class="card-body" style="background-color:#3498DB;color: #ffffff;">
        <ul>
        <li> <b> Name </b>  :  Good Health Hospital</li><br>
        <li> <b> Location </b> : Nakuru town </li><br>
        <li> <b> Departments </b> <br>:  
     <select>  
       
       <option value="">departments</option>  
       <option value="">General Surgery</option>  
       <option value="">Haematology</option>  
       <option value="">ICU</option>  
     </select> </li>
     <li>  <b> Services </b>: <br> 
     <select>  
       
       <option value="">Services</option>  
       <option value="">xray</option>  
       <option value="">maternity</option>  
       <option value="">consultation</option>  
     </select> </li>
      <li><b> Working hours </b>  :  8am-7pm</li> <br>

      <li><b> Consultation fee </b> : ksh 3000 across all departments </li> <br>

     </ul>  

      


              </div>
    </div>