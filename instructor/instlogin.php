<?php 
session_start();
if($_SESSION['instructor_name'] && $_SESSION['gmail'])
{
    echo $_SESSION['instructor_name']."<br>".$_SESSION['gmail'];?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="logout.php">
            <input type="submit" value="logout">
        </form>
    </body>
    </html>
<?php 
}
else
{
    header("location:slogin.html");
}
?>