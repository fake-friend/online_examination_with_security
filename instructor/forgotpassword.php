<?php
session_start();
$_SESSION['gmail']=$email;
?>
<html>
    <body>
        <form action="forgototp.php" method="post">
        <fieldset>
        <label for="fmail">Enter your login email</label>
        <input type="email" name="fmail" id="fmail"  pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com">
</fieldset>
<br><br>
<input type="submit" value="submit">
<?php
 include_once("forgotmail.php");
 ?>
</form>
</body>
</html>