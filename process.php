<?php



    if(isset($_POST['submit'])) {


     	$to = "jimmy20640@gmail.com";
		$subject = "subject";
		$name = "name";
		$email = "email" . "\r\n" .
		"CC: somebodyelse@example.com";

		mail($to,$subject,$name,$email);


    }



?>
