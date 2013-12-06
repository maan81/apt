<?php
include("securimage.php");
include("../plugins/mail.php");

$img = new Securimage();
$valid = $img->check($_POST['codes']);

if($_POST['name'] && $_POST['email'] && $_POST['comment'] && $valid==true ){

	$m=new Mail();
	$message="<br>Name : ".$_POST['name']."<br>Comment : ".$_POST['comment']."<br><br>The above message has been send.";

	
	$m->From($_POST['email']);
	$m->Subject("Online Form Submission");
	$m->Body($message);
	$m->To("info@apt.org.np");



echo m->Send();


	if( $m->Send()){
		echo $message;
	
		echo "<br><br>Thank you for your comment. <br><br>
				If necessary, you shall recieve a reply within a few days.";
	}

	else{
                echo "bb";
		echo "<center>Please fill all the fields. Your message has NOT been sent.</center>";
	}

} else {
        echo "cc";
	echo "<center>Please fill all the fields. Your message has NOT been sent.</center>";
}

?>

