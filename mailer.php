<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='reservations@hotelsaijashan.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission : Sai Jashan Website';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "<h3>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h3>";
		}
	}
?>