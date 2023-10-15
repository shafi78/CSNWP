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




<!DOCTYPE html>

<html>

<head>
    <title>Manage Notice</title>
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



    table{
        border: 1px solid black;
    }

    th{
        border: 2px solid black;
        background-color: antiquewhite;
        text-align: center;
        font-size: 20px;
        color: darkblue;
        letter-spacing: 1px;
        padding: 10px;
    }

    td{
        border: 1px solid black;
        text-align: center;
        padding: 10px;
        background: white;
        

    }

    .mang{
        border: 1px solid red;
        text-align: center;
        width: 300px;
        margin:58px 0px 30px 750px;
        color: red;
        padding: 10px;
        font-size:50px ;
        background-color: rgb(253, 245, 236);
        border: 1px solid rgb(253, 167, 167);

    }

    body{
  background: linear-gradient(to top,pink,skyblue,pink);
}

.nul{
  font-size:100px ;
  text-align:center ;
  margin:100px 0px 0px 0px ;
  color:rgb(123, 05, 226);
}


</style>
</head>


<?php 

if (isset($_POST['submit']))
       {
      
        $myfile = $_FILES['myfile']['name'];
        $tmp_name = $_FILES['myfile']['tmp_name'];
        $uploadDir = "upload/";
        move_uploaded_file($tmp_name,$uploadDir.$myfile);

        $insertquery = "INSERT into anotice(myfile) values ('$myfile')" ;

        $res = mysqli_query($con,$insertquery);

        if ($res && !(empty($myfile)))
        {
            ?>
           
           <script>
                alert("Uploaded Successfully");
            </script>
           
    
              <?php
           
        }
    
        else{
            ?>
            <script>
                alert("Upload Failed / Empty") ;
                location.replace("fnotice.php");
            </script>
            <?php
        }


       }
       ?>

<?php 



    $query = " SELECT * from anotice order by id desc" ;   

    $result = mysqli_query($con,$query);    

?>

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
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/fhome.php" role="button">
                    Logout
                  </a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </nav>



<div class="main-div">
    <h1 class="mang">Notice</h1>
    
    <?php

if (mysqli_num_rows($result)==0)
{
  ?>
  <h1 class="nul">No Records Found</h1>
  <?php
}

else
{
  ?>
    
    
    <div class="center-div">
        <div class="table-responsive">
            <table align="center"  width="1200px">
           
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>View</th>
                        <th>Download</th>
                        <th>Time</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                
                <tbody>
                    
                    <?php 
                        
                        
                        while ($rows = mysqli_fetch_assoc($result))
                        {
                            ?>
                        <tr>
                            <td><?php echo $rows['id']?></td>
                            <td><a href="upload/<?php echo $rows['myfile'];?>" class="btn btn-primary"><?php echo $rows['myfile']?></a></td>
                            <td><a download="<?php echo $rows['myfile'];?>" href="upload/<?php echo $rows['myfile']?>" class="btn btn-success">Download</a></td>
                            <td><?php echo $rows['up_time']?></td>
                            <td><a href="http://localhost/project/php files/fnoticedelete.php?Aid=<?php echo $rows['id'];?>" class="btn btn-primary">Delete</a></td>
                            <?php
                        } 
                        ?>

</tbody>

</table>

</div>
</div>
<?php
}

?>
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
</html>