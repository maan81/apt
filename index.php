<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="Amrit-Prithvi Trust, apt, amrit, prithvi" />
	<meta name="description" content="A social organization dedicated to help the nation and people in different fields like education, health, social work, arts, culture, religion." />
	<title>Amrit-Prithvi Trust</title>
	<link rel="stylesheet" type="text/css" href="include/1.css" />
	<script type="text/javascript" src="include/page.js"></script>
	<script type="text/javascript" src="include/contact.js"></script>
	<script type="text/javascript" src="include/clock.js"></script>
	<script type="text/javascript" src="include/ckeditor.js"></script>
	<script type="text/javascript">
		var editor;
		var curPage;

		function createEditor(){

			if ( document.getElementById('save') )
				return;

			var html = document.getElementById( 'b1' ).innerHTML;

			//create new div with id "editor" to create space for editing
			var newEditor = document.createElement('div');
			newEditor.id="editor";

			//create new save & close btns
			var saveBtn = document.createElement('button');
			saveBtn.id="save";
			saveBtn.textContent="Save";
			
			var attrStyle = document.createAttribute("style");
			var attrOnclick = document.createAttribute("onclick");

			attrStyle.value = "float:right;";
			attrOnclick.value = "saveEditor();";

			saveBtn.setAttributeNode(attrStyle);
			saveBtn.setAttributeNode(attrOnclick);

			var closeBtn = document.createElement('button');
			closeBtn.id="close";
			closeBtn.textContent="Close";

			var attrStyle = document.createAttribute("style");
			var attrOnclick = document.createAttribute("onclick");

			attrStyle.value = "float:right;";
			attrOnclick.value = "removeEditor();";

			closeBtn.setAttributeNode(attrStyle);
			closeBtn.setAttributeNode(attrOnclick);
			
			document.getElementById('b1').appendChild(saveBtn);
			document.getElementById('b1').appendChild(closeBtn);


			document.getElementById('b1').appendChild(newEditor)

			//hide the original text
			for(var i = 0; i<(document.getElementById('b1').children.length-3);i++){
				document.getElementById('b1').children[i].style.display = "none";
			}


			// Create a new editor inside the <div id="editor">, setting its value to html
			var config = {};
			editor = CKEDITOR.appendTo( 'editor', config, html );
		}

		function removeEditor(){

			if ( !document.getElementById('save') )
				return;

			var $data = editor.getData();

			// Retrieve the editor contents. In an Ajax application, this data would be
			// sent to the server or used in any other way.
			document.getElementById( 'b1' ).innerHTML = editor.getData();
			//document.getElementById( 'contents' ).style.display = '';

			// Destroy the editor.
			editor.destroy();
			editor = null;


			//show the updated text
			for(var i = 0; i<(document.getElementById('b1').children.length-1);i++){
				document.getElementById('b1').children[i].style.display = "";
			}

		}

		function saveEditor(){
			if ( !document.getElementById('save') )
				return;

			var data = 'page='+curPage+'&contents='+editor.getData();
			makepost('page/updatePage.php', 'b1', data);
		}

		/*
			Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
			For licensing, see LICENSE.html or http://ckeditor.com/license
		*/
		CKEDITOR.stylesSet.add('default',[{name:'Blue Title',element:'h3',styles:{color:'Blue'}},{name:'Red Title',element:'h3',styles:{color:'Red'}},{name:'Marker: Yellow',element:'span',styles:{'background-color':'Yellow'}},{name:'Marker: Green',element:'span',styles:{'background-color':'Lime'}},{name:'Big',element:'big'},{name:'Small',element:'small'},{name:'Typewriter',element:'tt'},{name:'Computer Code',element:'code'},{name:'Keyboard Phrase',element:'kbd'},{name:'Sample Text',element:'samp'},{name:'Variable',element:'var'},{name:'Deleted Text',element:'del'},{name:'Inserted Text',element:'ins'},{name:'Cited Work',element:'cite'},{name:'Inline Quotation',element:'q'},{name:'Language: RTL',element:'span',attributes:{dir:'rtl'}},{name:'Language: LTR',element:'span',attributes:{dir:'ltr'}},{name:'Image on Left',element:'img',attributes:{style:'padding: 5px; margin-right: 5px',border:'2',align:'left'}},{name:'Image on Right',element:'img',attributes:{style:'padding: 5px; margin-left: 5px',border:'2',align:'right'}},{name:'Borderless Table',element:'table',styles:{'border-style':'hidden','background-color':'#E6E6FA'}},{name:'Square Bulleted List',element:'ul',styles:{'list-style-type':'square'}}]);

	</script>
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
