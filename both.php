<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>


<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Thapar Placements</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php">Homepage</a></li>
	<li><a href="page1.php">Placements</a></li>
			<li><a href="page2.php">Preparation</a></li>
			<li><a href="page3.php">Blogs</a></li>
			
		</ul>
	</div>
	<!-- end #menu -->
</div>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Thapar Placements</a></h1>
			<p> <a href="http://templated.co" rel="nofollow"></a></p>
		</div>
	</div>
</div>
<h3 style="text-align:center"><strong> Btech &nbsp Placements &nbsp 2013-2014</strong></h3>



<?php 
include ('connection.php');
session_start();
	if(isset($_SESSION['flag']))
	{$sal=$_SESSION['salary'];
	$br=$_SESSION['branch'];
	?>
	
	
	 <p style="text-align:center"> <strong>Branch:<?php echo $br;?></strong></p>
	<table class="table table-hover" align="center" cellpadding="5" cellspacing="2" border="1">
<tr>
<td><strong>SR no.</strong></td>
<td><strong>Company name</strong></td>
<td><strong>No. of students placed</strong></td>
<td><strong>CTC offered(in lpa)</strong></td>
</tr>
	<?php
	
if($sal==2)
	$id="select `btech placements`.Bc_id from `btech placements`,`btech salary` where `btech salary`.Bc_id=`btech placements`.Bc_id and `btech placements`.Branch='".$br."' and `btech salary`.Salary<5";
else if ($sal==3)
	$id="select `btech placements`.Bc_id from `btech placements`,`btech salary` where `btech salary`.Bc_id=`btech placements`.Bc_id and `btech placements`.Branch='".$br."' and `btech salary`.Salary between 5 and 8";
else 
	$id="select `btech placements`.Bc_id from `btech placements`,`btech salary` where `btech salary`.Bc_id=`btech placements`.Bc_id and `btech placements`.Branch='".$br."' and `btech salary`.Salary>8";
$r2=mysql_query($id);
$l=1;
while($row=mysql_fetch_array($r2))
{		$cc="select count(Branch) from `btech placements` where Bc_id='".$row['Bc_id']."'";
		$r3=mysql_query($cc);
		$row3=mysql_fetch_array($r3);
		?>
		<tr><td ><?php echo $l;$l++;?></td><td ><?php
		$cname="select C_name from `company details`,`btech placements` where `company details`.C_id='".$row['Bc_id']."'";
		$r1=mysql_query($cname);
		$row1=mysql_fetch_array($r1);
		echo $row1[0];
		$j=0;
		$i=$row3[0];?></td>

		<td><?php
		
		$num="select Number from `btech placements` where Bc_id='".$row['Bc_id']."' and branch='".$br."'";
		$r5=mysql_query($num);
		$row5=mysql_fetch_array($r5);
		echo $row5['Number'];
		$i--;
		?></td>
		<td ><?php
	$sal="select salary from `btech salary` where Bc_id='".$row['Bc_id']."'";
	$r6=mysql_query($sal);
	$row6=mysql_fetch_array($r6);
	echo $row6[0];?>
	</td></tr>
		
	<?php
	}
	 unset($_SESSION['flag']);}
?>
</table>
</body>
</html>
  <?php include("footer-distributed.php")?>