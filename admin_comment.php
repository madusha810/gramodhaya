<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['adminuser'])){
        echo"<script>window.open('adminlogin.php','_self')</script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>admin physical donation.</title>
        
        <link rel="stylesheet" type="text/css" href="admin_comment.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
   
   
    
    </head>
    
      <body id="five">
    
         <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="upcomingevent.php" class="nav-link" style="margin-right:20px;font-size:25px">Events</a></li>
               <li class="nav-item"><a href="adminhedesk.php" class="nav-link" style="margin-right:20px;font-size:25px">Help Desk</a></li>
               <li class="nav-item"><a href="admin_manage_member.php" class="nav-link" style="margin-right:20px;font-size:25px">Remove members</a></li>
               <li class="nav-item"><a href="admindonation.php" class="nav-link" style="margin-right:20px;font-size:25px">Donations</a></li>
                 <li class="nav-item active"><a href="admin_comment.php" class="nav-link" style="margin-right:20px;font-size:25px">Comments</a></li>
                 <li class="nav-item"><a href="viewjob.php" class="nav-link" style="margin-right:20px;font-size:25px">job</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" style="font-size:25px" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
        
          <div class="row">
          <div class="col-12" style="text-align:center; margin-top: 5%;">
              
        <h1>Members comment.</h1>
        </div>
        </div>
        
        <div class="row">
             <div class="col-12" style="margin-top: 5%;">
              
          <div id="one">
          <?php
        
        $dbServername = "localhost";
        $dbUsername = "id11488282_root";
        $dbPassword = "123456";
        $dbName = "id11488282_foundation";
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
              
        $sql = "select * from comment ORDER BY comment_id DESC LIMIT 4";
        $result = mysqli_query($conn,$sql);
              
        while($row = mysqli_fetch_array($result)){
            
            $mcom = $row['uname'];
            $com = $row['comt'];
            
            echo "
                <div id='two'>
                
                <div> 
                <h3>user name:</h3>
                <h2>$mcom</h2>
                
                </div>
                <br>
                <div>
                <h3>comment:</h3>
                <h2>$com</h2>
                
                </div>
                <br>
                <hr>
                
                
                </div>
            ";
            
        }
              
        ?>
          </div>  
          </div>
              
        <?php
              
        
        if(isset($_POST['submit'])){
        $dbServername = "localhost";
        $dbUsername = "id11488282_root";
        $dbPassword = "123456";
        $dbName = "id11488282_foundation"; 
            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
              
        $adcoment = $conn->real_escape_string($_POST['adcomt']);
              
        $sql = "INSERT INTO admin_comment(adcome) VALUES('$adcoment')";
        $result = mysqli_query($conn,$sql);
            
        if($result){
             echo"<script>alert('post is success...');</script>";
        }
        else{
             echo"<script>alert('post is not success.try again...');</script>";
        }
            
        }
        ?>
          </div>   
          
          
              
              <form method="post" action="">
                  
                  
          <div class="row">
              <div class="col-md-8 col-md-offset-2" style="margin-left: 15%">
          
              
              <h1>Drop a comment to members.</h1>
              
             </div>
              </div>
                  
                <div id="three">
                  
                    <div class="form-group">
                        <label><h2 id="four">Your comment:</h2></label>
                <input type="text" class="form-control" name="adcomt" style="width:75%;margin-left:10%;margin-bottom:20px;hieght:40px;"  required>
                    
                    
                        
                        
                        
                            
            <div class="text-center">
                <input class="form-control btn btn-primary "type="submit" name="submit" value="Post" style="width: 50%;">
            </div>
            </div>
                  
                  </div>
                  
              </form>
              
          </div>
          </div>
          <script src="Resourses/js/jquery-3.3.1.min.js"></script> 
    </body>