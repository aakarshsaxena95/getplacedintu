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
<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
				No other posts.
										</div>
					</div>	
					</div>
					</div>