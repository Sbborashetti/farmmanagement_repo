<html>
<head>
</head>
<body>
<?php
session_start();

$Person_Id = $_POST["Person_Id"]; 
$First_Name= $_POST["First_Name"];
$Middle_Name = $_POST["Middle_Name"]; 
$Last_Name= $_POST["Last_Name"];
$Gender= $_POST["Gender"];
$Address= $_POST["Address"];
$Username= $_POST["Username"];
$Password= $_POST["Password"];
$Confirm_Password= $_POST["Confirm_Password"];


$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

if($Password == $Confirm_Password)
{

$query="insert into loginpage(username,password) values('$Username','$Password')";
$res=mysqli_query($conn,$query);
if(!$res)
{
  print "Error in inserting values";
}
else
{
 print "inserted successfully";
}

$query1="insert into person(p_id,f_name,m_name,l_name,gender,address) values('$Person_Id',' $First_Name','$Middle_Name','$Last_Name','$Gender','$Address')";
$res1=mysqli_query($conn,$query1);
if(!$res1)
{
  print "Error in inserting values";
}
else
{
 print "inserted successfully";
}
}

else
{
 print"Invalid Password";
}

mysqli_close($conn);
  
?>
</body>
</html>
		