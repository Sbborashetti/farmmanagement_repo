<html>
<body>
<?php 
$Crop_Id = $_POST["Crop_Id"]; 
$Crop_Name = $_POST["Crop_Name"];
$Price = $_POST["Price"]; 
$Description= $_POST["Description"];


$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$query="insert into crop(c_id,c_name,price,description) values('$Crop_Id',' $Crop_Name','$Price','$Description')";

$res=mysqli_query($conn,$query);
if(!$res)
{
  print "Error in inserting values";
}
else
{
 print "inserted successfully";
include("pesticide.html");
}

mysqli_close($conn);
?>
