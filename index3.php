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
<title>Don3</title>
    <link rel="stylesheet" type="text/css" href="donate.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="donate.css">
     <link rel="stylesheet" type="text/css" href="Resourses/boostrap/bootstrap.min.css">
    <link  href="Resourses/boostrap/bootstrap.css">
     <script type="text/javascript" src="Resourses/boostrap/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
    <script src="Resourses/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Resourses/js/bootstrap.js"></script>
    
    
      <style>
* {
  box-sizing: border-box;
}

input[type=text],[type=email],[type=password],[type=date],[type=radio],[type=number],[type=tel], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}


.container {
  border-radius: 25px;
  background-color: gray;
   width: 67%;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
           
               
</style>
    
    
    
    </head>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
               <a href="" class="navbar-brand" style="font-size:30px">Gramodaya</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
               
               <div class="collapse navbar-collapse justify-content-center" id="new">
               <ul class="navbar-nav">
               
               <li class="nav-item"><a href="home2.php" class="nav-link">Home</a></li>
               <li class="nav-item"><a href="helpdesk.php" class="nav-link">Help Desk</a></li>
               <li class="nav-item active"><a href="donation.php" class="nav-link">Donations</a></li>
               <li class="nav-item"><a href="comment.php" class="nav-link">Comments</a></li>
               <li class="nav-item"><a href="logout.php" class="nav-link" onclick="return confirm('are you sure?')">log out</a></li>
               </ul>
               </div>
            </nav>
    
    <body id="three">
        
        <?php
        if(isset($_POST['submit'])){
        $dbServername = "localhost";
        $dbUsername = "id11488282_root";
        $dbPassword = "123456";
        $dbName = "id11488282_foundation"; 
            
        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
            
            $dname = $conn->real_escape_string($_POST['Fname']);
            $amount = $conn->real_escape_string($_POST['bdam']);
            
            $qry = "INSERT INTO bank_donation( bdname, bdamou) VALUES('$dname','$amount')";
            $save = mysqli_query($conn,$qry);
            
            if($save){
                echo"<script>alert('submition is complete.');</script>";
            }
            else{
                echo"<script>alert('submotion is incomplete.submit again!!!');</script>";
            }
        }
        ?>
        
        <div class="row">
        <h1>Bank Donation Here......</h1>
        </div>
            
            <div class="container">
               
        <form method="post" action="">
            
             <div class="row">
            <h2>GRAMODHAYA Donation BOC Bank Account Number:-</h2>
            <h2>00135223</h2>
                </div>
            
            <div class="row">
      <div class="col-25">
        <label for="fname">Donater Name :</label>
      </div>
      <div class="col-75">
          <input type="text" name="Fname" 
            placeholder="Enter User_Name" required>
      </div>
    </div>
            
             <div class="row">
      <div class="col-25">
        <label for="fname"> Amount :</label>
      </div>
      <div class="col-75">
          <input type="number" name="bdam" 
            placeholder="Enter Amount.00(Lk.Rs)" required max="100000" min="1000">
      </div>
    </div>
         <br>   
            
             
    <div class="form-group text-center">
            
           <input class="form-control btn btn-primary" type="submit" name="submit" value="submit" style="width: 50%">
            </div> 
            
    <div class="form-group text-center">
               
                 <input class="form-control btn btn-primary" type="reset"  value="reset" style="width: 50%;">
                
            </div>
            
            
        </form>
        </div>    
    <script type="text/javascript" src="Resourses/js/jquery-3.3.1.min.js"></script>
    </body>

</html>