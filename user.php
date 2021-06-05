<html>
<body>
<table border="2" align="center">
<tr>
 <th colspan="4"><h2>Season Information</g2></th>
</tr>
<tr>
 <th>c_id</th>
 <th>MonthDuration</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$Query = "select c_id,monthduration from pesticide";
$result = mysqli_query($conn, $Query);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
   echo "<td>" .$row["c_id"]. "</td>";
   echo "<td>" .$row["monthduration"]. "</td>";
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