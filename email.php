<?php 
if(isset($_POST['submit']))
{
    $to = "puil5271@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['comments'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['comments'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //header('Location: index.html'); to redirect to another page.
    echo "<script language=\"JavaScript\">\n";
	echo "alert('Mail Sent. Thank you! " . $name . ", we will contact you shortly.');\n";
	echo "window.location='index.html'";
	echo "</script>";
}
else
{
 	header('Location: index.html'); //to redirect to another page.
}
?>