<?php include ('header.php');		
?>
<body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li ><a href="index.php">Homepage</a></li>
				<li class="current_page_item"><a href="page1.php">Placements</a></li>
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
<br>
<?php include ('connection.php');

if(isset($_POST['submit']))
{session_start();
	
  $br= mysql_real_escape_string($_POST['branch']);
$sal= mysql_real_escape_string($_POST['salary']);
$_SESSION['branch']=$br;
$_SESSION['salary']=$sal;
$_SESSION['flag']=1;
if($br==1 && $sal==1)
	header("location:allbtechplacements.php");
else if($br!=1 && $sal==1)
	header("location:onlybranch.php");
else if($br==1 && $sal!=1)
	header("location:onlysalary.php");
else
	header("location:both.php");
}

?>

<form method="post" >
Branch:<select type="text" name="branch" class="main" />
			  <option value="1"></option>
	          <option value="BT">BioTech</option>
	          <option value="CE">Civil</option>
	          <option value="CH">Chemical</option>
	          <option value="CS">Computer Engineering</option>
	          <option value="EE">Electrical Engineering</option>
	          <option value="EC">Electronics</option>
	          <option value="EIC">EIC</option>
	          <option value="MEH">Mechanical</option>
	          <option value="MCA">MCA</option>
	      
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
<br/>

  
<h3 style="text-align:center"><strong> Btech &nbsp Placements &nbsp 2013-2014</strong></h3>

<table class="table table-hover" align="center" cellpadding="5" cellspacing="2" border="1">
<tr>
<td><strong>SR no.</strong></td>
<td><strong>Company name</strong></td>
<td><strong>Branch</strong></td>
<td><strong>No. of students placed</strong></td>
<td><strong>CTC offered(in lpa)</strong></td>
</tr>

<?php 
$id="select distinct(Bc_id) from `btech placements`";
$r2=mysql_query($id);
$l=1;
while($row=mysql_fetch_array($r2))
{		$cc="select count(Branch) from `btech placements` where Bc_id='".$row['Bc_id']."'";
		$r3=mysql_query($cc);
		$row3=mysql_fetch_array($r3);
		?>
		<tr><td rowspan="<?php echo $row3[0];?>"><?php echo $l;$l++;?></td><td rowspan="<?php echo $row3[0];?>"><?php
		$cname="select C_name from `company details`,`btech placements` where `company details`.C_id='".$row['Bc_id']."'";
		$r1=mysql_query($cname);
		$row1=mysql_fetch_array($r1);
		echo $row1[0];?></td>
		<td><?php 
		$j=0;
		$i=$row3[0];
		$bname="select Branch from `btech placements` where Bc_id='".$row['Bc_id']."'";
		$r4=mysql_query($bname);
		$row4=mysql_fetch_array($r4);
		echo $row4['Branch'];?></td>
		<td><?php
		
		$num="select Number from `btech placements` where Bc_id='".$row['Bc_id']."' and branch='".$row4['Branch']."'";
		$r5=mysql_query($num);
		$row5=mysql_fetch_array($r5);
		echo $row5['Number'];
		$i--;
		?></td>
		<td rowspan="<?php echo $row3[0];?>"><?php
	$sal="select salary from `btech salary` where Bc_id='".$row['Bc_id']."'";
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
		 $num="select Number from `btech placements` where Bc_id='".$row['Bc_id']."' and branch='".$row4['Branch']."'";
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
  <?php include("footer-distributed.php")?>