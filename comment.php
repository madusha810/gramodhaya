<?php
session_start();
?>
<?php
  if(!isset($_SESSION['username'])){
       echo"<script>window.open('login.php','_self')</script>"; 
  }
?>



<html>
<head>
    <title>Member comment </title>
    <link rel="stylesheet" type="text/css" href="comment.css">
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
               
               <li class="nav-item"><a href="home2.php" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="helpdesk.php" class="nav-link">Help Desk</a></li>
               <li class="nav-item"><a href="donation.php" class="nav-link">Donations</a></li>
               <li class="nav-item active"><a href="comment.php" class="nav-link">Comments</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>

<body id="two">
    
    <?php
    
    if(isset($_POST['post'])){
        $dbServername = "localhost";
        $dbUsername = "id11488282_root";
        $dbPassword = "123456";
        $dbName = "id11488282_foundation"; 
            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
         $cname = $conn->real_escape_string($_POST['Name']);
         $com =  $conn->real_escape_string($_POST['comment']);
        
        $sql = "INSERT INTO comment(uname,comt) VALUES('$cname', '$com')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('comment is succesfully post...');</script>";
        }
        else{
            echo "<script>alert('post is not success.Try again...');</script>";
 }
    }
    
    ?>
    
    <?php
   
    
    
    require 'commentmailer/PHPMailerAutoload.php';
    
    $mail = new PHPMailer;
			$mail->isSMTP();
			$mail->SMTPDebug = 0;
			$mail->Debugoutput = 'html';
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = "np.madushamethsiri81@gmail.com";
			$mail->Password = "0332272333";
			$mail->setFrom('gramodayauwu@gmail.com','New Mail');
			$mail ->AddAddress('np.madushamethsiri81@gmail.com','madusha');
			//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
			$mail->Subject = 'New Comment';
			$mail->Body = "
						new comment
						";
			if (!$mail->send()) {
    			echo "<script>alert('Mail not sent')</script>";
			} 
			else {
   				echo "<script>alert('Mail Sent!')</script>";
				
			}
    
    ?>
    
    
    
    <div class="row">
    <div class="col-md-8 col-md-offset-2" style="margin-left: 15%; margin-top: 1%;">
    
        <h2 id="ad" style="color:black">Admin comments.</h2>
    <div id="adco">
    
    <?php
        $dbServername = "localhost";
        $dbUsername = "id11488282_root";
        $dbPassword = "123456";
        $dbName = "id11488282_foundation";
        
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
        
        $sql ="select * from admin_comment ORDER BY cm_id DESC LIMIT 2";
        
        $result = mysqli_query($conn,$sql);
        
        while($row=mysqli_fetch_array($result)){
            
            $come = $row['adcome'];
            
            echo"
            
                <div id='adc'>
                <h3>$come</h3>
                </div>
        
                <br>
                
            
            
            ";
        }
        ?>
    
    </div>
    
    
    <div class= "one">
        <h1>Left a comment</h1>
        
   
    </div>
    
    <div class="container text-center" id="uc">
        
        <form method="post" action="">
            
            <label><h2>user name:</h2></label>    
            
        <input name="Name" type="text" class="form-control" placeholder="Your Name" required>
            
        <br>
            
            <label><h2>comment:</h2></label>
            
            <textarea name="comment" class="form-control" placeholder="comment" row="6" required></textarea><br>
            
            <input type="submit" name="post" class="form-control btn btn-primary" id="btn" value="POST">
            
        </form>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="Resourses/js/jquery-3.3.1.min.js"></script>
</body>
</html>