<?php  
	require_once('config.php');
?>

<?php 
	if(isset($_POST)){
		$email     	= $_POST['email'];
		$deadline  	= $_POST['deadline'];
		$subject   	= $_POST['subject'];
		$page      	= $_POST['page'];

		$sql = "INSERT INTO freeorderdetails (email, deadline, subject, page) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$email, $deadline, $subject, $page]);
		if($result){
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