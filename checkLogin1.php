<?php
session_start();
$conn=mysqli_connect("localhost","root","","agrispace");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$username  = $_POST['Username'];
$password  = $_POST['Password'];
														      
$Query = "select *  from loginpage where username='$username' and password='$password' ";

$rs = mysqli_query($conn,$Query);
$c=mysqli_num_rows($rs);
$row = mysqli_fetch_array($rs);

if($c>0)
{

$_SESSION['type'] = $row['type'];

if($_SESSION["type"]=="admin")
{
  header("Location:crop.html");
}
else 
    if($_SESSION["type"]=="user")
       {
	header("Location:http://localhost/our project/our project/croppesticideinfo.php");
       }              
	?>
	<script type="text/javascript"> 
			alert("Login Successfully <?php echo $username;?>")
			</script>
	 <?php                             
	}
else
{
	header("location:login.html?msg=Sorry!...Invalid User");
}
mysqli_close($conn);
?>
