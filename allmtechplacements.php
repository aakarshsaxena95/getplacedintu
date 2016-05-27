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
			<li><a href="index.php">Homepage</a></li>
		<li class="current_page_item"><a href="page1.php">Placements</a></li>
			<li><a href="page2.php">Preparation</a></li>
			<li ><a href="page3.php">Blogs</a></li>
			
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
<h3 style="text-align:center"><strong> Mtech &nbsp Placements &nbsp 2013-2014</strong></h3>
<form method="post" >
Branch:<select type="text" name="branch" class="main" />
			  <option value="1"></option>
	          <option value="STR">STR</option>
	          <option value="INR">INR</option>
	          <option value="ENV">ENV</option>
	          <option value="CH">CH</option>
	          <option value="CS">CS</option>
	          <option value="CSA">CSA</option>
	          <option value="SW">SW</option>
	          <option value="IS">IS</option>
	          <option value="POW">POW</option>
	          <option value="EC">EC</option>
	          <option value="VLSI">VLSI</option>
	          <option value="WR">WR</option>
	          <option value="EIC">EIC</option>
                  <option value="CAD">CAD</option>
                  <option value="PRD">PRD</option>
	          <option value="THE">THE</option>
                  </select>
			  &nbsp &nbsp
CTC offered:<select type="text" name="salary" class="main" />
	          <option value="1"></option>
	          <option value="2">less than 5 lpa</option>
	          <option value="3">5-8 lpa</option>
	          <option value="4">greater than 8 lpa</option>
	          </select>
          <input type="submit" name="submit" value="Apply" class="button">
</form>
<table class="table table-hover" align="center" cellpadding="5" cellspacing="2" border="1">
<tr>
<td><strong>SR no.</strong></td>
<td><strong>Company name</strong></td>
<td><strong>Branch</strong></td>
<td><strong>No. of students placed</strong></td>
<td><strong>CTC offered(in lpa)</strong></td>
</tr>

<?php
include ('connection.php');
if(isset($_POST['submit']))
{session_start();

  $br= mysql_real_escape_string($_POST['branch']);
$sal= mysql_real_escape_string($_POST['salary']);
$_SESSION['branch']=$br;
$_SESSION['salary']=$sal;
$_SESSION['flag']=1;
if($br==1 && $sal==1)
	header("location:allmtechplacements.php");
else if($br!=1 && $sal==1)
	header("location:monlybranch.php");
else if($br==1 && $sal!=1)
	header("location:monlysalary.php");
else
	header("location:mboth.php");
}

$id="select distinct(Mc_id) from `mtech placements`";
$r2=mysql_query($id);
$l=1;
while($row=mysql_fetch_array($r2))
{		$cc="select count(Branch) from `mtech placements` where Mc_id='".$row['Mc_id']."'";
		$r3=mysql_query($cc);
		$row3=mysql_fetch_array($r3);
		?>
		<tr><td rowspan="<?php echo $row3[0];?>"><?php echo $l;$l++;?></td><td rowspan="<?php echo $row3[0];?>"><?php
		$cname="select C_name from `company details`,`mtech placements` where `company details`.C_id='".$row['Mc_id']."'";
		$r1=mysql_query($cname);
		$row1=mysql_fetch_array($r1);
		echo $row1[0];?></td>
		<td><?php
		$j=0;
		$i=$row3[0];
		$bname="select Branch from `mtech placements` where Mc_id='".$row['Mc_id']."'";
		$r4=mysql_query($bname);
		$row4=mysql_fetch_array($r4);
		echo $row4['Branch'];?></td>
		<td><?php

		$num="select Number from `mtech placements` where Mc_id='".$row['Mc_id']."' and branch='".$row4['Branch']."'";
		$r5=mysql_query($num);
		$row5=mysql_fetch_array($r5);
		echo $row5['Number'];
		$i--;
		?></td>
		<td rowspan="<?php echo $row3[0];?>"><?php
	$sal="select salary from `mtech salary` where Mc_id='".$row['Mc_id']."'";
	$r6=mysql_query($sal);
	$row6=mysql_fetch_array($r6);
	echo $row6[0];?>
	</td></tr>
		<?php
		while($i>0)
		{?>
	<tr>
		<td>
		<?php
			$row4=mysql_fetch_array($r4);
		 echo $row4['Branch'];?>
		 </td>
		 <td><?php
		 $num="select Number from `mtech placements` where Mc_id='".$row['Mc_id']."' and branch='".$row4['Branch']."'";
		$r5=mysql_query($num);
		$row5=mysql_fetch_array($r5);
		echo $row5['Number'];
		$i--;
		}
	?>
	</td>
	</tr>
	<?php
	}
?>
</table>
</body>
</html>