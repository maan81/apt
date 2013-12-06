<?php session_start(); $_SESSION['page']="members"; ?>
<?php 
if(isset($_GET['id']) && $_GET['id']>=1 && $_GET['id']<=7){
	$id=$_GET['id'];
	include("./executive/".$id.".php"); break;
}
else{
	//group data ?>

	<br>
	
	The following are the Executive members of the trust : 
	
	<ul>
		<li>
			Chairperson
			<br />
			Prof. Dr. Pushpa Shrestha
			<br />
			(Founding Member)
		</li>
		<br />
		<li>
			Secretary
			<br />
			Mr. Prakash Man Shrestha
			<br />
			(Founding Member)
		</li>
		<br />
		<li>
			Treasurer
			<br />
			Mr. Vikash Man Shrestha
			<br />(Founding Member)
		</li>
		<br />
		<li>
			Joint-Secretary
			<br />
			Mrs. Jayanti Shrestha
			<br />(Founding Member)
		</li>
		<br />
		<li>
			Joint-Secretary
			<br />
			Mrs. Prami Shrestha
			<br />(Founding Member)
		</li>
		<br />
		<li>
			Member
			<br />
			Miss. Jinu Shrestha
		</li>
		<br/>
		<li>
			Member
			<br />
			Miss. Niharika Shrestha
		</li>
	</ul>
<?php }?>