<?php 
$Pesticide_Name= $_POST["Pesticide_Name"]; 
$Pesticide_Id= $_POST["Pesticide_Id"];
$Price = $_POST["Price"]; 
$Crop_Id= $_POST["Crop_Id"];


$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$query="insert into pesticide(p_name,pes_id,p_price,c_id) values('$Pesticide_Name','$Pesticide_Id','$Price','$Crop_Id')";

$res=mysqli_query($conn,$query);
if(!$res)
{
  print "Error in inserting values";
}
else
{
 print "inserted successfully";
include("fertilizer.html");
}

mysqli_close($conn);
?>
