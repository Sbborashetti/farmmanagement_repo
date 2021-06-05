<?php 
$Soil = $_POST["Soil"]; 
$Location = $_POST["Location"];
$Soil_color= $_POST["Soil_color"]; 
$Crop_Id= $_POST["Crop_Id"];
$Crops_To_Grow= $_POST["Crops_To_Grow"];

$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$query="insert into land(soil,location,soil_color,crops_to_Grow,c_id) values('$Soil',' $Location','$Soil_color','$Crops_To_Grow','$Crop_Id')";

$res=mysqli_query($conn,$query);
if(!$res)
{
  print "Error in inserting values";
}
else
{
 print "inserted successfully";
include("season.html");
}

mysqli_close($conn);
?>
