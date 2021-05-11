<?php  
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$from = "contactus@webassignmenthelp.info";
		$to = "Shabhy@outlook.com";
		
		$Subject = "ContactUs Details";
		$body = "";
		$body = "
		Email: $email
		Subject: $subject
		Message: $message";

		if(empty($name) || empty($email) || empty($subject) || empty($message))
		{
			header('location:contact.php?error');
		}
		else
		{
			if(mail($to, $Subject, $body,"From: <$from>"))
			{
				header('location:contact.php?success');
			}
		}
	}
	else{
		header('location:contact.php');
	}
?>
