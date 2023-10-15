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
    alert('Connection Successful')
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
    <title>Admin Registration Page</title>
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
    margin-top: 208px;
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

/* Form Design */

.form-box{
    border: 1px solid rgb(7, 170, 246) ;
    border-radius: 70px;
    margin: 50px 0px 50px 600px ; 
    width: 500px ;
    height:450px ;
    padding: 50px 0px 0px 50px ;
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
    margin-left: 60px ;
}

.reg{
    margin-left: 30px ;
    text-transform:uppercase;
}

.email{
    margin-left:65px ;

}

.password{
    margin-left:33px ;
}



.profile{
    font-size: 11px;
    margin-left: 52px;
    background-color: white;
    padding: 4px 20px 4px 30px;
}

.submit-btn{
    border: 2px solid greenyellow;
    border-radius: 10px ;
    margin: 20px 0px 0px 130px ;
    padding:5px 20px 5px 20px;
    background-color: green;
    letter-spacing: 2px;
    color: white;
}

.form-reg{
    width:500px ;
    color: red;
    margin: 50px 500px 0px 600px;
    padding: 10px 0px 10px 120px;
    border: 1px solid rgb(253, 167, 167);
    background-color: rgb(253, 245, 236);
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
      
      <div class="regs">
        <h1 class="form-reg">Registration Form</h1>
      </div>
      <form class="form-box" action="" method="post" enctype="multipart/form-data">
                <label>Name : </label><input type="text" name="aname"class="input-field name" placeholder="" required>
                <br><br>
                <label>Admin Id : </label><input type="text" name="aid" class="input-field reg" placeholder="" required>
                <br><br>
                <label>Email : </label><input type="email" name="email" class="input-field email" placeholder="" required>
                <br><br>
                <label>Password :</label><input type="password" name="password" class="input-field password" placeholder="" required>
                <br><br>
                <label>Profile :</label><input type="file" name="img" class="input-field profile" placeholder="" >
                <br><br>
                <button type="submit" class="submit-btn" name="submit">Register</button>
            </form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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

<?php

if(isset($_POST['submit']))
{
    $aname = $_POST['aname'] ;
    $aid = $_POST['aid'] ;
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    $img = $_FILES['img']['name'] ;

    $tmp_name = $_FILES['img']['tmp_name'];
    $uploadDir = "upload/";
    move_uploaded_file($tmp_name,$uploadDir.$img);

    

    $insertquery = "INSERT into aregister(Name,Aid,Email,Password,Image) values ('$aname','$aid','$email','$password','$img')" ;
    
    $res = mysqli_query($con,$insertquery);

    if ($res)
    {
        ?>
       
       <script>
            alert("Registered Successfully");
        </script>
       
       <?php
    }

    else{
        ?>
        <script>
            alert("Registration Failed") ;
        </script>
        <?php
    }

}
?>

