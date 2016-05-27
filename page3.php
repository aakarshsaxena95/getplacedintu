<?php include('header.php'); 
?>
<body>
<div id="menu-wrapper">
	<div id="menu">
		
			<li><a href="index.php">Homepage</a></li>
		<li><a href="page1.php">Placements</a></li>
			<li><a href="page2.php">Preparation</a></li>
			<li class="current_page_item"><a href="page3.html">Blogs</a></li>
			
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
<?php include('connection.php');
$m="select * from alumni where Password=1";
$r=mysql_query($m);
while($row=mysql_fetch_array($r))
{ ?>

<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h4 class="title"><?php echo $row['Name'] ;?></h4>
						<p class="meta"><span class="date">Contact:<?php echo $row['User_id']; ?></span><span class="posted">Passout Year:<?php echo $row['Passout year']; ?></span></p>
						
						<div class="entry">
							<p><?php echo $row['Comments'] ;?> </p>
	
						</div>
					</div>	
					
						</div>
					</div>	
					</div>
					</div>
<?php 
}
?>

<div id="header-wrapper">
	<div id="header">
	<label for="exampleInputName2"><h3>SHARE YOUR STORY</h3></label>
	<hr border="2px" color="#737373">
	<br/>
<form class="form-inline" method="post">
  <div class="form-group">
    <label for="exampleInputName2">Name:</label>
    <input type="text" class="form-control" name="name" id="exampleInputName2" placeholder="Jane Doe">
  </div>
  
    <div class="form-group">
    <label for="exampleInputName2">Passout Year:</label>
    <input type="text" class="form-control" name="year" id="exampleInputName2" placeholder="2011">
  </div>
  
  <br/>
  <br/>
  <div class="form-group">
    <label for="exampleInputEmail2">Email:</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>
  <br/>
  <br/>

<div class="form-group">
    <label for="exampleInputName2">Comment:</label>
	<br/>
    <textarea name="comment" class="form-control" rows="10" cols="50"></textarea>
  </div>
  <br/><br/>

<div class="btn-group" role="group" aria-label="...">
  <button type="submit" name="submit" class="btn btn-default">Post</button>
</div>
</form>  
	  	</div>
</div>
<?php

	if(isset($_POST['submit']))
	{
		if(empty($_POST['name']))
			echo "<strong>Name is required</strong>";
		else if(empty($_POST['email']))
			echo "<strong>Email is required</strong>";
		else if(empty($_POST['year']))
			echo "<strong>Year is required</strong>";
		else if(empty($_POST['comment']))
			echo "<strong>Comment box is empty</strong>";
		else{
			
		$name=mysql_real_escape_string($_POST['name']);
		$email=mysql_real_escape_string($_POST['email']);
		$year=mysql_real_escape_string($_POST['year']);
		$comment=mysql_real_escape_string($_POST['comment']);
		$q="insert into alumni(Name,Password,Comments,User_id,`Passout Year`) values ('$name',0,'$comment','$email','$year')";
		$r=mysql_query($q);
		header("location:page3.php");
		}		
	}
	
?>
  <?php include("footer-distributed.php")?>