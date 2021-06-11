<html>
<head>
<style>
body { 
    background-image: url('1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
}
</style>
<body vlink="red" alink="cyan">
<mark>
<B>WELCOME</B>
<?php
$b= $a;
echo(" ".$b);
?>
<br>
<a href="0.1login.php"><u>Log out</u></a>
</mark>
<center>
<img src="14.png" height="100" width="80"><img src="14.png" height="100" width="80"><img src="14.png" height="100" width="80">
<img src="images.png">
<img src="14.png" height="100" width="80"><img src="14.png" height="100" width="80"><img src="14.png" height="100" width="80">
</center><hr size="3" color="black">
<marquee scrollamount="15">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
</marquee><center><hr size="3" color="black">
<center><b>
<font face="algerian"size="5">
<u><a href="about.php">ABOUT</a></u>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<u><a href="assassins.php">ASSASSINS</a></u>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<u><a href="series.php">SERIES</a></u>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<u><a href="feedback.php">FEEDBACK</a></u>
</b><hr size="3" color="black">
<b><tt>Your feedback is very important for us.</tt></b><br>
<img src="fe.png" align="right" height="300" width="300">
<img src="fee.png" align="left" height="300" width="200">
<form name="gama" method="POST">
<textarea name="texta" rows="10" cols="100" wrap="on">
</textarea><br>
<input type="submit" name="sub" value="SUBMIT">
<br>
<?php
function WriteDetail()
{
if(isset($_POST["texta"]))
{
$fp=fopen("Feedback.txt","a+");
$record=$_POST["texta"];
fwrite($fp,$record."\r\n");
echo("THANKS FOR YOUR FEEDBACK");
fclose($fp);
}
}
if(isset($_POST["sub"]))
{
WriteDetail();
}
?>
</form>
</center>
<br><hr size="3" color="black">
<marquee scrollamount="15" direction="right">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
<img src="3.jpg" width="180" height="100">
<img src="2.jpg." width="180" height="100">
<img src="4.jpg" width="180" height="100">
<img src="5.jpg" width="180" height="100">
<img src="6.jpg" width="180" height="100">
<img src="7.jpg" width="180" height="100">
<img src="8.jpg" width="180" height="100">
<img src="9.jpg" width="180" height="100">
<img src="10.jpg" width="180" height="100">
<img src="11.jpg" width="180" height="100">
<img src="12.jpg" width="180" height="100">
</marquee><hr size="3" color="black">
</center>
<font face="Comic Sans MS" size="1" color="black">
<center><a href="mailto:guptapranjal7@gmail.com"><mark>Click Here To Contact Me</mark></a><br>
To make websites or to purchase any part of 
<font face="Segoe Script" size="1" align="right">
<u>ASSASSIN'S CREED</u>.
<font face="Comic Sans MS" size="1" color="black">
This website is designed by 
<font face="Cambria Math" size="1">
<a href="pg.php">PRANJAL GUPTA</a> .
</body>
</html>