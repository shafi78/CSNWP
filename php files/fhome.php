<?php

session_start();

if ($_SESSION['email'])
{
}

else{
  header("location: home.php");
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faculty Home</title>
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
    margin-bottom: -10px;
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
    margin-top: 100px;
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

.post{ 
  width:600px;
  height:204px;
  margin:50px 0px 0px 600px ;
}

.simg{
  width: 250px;
  border: 1px solid black;
  border-radius: 100px ;
  margin: 10px 0px 0px 130px;
}

textarea{
  width: 500px;
  height: 170px;
  margin-top: 10px;
  padding: 20px;
  text-transform: capitalize;
}

.postsub{
  margin: -78px 0px 0px 505px;
  width: 80px ;
}

::placeholder{
  text-align: center;
}

body{
  background: linear-gradient(to top,pink,skyblue,pink);
}

.uname{
  margin: 100px 0px 0px 650px;
  text-transform: capitalize;
  border: 1px solid blueviolet;
  width: 400px;
  padding: 5px;
  text-align: center;
  background-color:azure;
  color: blue;
  font-weight: 500;
  font-size: 18px;
  letter-spacing: 1px;
  word-spacing: 5px;
}

.postimg{
  margin: 0px 0px 0px 650px;
  height: 400px;
  width: 400px;
  border: 1px solid blueviolet ;
}

.posttext{
  border: 1px solid blueviolet;
  margin: 0px 0px 0px 650px;
  width: 400px;
  padding: 25px;
  text-align: center;
  overflow: auto ;
  background-color: white;
  text-transform: capitalize;
}

.timing{
  /* border: 1px solid black; */
  width: 90px;
  font-size: 9px;
  margin: -30px 0px 0px 970px;
  color: brown;
  letter-spacing: 1px;
  text-align: center;
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
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/fhome.php" role="button">
                     home
                  </a>
              </li>
            

              <li class="nav-item">
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/fviewprofile.php" class="btn btn-primary" role="button">
                     Profile
                  </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Notes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/bcanotes.php">BCA</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/bbanotes.php">BBA</a></li>
                </ul>
              </li>

              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Time table
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/collegetime.php">College</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/examtime.php">Exam</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Results
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/iamarks.php">IA Marks</a></li>
                </ul>
              </li>


              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Notice
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localhost/project/php files/fnotice.php">Upload</a></li>
                  <li><a class="dropdown-item" href="http://localhost/project/php files/fviewnotice.php">View</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/slogout.php" role="button">
                    Logout
                  </a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>



            
      <!-- Post Box -->


      <form action="" method="post" enctype="multipart/form-data">
      
      <div class="post" >
      <input type="file" name="post_img"  class="simg">

      <textarea name="post_text" id="" cols="50" rows="6" placeholder="Post text or Image"></textarea>

      <button type="submit" class="btn btn-primary postsub" name="submit">Post</button>

      </div>
     
    </form>

    

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
  
$user_id = $_SESSION['email'];
$user_name = $_SESSION['fname'];

if(isset($_POST['submit']))
{

    $post_text = $_POST['post_text'] ;
    $post_img = $_FILES['post_img']['name'] ;

    $tmp_name = $_FILES['post_img']['tmp_name'];
    $uploadDir = "upload/";
    move_uploaded_file($tmp_name,$uploadDir.$post_img);

    if (empty($post_img) && empty($post_text))
    {
      ?>
      <script>
        alert("Type Something to post !");
      </script>
      <?php
    }

    else
    {

  


    $insertquery = "INSERT into posts(user_id,user_name,post_text,post_img) values ('$user_id','$user_name','$post_text','$post_img')" ;
    
    $res = mysqli_query($con,$insertquery);

    if ($res && (!empty($post_img)) || (!empty($post_text)))
    {
        ?>
       
       <script>
            alert("Posted Successfully");
            location.replace("fhome.php");
        </script>
       
       <?php
    }
    
    else{
      ?>
        <script>
          alert("Post Failed") ;
          </script>
        <?php
    }

  }
  }
  ?>


<?php


$query =  "SELECT * from posts order by id desc " ;

$result = mysqli_query($con,$query);




while ($rows = mysqli_fetch_assoc($result))
{
  ?>
  
  <p class="uname"><?php echo $rows['user_name']."<br>";
  ?></p>
  
  <?php if(empty($rows['post_img'])){
    ?>
       <img src="upload/profile.jpg" alt="" width="20" height="20" style="display: none;">
    <?php
    
  }

    else {
    ?>

        <a href="upload/<?php echo $rows['post_img']?>"><img class="postimg" src="upload/<?php echo $rows['post_img']?>" alt="File" height="200" width="250"></a>
    <?php 
}

 ?> 

<p class="posttext"><?php echo $rows['post_text']."<br><br>" ; ?></p>
<p class="timing"><?php echo $rows['created_at'];?></p>
  
  <?php
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