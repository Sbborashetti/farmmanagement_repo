<?php 
$Person_Id = $_POST["Person_Id"]; 
$First_Name= $_POST["First_Name"];
$Middle_Name = $_POST["Middle_Name"]; 
$Last_Name= $_POST["Last_Name"];
$Gender= $_POST["Gender"];
$Address= $_POST["Address"];
$Username= $_POST["Username"];
$Password= $_POST["Password"];
$Confirm_Password= $_POST["Confirm_Password"];
$Type= $_POST["Type"];

$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$query="insert into person(p_id,f_name,m_name,l_name,gender,address,username,password,type) values('$Person_Id',' $First_Name','$Middle_Name','$Last_Name','$Gender','$Address','$Username','$Password','$Type')";

$res=mysqli_query($conn,$query);
if(!$res)
{
  print "Error in inserting values";
}
else
{
 print "inserted successfully";
}

mysqli_close($conn);
?>
