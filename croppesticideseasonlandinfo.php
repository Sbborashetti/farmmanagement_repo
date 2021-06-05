<html>
<body>
<table border="2" align="center">
<tr>
 <th colspan="4"><h2>Crop/Pesticide/Season/Land Information</g2></th>
</tr>
<tr>
 <th>Crop_name</th>
 <th>Crop_Id</th>
 <th>Pesticide_name</th>
 <th>Pesticide_Id</th>
 <th>Month_Duration</th>
 <th>Soil</th>
 <th>Location</th>
</tr>

<?php
$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$Query = "select c_name,crop.c_id,p_name,pes_id,monthduration,soil,location from crop,pesticide,season,land
          where crop.c_id=pesticide.c_id and crop.c_id=season.c_id and  crop.c_id=land.c_id;";
$result = mysqli_query($conn, $Query);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
   echo "<td>" .$row["c_name"]. "</td>";
   echo "<td>" .$row["c_id"]. "</td>";
   echo "<td>" .$row["p_name"]. "</td>";
   echo "<td>" .$row["pes_id"]. "</td>";
   echo "<td>" .$row["monthduration"]. "</td>";
   echo "<td>" .$row["soil"]. "</td>";
   echo "<td>" .$row["location"]. "</td>";
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