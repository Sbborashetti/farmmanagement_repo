<html>
<body>
<table border="2" align="center">
<tr>
 <th colspan="4"><h2>Fertilizers Information</g2></th>
</tr>
<tr>
 <th>Fertilizer id</th>
 <th>Fertilizer name</th>
 <th>Price</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$Query = "select f_id,f_name,f_price from fertilizers";
$result = mysqli_query($conn, $Query);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
   echo "<td>" .$row["f_id"]. "</td>";
   echo "<td>" .$row["f_name"]. "</td>";
   echo "<td>" .$row["f_price"]. "</td>";
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