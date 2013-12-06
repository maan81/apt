<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="Amrit-Prithvi Trust, apt, amrit, prithvi" />
	<meta name="description" content="A social organization dedicated to help the nation and people in different fields like education, health, social work, arts, culture, religion." />
	<title>Amrit-Prithvi Trust</title>
	<link rel="stylesheet" type="text/css" href="include/1.css" />
	<script type="text/javascript" src="include/page.js"></script>
	<script type="text/javascript" src="include/contact.js"></script>
	<script type="text/javascript" src="include/clock.js"></script>
</head>

<?php //get option 
	if(isset($_GET['opt']))	$opt = $_GET['opt'];
	else				$opt = "home";
?>
<body class="body" onload="show_clock(); makerequest('page/home.php','b1'); return false;">

<?php //////////////////////////////////?>
<?php //to count no. of times page is visited ?>
<div style="display:none"><script type="text/javascript" language="javascript" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/plugins/counter.php?page=home"></script></div>
<?php //////////////////////////////////?>

<?php //Preloading loading image ?>
<img src='images/loading.gif' width='1' height='1' border='0' style='opacity:0;z-index:-3;'>
<?php ///////////////////////////?>

<?php require('page/impt_marquee.php')?>

<div style="border:1px solid #000000;border-radius:10px;">
	<!-- header section -->
	<div class="head">
		<div class="logo">
			<img src="images/logo.gif" alt="logo" /><br />
		</div>
		
		<div>
			<h1>Amrit-Prithvi Trust</h1>
			<div style="position: relative; top: -15px; margin: 0pt;">अमृत-पृथ्वी अविनाशि गुठी</div>
			<br />
			Education is the main key to development
		</div>
	</div>
	<!-- end of header section -->

	
	<!-- top menu section -->
	<div class="h">
		<center>
			<span id="buttons">
			<!--<a href="">--><img src="./images/left.png" width="15px" alt="previous"/><!--</a>--> 
			&nbsp;&nbsp;&nbsp; 
			<!--<a href="">--><img src="./images/right.png" width="15px" alt="next" /><!--</a>-->
			</span>
		<?php require('page/topmenu.php'); ?> <br />
		</center>
	</div>
	<!-- end of top menu section -->
	
	<table style="width:100%;border-top:1px solid black;border-collapse:collapse;">
		<tr>
			<td valign="top" width="15%" style='padding:0;border-right:1px solid black;'>
				<!-- left menu section -->
				<div class="v">
					<?php require('page/executive.php'); ?>
				</div>
				<!-- end of left menu section -->
			</td>

			<td valign="top" id="b1">
				<!-- main section -->
				<div><?php include("./page/".$opt.".php"); ?></div>
				<!-- end of main section -->
			</td>
		</tr>
	</table>

	<!--	<center><a href="">Top</a></center> -->

	<!-- footer section -->
	<div class="ff" id="ff">
		<a href="<?php echo $_SERVER['PHP_SELF']; ?>" >Amrit-Prithvi Trust<sup>&copy;</sup></a>
		<div id="time" align="center" ></div>
	</div>
	<!-- end of footer section -->

</div>

</body>
</html>
