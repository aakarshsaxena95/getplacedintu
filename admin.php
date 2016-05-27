<?php include('header.php');
include('connection.php');
session_start();
$n=$_SESSION['name'];
$q="select User_name from admin where User_id='".$n."'";
$r=mysql_query($q);
$row=mysql_fetch_array($r);

  ?>
 <body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li ><a href="index.php">Homepage</a></li>
	<li><a href="page1.php">Placements</a></li>
			<li><a href="page2.php">Preparation</a></li>
			<li><a href="page3.php">Blogs</a></li>
			<li class="current_page_item"><a href="#"><?php echo $row[0];?></a></li>
		</ul><li><a href="adminlogin.php">Log Out</a></li>
	</div>
	<!-- end #menu -->
</div>
<form action="#" method="post">
<?php
$m="select * from alumni where Password=0;";
$r=mysql_query($m);
while($row=mysql_fetch_array($r))
{ ?>

<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<input type="checkbox" name="<?php echo $row['U_id']?>" value="Male"><h4 class="title"><a href="#"><?php echo $row['Name'] ;?></a></h4></input>
						<p class="meta"><span class="date">Contact:<?php echo $row['User_id']; ?></span><span class="posted">Passout Year:<?php echo $row['Passout year']; ?></span></p>
						
						<div class="entry">
							<p><?php echo $row['Comments'] ;?> </p>
	
						</div>
					</div>	
					
						
<?php 
}
?>



<br/>
<button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>	
<?php
if(isset($_POST['submit']))
{
	$q1="select count(U_id) from alumni where Password=0;";
	$r1=mysql_query($q1);
	$row1=mysql_fetch_array($r1);
	$i=$row1[0];
	$q2="select U_id from alumni where Password=0;";
	$r2=mysql_query($q2);
	while($i>0)
	{	$row2=mysql_fetch_array($r2);
		if(isset($_POST[$row2['U_id']]))
		{
			$q3="UPDATE alumni SET Password=1 WHERE U_id=".$row2['U_id']."";
			$r3=mysql_query($q3);
		}
		else
		{	$q3="UPDATE alumni SET Password=2 WHERE U_id=".$row2['U_id']."";
			$r3=mysql_query($q3);			
		}		
	$i--;}
	header("location:afterposts.php");
}
?>

  





















