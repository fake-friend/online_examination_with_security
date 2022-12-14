<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style>
    body {
      background-color: #eee;
    }

    label.radio {
      cursor: pointer;
    }

    label.radio input {
      position: absolute;
      top: 0;
      left: 0;
      visibility: hidden;
      pointer-events: none;
    }

    label.radio span {
      padding: 10px 10px;
      border: 1px solid green;
      display: inline-block;
      color: red;
      text-align: center;
      border-radius: 3px;
      margin-top: 7px;
      text-transform: uppercase;
    }

    label.radio input:checked+span {
      border-color: green;
      background-color: green;
      color: #fff;
    }

    .ans {
      margin-left: 36px !important;
    }

    .btn:focus 
    {
      outline: 0 !important;
      box-shadow: none !important;
    }

    .btn:active {
      outline: 0 !important;
      box-shadow: none !important;
    }
  </style>

  <script type="text/javascript">
    function timeout()
    {
      var hours=Math.floor(timeLeft/3600);
      var minute=Math.floor((timeLeft-(hours*60*60)-30)/60);
      var second=timeLeft%60;
      var hrs=checktime(hours);
      var mint=checktime(minute);
      var sec=checktime(second);
      if(timeLeft<=0)
      {
        clearTimeout(tm);
        document.getElementById("form1").submit();
        //window.location.href="result.php";
      }
      else
      {
        document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec;
      }
      timeLeft--;
      var tm=setTimeout(function() {timeout()},1000 )
    }
    function checktime(msg)
    {
        if(msg<10)
        {
          msg="0"+msg;
        }
        return msg;
    }
  </script>
</head>

<body onload="timeout()">


<script type="text/javascript">
      var timeLeft=2*60*60;
</script>

<form id="form1" action="result.php" method="post">
  <h1>Quiz-1 <div id="time" style="float:right"> timeout</div></h1>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'quiz_test');
    $i = 1;
    if ($con) {
      $show = 'select * from test1';
      $result = mysqli_query($con, $show);
      while ($row = mysqli_fetch_array($result)) {
    ?>
     
        <div class="container mt-5">
          <div class="d-flex justify-content-center row">
            <div class="col-md-10 col-lg-10">
              <div class="border">
                <div class="question bg-white p-3 border-bottom">
                  <div class="d-flex flex-row align-items-center question-title">
                   
                    <h5 class="text-danger"><?php echo ($i); ?></h5>
                    <h5 class="mt-1 ml-2"><?php echo ($row[1]); ?></h5>
                  </div>
                  <div class="ans ml-2">
                    <label class="radio"> <input type="radio" name="<?php echo ($row[0]); ?>" value="<?php echo ($row[2]); ?>"> <span><?php echo ($row[2]); ?></span>
                    </label>
                  </div>
                  <div class="ans ml-2">
                    <label class="radio"> <input type="radio" name="<?php echo ($row[0]); ?>" value="<?php echo ($row[3]); ?>"> <span><?php echo ($row[3]); ?></span>
                    </label>
                  </div>
                  <div class="ans ml-2">
                    <label class="radio"> <input type="radio" name="<?php echo ($row[0]); ?>" value="<?php echo ($row[4]); ?>"> <span><?php echo ($row[4]); ?></span>
                    </label>
                  </div>
                  <div class="ans ml-2">
                    <label class="radio"> <input type="radio" name="<?php echo ($row[0]); ?>" value="<?php echo ($row[5]); ?>"> <span><?php echo ($row[5]); ?></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


    <?php
        $i = $i + 1;
      }
    } else {
      die('something happened' . mysqli_connect_error());
    }
    ?>
    <br>
    <center><input type="submit" class="btn btn-success" value="submit"></center>
  </form>
</body>
</html>