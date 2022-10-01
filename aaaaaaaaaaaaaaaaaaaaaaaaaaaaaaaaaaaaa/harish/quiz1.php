<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="post">
        <div class="questions">
        <?php
            $con=mysqli_connect('localhost','root','','quiz_test');
            $i=1;
            if($con)
            {
                $show='select * from test1';
                $result=mysqli_query($con,$show);
                while($row=mysqli_fetch_array($result))
                {
        ?>
                    <p><?php echo($i); ?> &nbsp; &nbsp; <?php echo($row[1]); ?></p>
                    <input type="radio" name="<?php echo($row[0]); ?>" value="<?php echo($row[2]); ?>" id=""><?php echo($row[2]); ?><br>
                    <input type="radio" name="<?php echo($row[0]); ?>" value="<?php echo($row[3]); ?>" id=""><?php echo($row[3]); ?><br>
                    <input type="radio" name="<?php echo($row[0]); ?>" value="<?php echo($row[4]); ?>" id=""><?php echo($row[4]); ?><br>
                    <input type="radio" name="<?php echo($row[0]); ?>" value="<?php echo($row[5]); ?>" id=""><?php echo($row[5]); ?>
                    
        <?php    
                $i=$i+1;   
                }
            }
        else
        {
            die('something happened'.mysqli_connect_error());
        }
        ?>
        </div>
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>