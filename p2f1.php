
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta charset="utf-8">
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
<script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})</script>
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
<?php
	include ('connection.php');				
$sql="select * from `company details`";
$query=mysql_query($sql);
$arr=array(130);
$i=0;
?>
<table class="table table-hover" align="center" cellpadding="5" cellspacing="2" border="1">
<tr>
<td style='padding:5px 10px 5px 5px' width="80" height="40"><strong>Sr no.</strong></td>
<td style='padding:5px 10px 5px 5px' height="40"><strong>Company name</strong></td>

</tr>
<?php while($row=mysql_fetch_array($query)){?>
<tr>
<td style='padding:5px 10px 5px 5px'><?php echo $row['C_id']; ?></td>
<td	style='padding:5px 10px 5px 5px' height="40">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
          <?php echo $row['C_name'];
		  if($i<5){?>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php 
		
		echo $row['About'];
		echo "<br/>";
		echo $row['Email_id'];
		echo "<br/>";
		echo $row['Ph_no'];
		}
		?>
      </div>
    </div>
  </div>
  </div>
 </td>

<?php $i++;} ?>
</table>
</body></html>
  <?php include("footer-distributed.php")?>