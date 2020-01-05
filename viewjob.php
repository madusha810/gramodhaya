<?php
    session_start();
?>
<?php
    if(!isset($_SESSION['adminuser'])){
        echo"<script>window.open('adminlogin.php','_self')</script>";
    }
?>

<html>
<head>
    <title>view job</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="donate.css">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
   
   
    
    <style>
        #ty{
            
            width: 60%;
            margin-left: 20%;
            border-style: solid;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        
        #btn{
            width: 30%;
            margin-left: 35%;
        }
        
        h2{
            font-family: sans-serif;
            margin-left: 20px;
            margin-top: 20px;
        }
    
    </style>
    
    </head>
<body>
    
     <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="upcomingevent.php" class="nav-link" style="margin-right:20px">Events</a></li>
               <li class="nav-item"><a href="adminhedesk.php" class="nav-link" style="margin-right:20px">Help Desk</a></li>
               <li class="nav-item"><a href="admin_manage_member.php" class="nav-link" style="margin-right:20px">Remove members</a></li>
               <li class="nav-item"><a href="admindonation.php" class="nav-link" style="margin-right:20px">Donations</a></li>
                 <li class="nav-item"><a href="admin_comment.php" class="nav-link" style="margin-right:20px">Comments</a></li>
                 <li class="nav-item active"><a href="viewjob.php" class="nav-link" style="margin-right:20px">job</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
    
    <h2>Manage applied vacanicies.</h2>
    <?php
   
    
    $dbServername = "localhost";
        $dbUsername = "id11488282_root";
        $dbPassword = "123456";
        $dbName = "id11488282_foundation";
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    $sql = "select * from job_application ORDER BY job_id DESC LIMIT 1";
    
    
    $result = mysqli_query($conn,$sql);
    
    echo"<form method='POST' action='action.php'>";
    while($row=mysqli_fetch_array($result)){
       
        echo"<div id='ty'>";
        echo"<br>";
        echo "<h5>job_id:</h5>";
	echo "<input type='text' class='form-control' name='jid' value=".$row['job_id']." disabled>";
	echo"<br>";
        
	echo "<h5>full_name:</h5>";
	echo "<input type='text' class='form-control' name='fname' value=".$row['full_name']." disabled>";
	echo"<br>";
        
	echo "<h5>initial name:</h5>";
	echo "<input type='text' class='form-control 'name='iname' value=".$row['initial_name']." disabled>";
	echo"<br>";
        
	echo "<h5>nic no:</h5>";
	echo "<input type='text' class='form-control' name='nnum' value=".$row['nic_no']." disabled>";
	echo"<br>";
        
	echo "<h5>Email:</h5>";
	echo "<input type='text'  class='form-control' name='email' value=".$row['email']." disabled>";
	echo"<br>";
        
	echo "<h5>gender:</h5>";
	echo "<input type='text'  class='form-control' name='gend' value=".$row['gender']." disabled>";
	echo"<br>";
        
	echo "<h5>contact:</h5>";
	echo "<input type='text'  class='form-control' name='co' value=".$row['contact']." disabled>";
    echo"<br>";
        
    echo "<h5>contact:</h5>";
	echo "<input type='text'  class='form-control' name='con' value=".$row['contact_1']." disabled>";
    echo"<br>";
        
     echo "<h5>hiegher education:</h5>";
	echo "<input type='text'  class='form-control' name='he' value=".$row['hiegher_edu']." disabled>";
    echo"<br>";    
        
    echo "<h5>working expirence:</h5>";
	echo "<input type='text'  class='form-control' name='we' value=".$row['wexpirience']." disabled>";
    echo"<br>";
        
    echo "<h5>about working expirience:</h5>";
	echo "<input type='text'  class='form-control' name='awe' value=".$row['abwexpirience']." disabled>";
    echo"<br>";    
    echo"<br>";  
        
        echo"</div>";
        
          echo " <input type='button' onclick='window.location=\"action.php?name={$row['initial_name']}\"' class='btn btn-primary' id='btn' name='delete' value='Delete'>";
            
           
        
    }
    
    echo"</form>";
    
  
    
    ?>
    
    </body>


</html>