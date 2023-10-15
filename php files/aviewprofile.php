<?php
session_start();

$server = "localhost" ;
$username = "root" ;
$password = "" ;
$db = 'csnwp' ;

$con = mysqli_connect($server,$username,$password,$db);

if($con)
{
    ?> 
    <script>
    // alert('Connection Successful')
    </script>
    <?php
}

else{
    echo "No Connection" ;
}

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="http://localhost/project/css files/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        
        .first{
    background-color: rgb(7, 0, 0);
}

.logo{
    width : 220px ;
    height: 250px ;
    margin-top : -250px;

}

#line1{
    text-align: center;
    text-transform: uppercase;
    color: aliceblue;
    padding-top: 20px ;
    font-size: 25px;
    font-style: italic;
    letter-spacing: 2px;
}

#line2{
    text-transform: uppercase;
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    color: greenyellow;
    margin-left: 150px;
    letter-spacing: 2px;
}

#line3{
    margin-top: -20px;
    text-transform: uppercase;
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    color: greenyellow;
    letter-spacing: 2px;
}

.carousel-item{
    width: 1000px;
    height: 1000px;
    margin-left: 200px;
    overflow: hidden;
}

#line4{
    text-align: center;
    color: aliceblue;
    font-size: 25px;
    letter-spacing: 2px;
    margin-bottom: 10px;
}



.nav-item{
    font-size: 22px;
    text-align: center;
    margin-left: 140px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.nav-link{
    color: aliceblue!important;
}

.nav-link:hover{
    color: greenyellow!important ;
}

.container-fluid{
    margin-top: -8px;
    margin-bottom: -8px ;
    background-color: rgb(168, 0, 0);
}

.dropdown-menu{
    font-size: 20px;
}


/* footer */
.foot{
    margin-top: 200px;
    height: 40px;
    border: 2px solid black;
    background-color: rgb(147, 201, 245)  ;
    padding-top: 5px;
    padding-bottom: 100px ;
}

.last{
    border: 2px solid black ;
    background-color: rgb(63, 42, 168);
    margin-top: 5px;
    margin-left: -1.8px;
    margin-right: -2px;
    height: 200px;
}

.contact{
    display: inline-flex;
    margin-left: 800px;
    margin-right: 170px;
    color: blue;
    font-weight: bold;
    font-size: 30px;
    letter-spacing: 1px;
}

.combine{
    display: flex;    
    list-style: none;

}

.gmail{
    padding-top: 60px;
    padding-right: 100px;
    padding-left: 670px;
    text-align: center;
    font-size: 20px;
}

.link{
    text-decoration: none;
    letter-spacing: 2px;
    color: white;
}

.link:hover{
    color: red ;
    transition: 0.5s ease-in-out;
    
}

body{
  background: linear-gradient(to top,pink,skyblue,pink);
}





    </style>
  </head>
  <body>
   
<body>
    
    <div class="home">
        
        <div class="first">
            <p id="line1">anjuman-e-islam's</p>
            <p id="line2">anjuman institute of information science and management</p>
            <p id="line3">dharwad</p>
            <p id="line4">Affiliated to Karnatak University Dharwad & Recognised by Government of Karnataka</p>
            <img class="logo" src="http://localhost/project/images/college logo.webp" alt="logo">
        </div>
    </div>

    <!-- nav bar -->

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/ahome.php" role="button">
                     home
                  </a>
              </li>
            

              <li class="nav-item">
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/aviewprofile.php" class="btn btn-primary" role="button">
                     Profile
                  </a>
              </li>

              <li class="nav-item">
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/postmanage.php" role="button">
                     Posts
                  </a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ADD Users
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/areg.php">Admin</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/freg.php">Faculty</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/asreg.php">Student</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Manage
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/amanage.php">Admin</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/fmanage.php">Faculty</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/smanage.php">Student</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Notice
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/anotice.php">Upload</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/viewnotice.php">View</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/ahome.php" role="button">
                    Logout
                  </a>
              </li>
              
              
            </ul> 
          </div>
        </div>
      </nav>

<?php
$user = $_SESSION['email'];
$query = "select * from aregister  where aid = '$user'" ;
$result = mysqli_query($con,$query) ;
$rows = mysqli_fetch_assoc($result);
?>

<div class="boxs" style="border: 1px solid grey;border-radius:50px;background-color:aliceblue;margin:50px 445px -100px 600px;padding:0px 0px 20px 0px;width:520px">

                        <?php 
                        if (empty($rows['Image']))
                        {
                            ?>
                            <img src="upload/profile.jpg" alt="" height="300" width="300" style="border:1px solid grey;border-radius:20%;margin-left:100px;margin-top:50px;">
                        <?php 
                        }    

                        else
                        {
                            ?>
                            <img src="upload/<?php echo $rows['Image'];?>" alt="File" height="300" width="300" style="border:1px solid grey;border-radius:20%;margin-left:100px;margin-top:50px;">
                            <?php
                        }
                        ?>  
<p style="margin-top:50px;text-align:center;color:blue;font-size:30px;text-transform:capitalize;font-family:'Times New Roman', Times, serif"><label style="font-size:25px;color: darkred;font-weight:500;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Name : </label> <?php echo $rows['Name'];?><?php ?></p>
<p style="text-align:center;color:blue;font-size:30px;text-transform:capitalize;font-family:'Times New Roman', Times, serif"><label style="font-size:25px;color: darkred;font-weight:500;font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Admin ID : </label> <?php echo $rows['Aid'];?></p>
<p style="margin:20px 0px 0px 50px">
<a style="margin:20px 0px 0px 50px;font-size:15px;" href="http://localhost/project/php files/ahome.php" class="btn btn-danger">Back</a>
<a style="margin:20px 0px 0px 150px;font-size:15px;" href="http://localhost/project/php files/aupdateprofile.php?Aid=<?php echo $rows['Aid']?>" class="btn btn-primary">Update</a></p>
    
<!--  -->
</div>
    

    
    
    
          <!-- Footer -->

    <div class="foot">
      
        <div class="contact">Contact</div>
        
        
        <div class="last">
        <div class="combine">
  
          <div class="gmail">
          <li class="link">+91 8904750727</li>
          <li class="link">principaliism1213@gmail.com</li>
          <li class="link">Anjuman Campus , Opposite BRTS</li>
          <li class="link">Dharwad</li>
          </div>
  
        
        </div>
  
      </div>
      </div>
      
  




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>    