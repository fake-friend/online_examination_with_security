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
</head>
<body>
    <table class="table align-middle mb-0 bg-white table-hover">
        <thead class="bg-light">
          <tr>
            <th>Serial Number</th>
            <th>Instructor ID</th>
            <th>Instructor Name</th>
            <th>Instructor Photo</th>
            <th>Department</th>
            <th>Post</th>
            <th>Self / Aided</th>
            <th>Username</th>
            <th>Gmail</th>
            <th>Phone Number</th>
            <th>Status</th>
            <th>View</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody>
        <?php
            include_once('../dbconfig.php');
            if($connection)
            {
                $count=1;
                $query='select * from instructor';
                $result=mysqli_query($connection,$query);
                while($row=mysqli_fetch_array($result))
                {
                    $file='http://localhost/online_examination_with_security/instructor/upload/'.$row[5];
        ?>
          <tr>
             <!--serial number-->
             <td>
                <?php echo($count); ?>
            </td>

            <td>
                <div class="ms-3">
                  <p class="fw-bold mb-1"><?php echo($row[1]); ?></p>
                </div>
            </td>
            
            <td>
                <div class="ms-3">
                  <p class="fw-bold mb-1"><?php echo($row[2]); ?></p>
                </div>
            </td>

            <td>
              <div class="d-flex align-items-center">
                <img
                    src="<?php echo($file); ?>"
                    alt=""
                    style="width: 75px; height: 75px; object-fit: fill;"
                    class="rounded-circle"
                    />
              </div>
            </td>

            <td>
                <div class="ms-3">
                  <p class="fw-bold mb-1"><?php echo($row[7]); ?></p>
                </div>
            </td>
            
            <td>
                <div class="ms-3">
                  <p class="text-muted mb-0"><?php echo($row[8]); ?></p>
                </div>
            </td>

            <td>
              <p class="fw-normal mb-1"><?php echo($row[9]); ?></p>
            </td>

            <td>
              <p class="text-muted mb-0"><?php echo($row[12]); ?></p>
            </td>

            <td>
              <p class="text-muted mb-0"><?php echo($row[13]); ?></p>
            </td>

            <td>
              <p class="text-muted mb-0"><?php echo($row[4]); ?></p>
            </td>
        
        <?php
        if($row[16]==1)
        {
        ?>
            <td>
              <span class="badge badge-success rounded-pill d-inline">Logged In</span>
            </td>
        <?php
        }
        else
        {
        ?>
            <td>
              <span class="badge badge-danger rounded-pill d-inline">Logged Out</span>
            </td>
        <?php
        }
        ?>

            <td>
              <form method="post" action="view.php?person=instructor&gmail=<?php echo($row[13]);?>" >
                <button type="submit" class="btn btn-sm btn-info">Info</button>
              </form>
            </td>

            <td>
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