<html>
<head><title>
LOGIN</title>
<style>
body { 
    background-image: url('121.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
}
</style>
<script type="text/javascript">
function pass()
{
if(frm.passw.value=="a")
{
document.frm.action="about.php";
}
else
{
alert("PLZ enter the correct password...")
}
}
</script>
</head>
<img src="Assassin's_Creed_Logo.png" height="500" width="1000">
<body>
<form name="frm" method="post">
<center>
<table border="4" bgcolor="#33CCCC">
<tr>
<th>USERNAME</th>
<td><input type="text" name="txt1" maxlength="15"></td>
</tr>
<tr>
<th>PASSWORD</th>
<td><input type="password" name="passw" maxlength="15"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Log In" onClick="pass()"></td>
</tr>
</table>
</center>
</form>
</body>
</html>