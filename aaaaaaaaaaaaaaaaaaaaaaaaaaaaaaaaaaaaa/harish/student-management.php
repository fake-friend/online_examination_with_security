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
      th,td
      {
        text-align: center;
      }
    </style>
</head>
<body>
    <table class="table align-middle mb-0 bg-white table-hover">
        <thead class="bg-light">
          <tr>
            <th colspan="3">Serial Number</th>
            <th colspan="3">Student RollNumber</th>
            <th colspan="3">Student Name</th>
            <th colspan="3">Student Photo</th>
            <th colspan="3">Department</th>
            <th colspan="3">Batch</th>
            <th colspan="3">Self / Aided</th>
            <th colspan="3">Username</th>
            <th colspan="3">Gmail</th>
            <th colspan="3">Phone Number</th>
            <th colspan="3">Status</th>
            <th colspan="3">View</th>
            <th colspan="3">Remove</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include_once('dbconfig.php');
            if($connection)
            {
                $count=1;
                $query='select * from student';
                $result=mysqli_query($connection,$query);
                while($row=mysqli_fetch_array($result))
                {
                    $file='http://localhost/online_examination_with_security/student/upload/'.$row[4];
        ?>
          <tr>
            <!--serial number-->
            <td colspan="3">
                <?php echo($count); ?>
            </td>
            <!--student roll number-->
            <td colspan="3">
                <div class="ms-3">
                  <p class="fw-bold mb-1"><?php echo($row[9]); ?></p>
                </div>
            </td>
            <!--student name-->
            <td colspan="3">
                <div class="ms-3">
                  <p class="fw-bold mb-1"><?php echo($row[1]); ?></p>
                </div>
            </td>
            <!--student photo-->    
            <td colspan="3">
              <div class="d-flex align-items-center">
                <img
                    src="<?php echo($file); ?>"
                    alt=""
                    style="width: 75px; height: 75px; object-fit: fill;"
                    class="rounded-circle"
                    />
              </div>
            </td>
            <!--department-->
            <td colspan="3">
                <div class="ms-3">
                  <p class="fw-bold mb-1"><?php echo($row[8]); ?></p>
                </div>
            </td>
            <!--batch-->
            <td colspan="3">
                <div class="ms-3">
                  <p class="text-muted mb-0"><?php echo($row[10]); ?></p>
                </div>
            </td>
            <!--self / aided-->        
            <td colspan="3">
              <p class="fw-normal mb-1"><?php echo($row[12]); ?></p>
            </td>
            <!--username-->        
            <td colspan="3">
              <p class="text-muted mb-0"><?php echo($row[13]); ?></p>
            </td>
            <!--gmail-->        
            <td colspan="3">
              <p class="text-muted mb-0"><?php echo($row[14]); ?></p>
            </td>
            <!--phone number-->        
            <td colspan="3">
              <p class="text-muted mb-0"><?php echo($row[3]); ?></p>
            </td>
        
        <?php
        if($row[17]==1)
        {
        ?>
            <td colspan="3">
              <span class="badge badge-success rounded-pill d-inline">Logged In</span>
            </td>
        <?php
        }
        else
        {
        ?>
            <td colspan="3">
              <span class="badge badge-danger rounded-pill d-inline">Logged Out</span>
            </td>
        <?php
        }
        ?>

            <td colspan="3">
              <form action="view.php?person=student&gmail=<?php echo($row[14]); ?>" method="post">
                <button type="submit" class="btn btn-sm btn-info">Info</button>
              </form>
            </td>

            <td colspan="3">
              <form action="" method="post">
                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
              </form>
            </td>

          </tr>
        <?php
            $count=$count+1;
                }      
            }
            else
            {
                die('could not connect with database'.mysqli_connect_error());
            }   
        ?> 
        </tbody>
      </table>
</body>
</html>
