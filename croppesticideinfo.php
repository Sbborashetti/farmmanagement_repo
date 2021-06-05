<html>
<body>
<table border="2" align="center">
<tr>
 <th colspan="4"><h2>Crop/Pesticide Information</g2></th>
</tr>
<tr>
 <th>Crop_name</th>
 <th>Crop_Id</th>
 <th>Pesticide_name</th>
 <th>Pesticide_Id</th>
</tr>

<?php
$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$Query = "select c_name,crop.c_id,p_name,pes_id from crop,pesticide where crop.c_id=pesticide.c_id;";
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