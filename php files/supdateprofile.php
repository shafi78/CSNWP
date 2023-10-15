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




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Update profile</title>
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
    height:550px ;
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

.check-box{
    margin-left:100px ;
    margin-top:20px ;
}

span{
    margin-left:20px ;
    color:rgb(35, 4, 65) ;
}

.submit-btn{
    border: 2px solid greenyellow;
    border-radius: 10px ;
    margin: 20px 0px 0px 140px ;
    padding:5px 20px 5px 20px;
    background-color: green;
    color: white;
    letter-spacing: 2px;
}

.form-reg{
    color: red;
    margin: 50px 500px 0px 600px;
    padding: 10px 0px 10px 120px;
    border: 1px solid red;
    width:500px ;
    border-radius:100px ;
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
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/shome.php" role="button">
                     home
                  </a>
              </li>

              <li class="nav-item">
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/sviewprofile.php" role="button">
                    Profile
                  </a>
              </li>

              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Notes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/sbcanotes.php">BCA</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/sbbanotes.php">BBA</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Time Table
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/scollegetime.php">College</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/sexamtime.php">Exam</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Results
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/siamarks.php">IA Marks</a></li>
                  <li><a class="dropdown-item" href="https://www.kud.ac.in/result-m.php">Kud results</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/sviewnotice.php" role="button">
                    Notice
                  </a>
              </li>

              <li class="nav-item">
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/shome.php" role="button">
                  Logout
                  </a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>
      
      <div class="regs">
        <h1 class="form-reg">Update Profile</h1>
      </div>
      <form class="form-box" action="" method="post" enctype="multipart/form-data">

      <?php

// fetching data from  databases ;

$ids = $_GET['Regno'];

$show_query = " select * from sregister where regno = '$ids'" ;

$show_data = mysqli_query($con,$show_query);

$arrdata = mysqli_fetch_array($show_data);
?>

<!-- updating faculty in fupdateprofile.php -->
<label>Name : </label><input type="text" name="sname"class="input-field name" placeholder="" value="<?php echo $arrdata['Name'];?>" >
                <br><br>
                <label>Reg no : </label><input type="text" name="regno" class="input-field reg" placeholder="" readonly="readonly" value="<?php echo $arrdata['Regno'];?>" >
                <br><br>
                <label>Course : </label>
                <select name="course" class="select1" value="<?php echo $arrdata['Course'];?>"> 
                    
                    <option>-- Select --</option>

                    <option name="bca" value="BCA"
                    <?php

                    if ($arrdata["Course"] == 'BCA')
                    {
                        echo "selected" ;
                    }

                    ?>
                    
                    >BCA</option>
                    
                    
                    <option name="bba" value="BBA"
                    <?php 
                    
                    if ($arrdata["Course"] == 'BBA')
                    {
                        echo "selected" ;
                    }
                    ?>
                    >BBA</option>

                </select>
                <br><br>
                <label>Semister : </label>
                <select class="select2" name="semister" value="<?php echo $arrdata['Semister'];?>">

                    <option name="none">-- Select --</option>
                    <option name="1 semister" value="1 semister"
                    <?php 
                    if ($arrdata["Semister"] == '1 semister')
                    {
                        echo "selected" ;
                    }
                    ?>
                    >1 semister</option>

                    <option name="2 semister" value="2 semister"
                    <?php
                    if ($arrdata["Semister"] == '2 semister')
                    {
                        echo "selected" ;
                    }
                    ?>
                    >2 semister</option>

                    <option name="3 semister" value="3 semister"
                    <?php 
                    if ($arrdata['Semister'] == '3 semister')
                    {
                        echo "selected" ;
                    }
                    ?>
                    >3 semister</option>

                    <option name="4 semister" value="4 semister"
                    <?php
                    if ($arrdata['Semister'] == '4 semister')
                    {
                        echo "selected" ;
                    }
                    ?>
                    >4 semister</option>

                    <option name="5 semister" value="5 semister"
                    <?php
                    if ($arrdata["Semister"] == '5 semister')
                    {
                        echo "selected" ;
                    }
                    ?>
                    >5 semister</option>
                    <option name="6 semister" value="6 semister"
                    <?php
                    if ($arrdata["Semister"] == '6 semister')
                    {
                        echo "selected" ;
                    }
                    ?>
                    >6 semister</option>

                    <option name="7 semister" value="7 semister"
                    <?php 
                    if ($arrdata["Semister"] == '7 semister')
                    {
                        echo "selected" ;
                    }
                    ?>
                    >7 semister</option>

                    <option name="8 semister" value="8 semister"
                    <?php
                    if ($arrdata["Semister"] == '8 semister')
                    {
                        echo "selected" ;
                    }
                    ?>
                    >8 semister</option>

                    
                </select>
                <br><br>
                <label>Email : </label><input type="email" name="email" class="input-field email" placeholder="" value="<?php echo $arrdata['Email'];?>" >
                <br><br>
                <label>Password : </label><input type="password" name="password" class="input-field password" placeholder="" value="<?php echo $arrdata['Password'];?>" >
                <br><br>
                <label>Profile :</label><input type="file" name="img" class="input-field profile" placeholder="" value="<?php echo $arrdata['Image'];?>" >
                <br><br>
                <button type="submit" class="submit-btn" name="submit">Update</button>
            </form>
    

<?php
if(isset($_POST['submit']))
{
    $idupdate = $_GET['Regno'] ;
    $sname = $_POST['sname'] ;
    $regno = $_POST['regno'] ;
    $course = $_POST['course'] ;
    $semister = $_POST['semister'];
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    $img = $_FILES['img']['name'] ;



        

            $tmp_name = $_FILES['img']['tmp_name'];
            $uploadDir = "upload/";
            move_uploaded_file($tmp_name,$uploadDir.$img);
            
        

        $updatequery = " update sregister set Name='$sname' , Regno='$regno' , Course='$course',Semister='$semister', Email='$email' , Password='$password' , Image='$img' where Regno='$idupdate'" ;
        $res = mysqli_query($con,$updatequery);

    if ($res)
    {
        ?>
       
       <script>
            alert("Updated Successfully");
            location.replace("sviewprofile.php");
        </script>
       
       <?php
    }

    else{
        ?>
        <script>
            alert("Update Failed") ;
        </script>
        <?php
    }
}
?>
             
    
    
            
    
    
    
    
    
    
    
    
    
    
    
    
    
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

