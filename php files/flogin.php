<?php

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

<?php 

session_start();

if (isset($_POST['fname']))
{
    $fname=$_POST['fname'] ;
    $fid=$_POST['fid'] ;
    $password=$_POST['password'] ;

    $sql = "SELECT * from fregister where name='$fname' AND fid='$fid' AND password='$password' limit 1" ;

    $result = mysqli_query($con,$sql);

    if (mysqli_num_rows($result)==1)
    {
      $_SESSION['email'] = $fid ;
      $_SESSION['fname'] = $fname ;
        ?>
        <script>
            alert("Login Successful !");
            location.replace("fhome.php");
        </script>
        
        <?php
        exit();
    }

    else{
        ?>

        <script>
            alert("Incorrect Username or Password") ;
        </script>

        <?php
    }
}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faculty Login Page</title>
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
    margin-bottom: -10px ;
    background-color: rgb(168, 0, 0);
}

.dropdown-menu{
    font-size: 20px;
}


/* footer */
.foot{
    margin-top: 20px;
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
    margin-left: 260px;
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
    padding-left: 150px;
    text-align: center;
    font-size: 20px;
}

.gallery{
    padding-top: 60px;
    padding-left: 230px;
    text-align: center;
    padding-right: 250px;
    font-size: 20px;
}

.stud{
    padding-top: 60px;
    padding-left: 240px;
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

/* Form Design */

.form-box{
    border: 1px solid rgb(7, 170, 246) ;
    border-radius: 70px;
    margin: 70px 0px 50px 700px ; 
    width: 460px ;
    height:400px ;
    padding: 70px 0px 0px 50px ;
    background-color: rgb(237, 252, 231);
    font-size:18px ;
}

label{
    color:rgb(35, 4, 65) ;
    font-weight:500 ;

}


.input-field{
    border: 1px solid black ;
    color:blue ;
    padding: 3px 0px 3px 50px ;
    border-radius:10px ;
}

.name{
    text-transform: capitalize;
    margin-left: 55px ;
}

.reg{
    margin-left: 30px ;
    text-transform:uppercase;
}


.password{
    margin-left:30px ;
}


.submit-btn{
    border: 2px solid greenyellow;
    border-radius: 10px ;
    margin: 20px 0px 0px 120px ;
    padding:5px 20px 5px 20px;
    background-color: green;
    letter-spacing: 2px;
    color: white;
}

.form-reg{
    color: red;
    margin: 50px 500px 0px 700px;
    padding: 10px 0px 10px 120px;
    border: 1px solid red;
    border-radius: 50px;
    width:450px ;
    background-color: rgb(253, 245, 236);
}

body{
  background: linear-gradient(to top,pink,skyblue,pink,white);
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
              <a class="nav-link dropdown-item" href="http://localhost/project/php files/home.php" role="button">
                   home
                </a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/project/php files/about.php">About Aiism</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/php files/vision.php">visions & mission</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/php files/infra.php">infrastructure</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Administration
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/project/php files/principal.php">principal's message</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/php files/president.php">president's message</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/php files/bearers.php">office bearers</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                courses
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/project/php files/bca.php">bachelor of computer application</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/php files/bba.php">bachelor of business administration</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                faculty
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/project/php files/aboutfac.php">About Faculty</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/php files/flogin.php">Faculty Login</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/php files/alogin.php">Admin Login</a></li>
              </ul>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                student
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="http://localhost/project/php files/gallery.php">Gallery</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/php files/slogin.php">Login</a></li>
                <li><a class="dropdown-item" href="http://localhost/project/php files/sreg.php">Register</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>
      
      <div class="regs">
        <h1 class="form-reg">Login Form</h1>
      </div>
      <form class="form-box" action="" method="post">
                <label>Name : </label><input type="text" name="fname"class="input-field name" placeholder="" required>
                <br><br>
                <label>Faculty Id : </label><input type="text" name="fid" class="input-field reg" placeholder="" required>
                <br><br>
                <label>Password :</label><input type="password" name="password" class="input-field password" placeholder="" required>
                <br><br>
                <button type="submit" class="submit-btn" name="submit">Login</button>

            </form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
          <!-- Footer -->

    <div class="foot">
      
        <div class="contact">Contact</div>
        <div class="contact">Quick Access</div>
        <div class="contact">Students Corner</div>
        
        
        <div class="last">
        <div class="combine">
  
          <div class="gmail">
          <li class="link">+91 8904750727</li>
          <li class="link">principaliism1213@gmail.com</li>
          <li class="link">Anjuman Campus , Opposite BRTS</li>
          <li class="link">Dharwad</li>
          </div>
  
         <div class="gallery">
          <li><a class="link" href="#">BCA Course</a></li>
          <li><a class="link" href="#">BBA Course</a></li>
          <li><a class="link" href="#">Gallery</a></li>
         </div>
  
         <div class="stud">
          <li><a class="link" href="#">Youtube Channel</a></li>
          <li><a class="link" href="#">Results</a></li>
          <li><a class="link" href="#">Notifications</a></li>
         </div>
        
        </div>
  
      </div>
      </div>
      
  




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      
      </body> 

