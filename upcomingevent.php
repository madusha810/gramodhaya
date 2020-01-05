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
    <title>Upcoming admin</title>
    <link rel="stylesheet" type="text/css" href="upcomingadmin.css">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="donate.css">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
    </head>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item active"><a href="upcomingevent.php" class="nav-link" style="margin-right:20px">Events</a></li>
               <li class="nav-item"><a href="adminhedesk.php" class="nav-link" style="margin-right:20px">Help Desk</a></li>
               <li class="nav-item"><a href="admin_manage_member.php" class="nav-link" style="margin-right:20px">Remove members</a></li>
               <li class="nav-item"><a href="admindonation.php" class="nav-link" style="margin-right:20px">Donations</a></li>
                 <li class="nav-item"><a href="admin_comment.php" class="nav-link" style="margin-right:20px">Comments</a></li>
                 <li class="nav-item"><a href="viewjob.php" class="nav-link" style="margin-right:20px">job</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
    
    
<body>
<?php
    
    if(isset($_POST['submit'])){
        $dbServername = "localhost";
        $dbUsername = "id11488282_root";
        $dbPassword = "123456";
        $dbName = "id11488282_foundation";
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        
        $da1= $conn->real_escape_string($_POST['date1']);
        $de1= $conn->real_escape_string($_POST['des1']);
        
        $sql = "INSERT INTO up_coming_events(date1,description1) VALUES('$da1','$de1')";
        
       $upcomingsave =  mysqli_query($conn,$sql);
        
        if($upcomingsave){
            echo "<script>alert('Post is succesfull...');</script>";
        }
        else{
            echo "<script>alert('Not saved,check it again...');</script>";
        }
        
    }
    
    ?>
    
    
    
    
    <div id="header">
        <h1 class="text-center">Add up coming events</h1>
    </div>
    
    <div id="form">
        <form method="post">
            <div class="form-group">
                <label>Date:</label>
                <input class="form-control "type="date" name="date1">
            </div>
            <div class="form-group">
                <label>Description:</label>
                <input class="form-control "type="text-area" name="des1">
            </div>
            <hr class="hrline">
        
        
            
              
            <div class="text-center">
                <input class="form-control btn btn-primary "type="submit" name="submit" value="Post" style="width: 50%;">
            </div>
            
        </form>
    </div>
    
    
    <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
</body>



</html>