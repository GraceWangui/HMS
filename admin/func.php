<?php

$db = mysqli_connect('localhost', 'root', '', 'hospital mgt sys');

if(isset($_POST['patient-submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$date=$_POST['date'];
	$docapp=$_POST['docapp'];
	$query="insert into appointment(fname,lname,email,contact,date,docapp)values('$fname','$lname','$email','$contact','$date','$docapp')";

	$result=mysqli_query($db,$query);
	if($result)
	{ 
          echo "<script>alert('Appointment booked.')</script>";
           echo "<script>window.open('index.php','_self')</script>";

	}




}
if(isset($_POST['profile-submit']))
{
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$speciality=$_POST['speciality'];
	$hours=$_POST['hours'];
    $date=$_POST['date'];
	
	$query="insert into profile(fullname,email,contact,speciality,hours,date)values('$fullname','$email','$contact','$speciality','$hours','$date')";

	$result=mysqli_query($db,$query);
	if($result)
	{ 
          echo "<script>alert('Profile updated.')</script>";
           echo "<script>window.open('home.php','_self')</script>";

	}




}
if(isset($_POST['patient-submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$date=$_POST['date'];
	$docapp=$_POST['docapp'];
	$query="insert into appointment(fname,lname,email,contact,date,docapp)values('$fname','$lname','$email','$contact','$date','$docapp')";

	$result=mysqli_query($db,$query);
	if($result)
	{ 
          echo "<script>alert('Appointment booked.')</script>";
           echo "<script>window.open('index.php','_self')</script>";

	}




}
function get_patient_appointments(){
	global $db;
	$query="select * from appointment";
	$result=mysqli_query($db,$query);
	while($row=mysqli_fetch_array($result)){
	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$date=$row['date'];
	$docapp=$row ['docapp'];
	echo " <tr>
           
             <td>$fname</td>
             <td>$lname</td>
             <td>$email</td>
             <td>$contact</td>
             <td>$date</td>
             <td>$docapp</td>
           </tr>
          ";


	}
}

function get_doctors_information(){
	global $db;
	$query="select * from profile";
	$result=mysqli_query($db,$query);
	while($row=mysqli_fetch_array($result)){
	$fullname=$row['fullname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$speciality=$row['speciality'];
	$hours=$row['hours'];
    $date=$row['date'];
	
	echo " <tr>
           
             <td>$fullname</td>
             <td>$email</td>
             <td>$contact</td>
             <td>$speciality</td>
             <td>$hours</td>
             <td>$date</td>
             
           </tr>
          ";


	}
}
























?>