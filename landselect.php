<html>
<body>
<table border="2" align="center">
<tr>
 <th colspan="4"><h2>Land Information</g2></th>
</tr>
<tr>
 <th>Soil</th>
 <th>Location</th>
 <th>soil_color</th>
 <th>Crops_To_Grow</th>
 <th>Crop_Id</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$Query = "select soil,location,soil_color,crops_to_grow,c_id from pesticide";
$result = mysqli_query($conn, $Query);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
   echo "<td>" .$row["soil"]. "</td>";
   echo "<td>" .$row["location"]. "</td>";
   echo "<td>" .$row["soil_color"]. "</td>";
   echo "<td>" .$row["crops_to_grow"]. "</td>";
   echo "<td>" .$row["c_id"]. "</td>";
echo "</tr>";
}
echo ("</table>");
}
else
{
  echo "0 results";
}
mysqli_close($conn);
?>
</body>
</html>