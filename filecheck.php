$c=mysqli_num_rows($rs);

$row = mysqli_fetch_array($rs);

if($c>0)
{

$_SESSION['type'] = $row['type'];

if($_SESSION["type"]=="admin")
	
	{
	
	header("Location:crop.html");
	}
         else if($_SESSION["type"]=="user")
         
	{
	header("Location:pesticide.html");
	}              
	?>
	
	<script type="text/javascript"> 
			alert("Login Successfully <?php echo $username;?>");
		
			</script>
	 <?php                             
	
	
    
	
	
	
	
}
else
{
	header("location:login.html?msg=Sorry!...Invalid User");
}