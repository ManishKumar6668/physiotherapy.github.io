
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
$Name = $_POST['userfName'];
$LName = $_POST['userlName'];

$email  = $_POST['userEmail'];
$phone =$_POST['userPhone'];

$Message=$_POST['userMessage'];


//Save visitor name and entered message into one variable:
$formcontent=" Name: $Name $LName\r\n E-mail: $email \r\n phone: $phone \r\n Message: $Message\r\n ";
$recipient = "manishyashahmedia@gmail.com";
// $headers .= "BCC: thunga.manjunatha@gmail.com\r\n";
$subject = "The inquiry form";
$mailheader = "From: $email\r\n";
$mailheader .= "Reply-To: $email\r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mail=mail($recipient, $subject, $formcontent, $mailheader);
if($mail)
	{?><script>alert('Thank you for contacting us');
	  window.location.href='index.html';
	</script>

	<?php }
else
{
{?><script>alert('Cannot send mail');
	  window.location.href='index.html';
	</script>

	<?php }

}
}
?>