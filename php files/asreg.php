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
    <title>Student Registration Page</title>
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
    margin: 50px 0px 50px 650px ; 
    width: 500px ;
    height:570px ;
    padding: 50px 0px 0px 50px ;
    background-color: rgb(237, 252, 231);
}

label{
    color:rgb(35, 4, 65) ;
    font-weight:500 ;
    font-size:18px ;
    margin-left:20px; 

}


.input-field{
    border: 1px solid black ;
    color:blue ;
    padding: 3px 0px 3px 50px ;
    border-radius:10px ;
}

.name{
    text-transform: capitalize;
    margin-left: 50px ;
}

.reg{
    margin-left: 40px ;
    text-transform:uppercase;
}

.select1{
    color: blue;
    width:235px ;
    margin-left:37px ;
    padding-top:5px;
    padding-bottom:5px;
    border-radius: 10px;
    border: 1px solid black;
}

option{
    text-align:center ;
}

.select2{
    color: blue;
    width:235px ;
    margin-left:23px ;
    text-align:center ;
    padding-top:5px;
    padding-bottom:5px;
    border-radius: 10px;
    border: 1px solid black;
}

.email{
    margin-left:54px ;

}

.password{
    margin-left:22px ;
}

.profile{
    font-size: 11px;
    margin-left: 45px;
    background-color: white;
    padding: 4px 0px 4px 30px;
}



span{
    margin-left:20px ;
    color:rgb(35, 4, 65) ;
}

.submit-btn{
    border: 2px solid greenyellow;
    border-radius: 10px ;
    margin: 30px 0px 0px 130px ;
    padding:5px 20px 5px 20px;
    background-color: green;
    color: white;
    letter-spacing: 2px;
}

.form-reg{
    color: red;
    margin: 50px 500px 0px 670px;
    padding: 10px 0px 10px 60px;
    border: 1px solid red;
    width:450px ;
    border-radius:100px ;
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
                <label>Name : </label><input type="text" name="sname"class="input-field name" placeholder="" required>
                <br><br>
                <label>Reg no : </label><input type="text" name="regno" class="input-field reg" placeholder="" required>
                <br><br>
                <label>Course : </label>
                <select name="course" class="select1"> 
                    
                    <option name="none">-- Select --</option>
                    <option name="bca" >BCA</option>
                    <option name="bba" >BBA</option>
                </select>
                <br><br>
                <label>Semister : </label>
                <select class="select2" name="semister">

                    <option name="none">-- Select --</option>
                    <option name="1 semister">1 semister</option>
                    <option name="2 semister">2 semister</option>
                    <option name="3 semister">3 semister</option>
                    <option name="4 semister">4 semister</option>
                    <option name="5 semister">5 semister</option>
                    <option name="6 semister">6 semister</option>
                    <option name="7 semister">7 semister</option>
                    <option name="8 semister">8 semister</option>
                    
                </select>
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
    $sname = $_POST['sname'] ;
    $regno = $_POST['regno'] ;
    $course = $_POST['course'];
    $semister = $_POST['semister'];
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    $img = $_FILES['img']['name'] ;

    $tmp_name = $_FILES['img']['tmp_name'];
    $uploadDir = "upload/";
    move_uploaded_file($tmp_name,$uploadDir.$img);


    $insertquery = "INSERT into sregister(Name,Regno,Course,Semister,Email,Password,Image) values ('$sname','$regno','$course','$semister','$email','$password','$img')" ;
    
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

