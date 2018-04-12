<?php 
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	/*
	$name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $detail = trim($_POST["detials"]);
    */
	$name = filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
    $detail = filter_input(INPUT_POST,"detials", FILTER_SANITIZE_SPECIAL_CHARS);
		
	if ($name == "" || $email == ""|| $detail == "") {
		echo "Please fill in the required fields: Name, Email and Details";
		exit;
	}
	
	if ($_POST["address"] != "") {
		echo "Bad form input";
		exit;
	}
	
	if (!PHPMailer::validateAddress($email)) {
		echo "Invalide Email.";
		exit;
	}
	
    $email_body = "";
    $email_body .= "Name:" . $name . "\n";
    $email_body .= "Email:" . $email . "\n";
    $email_body .= "Details:" . $detail . "\n ";
    
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 3;
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "yuanyin1119@gmail.com";
    $mail->Password = "captjarwscuebmdp";
	
	//because SSL configuration is not right, this setting disables ssl verification
	$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    	
    //It's important not to use the submitter's address as the from address as it's forgery,
    //which will cause your messages to fail SPF checks.
    //Use an address in your own domain as the from address, put the submitter's address in a reply-to
    $mail->setFrom("yuanyin1119@gmail.com", "Yuan Yin");
	
    $mail->addAddress($email);
    $mail->addReplyTo($email, $name);
	$mail->isHTML(true);
    $mail->Subject = "Media Library Survey Thanks";
    $mail->Body = $email_body;
    if (!$mail->send()) {
        echo "Mailer Error: ". $mail->ErrorInfo;
		exit;
    }
	 
    header("location:suggest.php?status=thanks");
}

$pageTitle = "Suggest a Media Item";
$section = "suggest";
include 'inc/header.php';?>

		<div class="section page">
		    <?php 
			   if (isset($_GET["status"]) && $_GET["status"] == "thanks") {
				   echo "<h1> Thank You</h1>";
			       echo "<p>Thanks for the email! I&apos;ll check out your suggestions shortly!</p>";
		   } else {
			?>
		   <div class="wrapper">
		   
		      <h1>Suggest a Media Item</h1>
              <p>If you think I&apos;m missing, let me know! Complete the form to send me an email.</p>	
			  <form method="post" action="suggest.php">
			     <table>
				     <tr>
					    <th><label for="name">Name</label></th>
						<td><input type="text" name="name" id="name" /></td>
					 </tr>
					 
					  <tr>
					    <th><label for="email">Email</label></th>
						<td><input type="text" name="email" id="email" /></td>
					 </tr>
					 
					  <tr>
					    <th><label for="detials">Suggest Details</label></th>
						<td><textarea name="detials" id="detials"></textarea></td>
					 </tr>
					 
					  <tr style="display:none">
					    <th><label for="address">Address</label></th>
						<td><input type="text" name="address" id="address"/>
						<p>Please leave this field blank</p></td>
					  
					  </tr>
				 </table>
			     <input type="submit" value="send" />
			  </form>
		  </div> 
			   <?php } ?>		  
		</div>
<?php include 'inc/footer.php';?>