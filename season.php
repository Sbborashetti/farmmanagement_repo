<?php 
$Month_Duration= $_POST["Month_Duration"]; 
$Crop_Id= $_POST["Crop_Id"];



$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$query="insert into season(monthduration,c_id) values('$Month_Duration',' $Crop_Id')";

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
