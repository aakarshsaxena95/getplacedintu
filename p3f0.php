<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<meta name="keywords" content="" />
<meta name="description" content="" />
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
			<li class="current_page_item"><a href="index1.html">Homepage</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Links</a></li>
			<li><a href="#">Contact</a></li>
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
<?php 
include ('connection.php');
$id="select distinct(Bc_id) from `btech placements`";
$r2=mysql_query($id);

while($row=mysql_fetch_array($r2))
{		echo $row['Bc_id'];
		echo "&nbsp &nbsp &nbsp";
		$cname="select C_name from `company details`,`btech placements` where `company details`.C_id='".$row['Bc_id']."'";
		$r1=mysql_query($cname);
		$row1=mysql_fetch_array($r1);
		echo $row1[0];
		echo "&nbsp &nbsp &nbsp";
	$cc="select count(Branch) from `btech placements` where Bc_id='".$row['Bc_id']."'";
	$r3=mysql_query($cc);
	$row3=mysql_fetch_array($r3);
	$j=0;
		$bname="select Branch from `btech placements` where Bc_id='".$row['Bc_id']."'";
		$r4=mysql_query($bname);
	while($row3[0]>0)
	{    
	
		$row4=mysql_fetch_array($r4);
		echo $row4[$j];echo "&nbsp &nbsp &nbsp";
		
		$num="select Number from `btech placements` where Bc_id='".$row['Bc_id']."' and branch='".$row4['Branch']."'";
		$r5=mysql_query($num);
		$row5=mysql_fetch_array($r5);
		echo $row5[0];echo "&nbsp &nbsp &nbsp";
		echo "<br/>";
		$row3[0]--;
	}
	$sal="select salary from `btech salary` where Bc_id='".$row['Bc_id']."'";
	$r6=mysql_query($sal);
	$row6=mysql_fetch_array($r6);
	echo $row6[0];echo "&nbsp &nbsp &nbsp";
	echo "<br/><br/><br/><br/><br/><br/>";
	
}

?>
<table class="table table-hover" align="center" cellpadding="5" cellspacing="2" border="1">
<tr>
<td>Company name</td>
<td>branch</td>
<td>No. of students placed</td>
<td>CTC offered</td>
</tr>


</table>

</body>
</html>