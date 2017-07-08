<html>
<head>
<title> Fake mailer </title>
</head>
<body>
<form action="fakemailer.php" method=post>
<h3>To Mail : </h3> <input type="text" name="email" size="30"><br>
<h3>Sender Name : </h3> <input type="text" name="name" size="30"><br>
<h3> Sender Mail: </h3> <input type="text" name="mail" size="30"><br>
<h3> Subject : </h3> <input type="text" name="subject" size="30"><br>
<h3> Content : </h3> <textarea rows=10 cols=30 name="content"> </textarea><br> 
<input type="submit" value="Send" name="button">
</form>
</body>
</html>
<?php

if(isset($_POST['button']))
{
$to_email=$_POST['email'];
$name=$_POST['name'];
$sender_mail=$_POST['mail'];
$subject=$_POST['subject'];
$content=$_POST['content'];
$header="From: $name"."<$sender_mail>\r\n";
mail($to_email,$subject,$content,$header);
echo "Sent Successfully";
}
?>