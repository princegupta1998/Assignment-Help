<?php  
	require_once('config.php');
?>

<?php  
	if(isset($_POST)){
		$email     	= $_POST['email'];
		$deadline  	= $_POST['deadline'];
		$subject   	= $_POST['subject'];
		$page      	= $_POST['page'];
		$message    = $_POST['message'];
		
		$Subject = "Order Details";
		$from = "orderdetails@webassignmenthelp.info";
		$to = "Shabhy@outlook.com";
		
	    $Body = "";
	    $Body = "
	    Email: $email
	    Deadline: $deadline
	    subject: $subject
	    Page: $page
	    Message: $message
	    ";

		$sql = "INSERT INTO orderdetails (email, deadline, subject, page, message) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$email, $deadline, $subject, $page, $message]);
		if($result){
		    mail($to, $Subject, $Body, "From: <$from>");
			echo "Your Order Placed Successfully!";
		}
		else{
			echo "There were errors while order.";
		}
	}
	else{
		echo "No Data!";
	}
?>

