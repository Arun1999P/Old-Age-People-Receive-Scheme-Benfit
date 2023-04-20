<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biodata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['btnsubmit'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $fathername= $_POST['faname'];
    $dob = $_POST['dob'];
    $sex = $_POST['txtgen'];
    $address = $_POST['txtadd'];
    $aadhar=$_POST['txtnum'];

    $query ="INSERT INTO tabdata(fname,lname,faname,DOB,sex,address,Aadhar) VALUES('$firstname','$lastname','$fathername','$dob','$sex','$address',,'$aadhar')";
    mysqli_query($conn, $query);
if (mysqli_affected_rows($conn) > 0)
{
$info = "Bio-data updated successfully!";
}
else
{
$err_info = "Cannot update bio-data !";
}

    // Close connection
    mysqli_close($conn);
}
;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BIO-DATA</title>
<style>
body
{
width:100%;
}
ul
{
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;
background-color:#333;
width:100%;
border-radius:5px;
}
li
{
float: left;
}
li a
{
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}
li a:hover
{
background-color: blue;
border-radius:5px;
}
</style>
</head>
<body>
<center>
<form class="form-horizontal" role="form" method="post" style="margin-top:20px;
border:5px solid; border-radius:50px; margin-left:150px; margin-right:150px; box-shadow:1px 5px
20px">
<center><h2>BIO-DATA</h2></center>
<div class="form-group">
<label> &nbsp <b>First Name</b> &nbsp &nbsp </label>
&nbsp &nbsp <input type="text" name="fname" class="form-control" placeholder=" Enter First
Name" style="border-radius:5px; width:500px; height:30px"><br><br>
</div>
<div class="form-group">
<label>&nbsp <b>Last Name</b> &nbsp &nbsp </label>
&nbsp &nbsp <input type="text" name="lname" class="form-control" placeholder=" Enter Last
Name" style="border-radius:5px; width:500px; height:30px"><br><br>
</div>
<div class="form-group">
<label>&nbsp <b>Father's Name</b> &nbsp </label>
<input type="text" name="faname" class="form-control"placeholder=" Enter Father's Name"
style="border-radius:5px; width:500px; height:30px"><br><br>
</div>
<div class="form-group">
<label>&nbsp <b> Date of Birth &nbsp <b></label>
&nbsp <input type="Date" name="dob" class="form-control"placeholder=" Enter Last Name" style="border-radius:5px; width:500px; height:30px"><br><br>
</div>
<div class="form-group">
<label></b>&nbsp &nbsp &nbsp Sex &nbsp &nbsp &nbsp &nbsp </b> </label>
&nbsp &nbsp &nbsp <input type="text" name="txtgen" class="form-control" placeholder=" Gender" style="border-radius:5px; width:500px; height:30px"><br><br>
</div>
<div class="form-group">
<label><b> &nbsp Address &nbsp </b></label>
&nbsp &nbsp &nbsp &nbsp <textarea class="form-control" name="txtadd" rows="3" placeholder=" Enter the address" style="border-radius:5px; width:500px; height:50px"></textarea><br><br>
</div>
<div class="form-group">
<label>&nbsp <b> Aadhaar </b>&nbsp &nbsp </label>
&nbsp &nbsp <input type="text" name="txtnum" class="form-control" placeholder=" Enter the aadhaar number" style="border-radius:5px; width:500px; height:30px"><br><br>
</div>
<div class="form-group">
<button type="submit" name="btnsubmit" style="width:150px; height:35px; Border-radius:5px; color:#fff; background-color:#00f">Submit</button><br><br>
<a href="index.php">Back</a>
</div>
</center>
<?php
if (isset($err_info))
{
echo $err_info;
}
if(isset($info))
{
echo '<div class="alert alert-info alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Success! Well done its submitted.'.$info .'</div>';
}
?>
</form>
</body>
</html>