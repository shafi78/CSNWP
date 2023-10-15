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



$query = " SELECT * from sregister " ;

$result = mysqli_query($con,$query);

?>




<!DOCTYPE html>

<html>

<head>
    <title>Manage Student</title>
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
    margin-top: 140px;
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
        padding: 20px;
    }


    td{
        
        height: 120px;
        width: 120px;
        border: 1px solid black;
        text-align: center;
        background: white;
    }

    .mang{
        border: 1px solid red;
        text-align: center;
        width: 500px;
        margin:70px 0px 30px 650px;
        color: red;
        padding: 20px;
        background:antiquewhite;
        font-size:50px ;
        word-spacing: 5px;
    }

    .capital{
        text-transform: capitalize;
    }

    .mypost{
        height: 120px;
        width: 180px;
    }

    body{
        background: linear-gradient(to top,pink,skyblue,pink);
    }

    
    .search{
        position: relative;
        top: -100px;
        left: 1300px;
        height: 40px;
        padding: 10px ;
        width: 300px;
        border-radius: 10px;
        border-style: none;
        border: 1px solid blueviolet;
    }

    .search-btn{
        position: relative;
        top: -103px;
        left: 1310px;
        border-radius: 10px;
    }

    .search-tbl{
        margin-bottom: 200px;
        margin-top: -100px;
    }

    .nul{
  font-size:100px ;
  text-align:center ;
  margin:100px 0px 0px -150px ;
  color:rgb(123, 05, 226);
}


</style>
</head>
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
                <a class="nav-link dropdown-item" href="http://localhost/project/php files/aprofile.php" role="button">
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
    
<div class="main-div">
    <h1 class="mang">Manage Student's</h1>

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

    <form action="" method="post">
        <input type="text" name="search" class="search">
        <input type="submit" name="submit" value="Search" class="search-btn btn btn-primary">
    </form>

<?php

    if (isset($_POST['submit']))
    {
        $str = $_POST['search'] ;
        

        $squery = "select * from sregister where Name Like '%$str%' or Regno Like '%$str%'";
        $myquery = mysqli_query($con,$squery);

       

        if ($row = mysqli_fetch_assoc($myquery))
        {
            ?>
            <br><br><br>
            <table align="center"  width="1200px" class="search-tbl">
            <tr>
                        <th>Name</th>
                        <th>Regno</th>
                        <th>Course</th>
                        <th>Semister</th>
                        <th>Email</th>
                        <th>Profile</th>
                        <th colspan="2">Operation</th>
                    </tr>

                    <tr>
                        <td class="capital"><?php echo $row['Name']; ?></td>
                        <td class="regupp"><?php echo $row['Regno']; ?></td>
                        <td><?php echo $row['Course']; ?></td>
                        <td class="capital"><?php echo $row['Semister']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td>
                        <?php 
                        if (empty($row['Image']))
                        {
                            ?>
                            <img src="upload/profile.jpg" alt="" width="80" height="80">
                        <?php 
                        }    

                        else
                        {
                            ?>
                            <img src="upload/<?php echo $row['Image']?>" alt="File" height="80" width="80">
                            <?php
                        }
                        ?></td>
                        <td><a href="http://localhost/project/php files/supdate.php?Regno=<?php echo $row['Regno']?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="http://localhost/project/php files/sdelete.php?Regno=<?php echo $row['Regno']?>" class="btn btn-danger">Delete</a></td>
                        
                    </tr>


            </table>
            <?php
        }
        else
        {
            ?>
            <script>
                alert("Records Not Found");
            </script>
            <?php
        }
        
    }
?>



    <div class="center-div">
        <div class="table-responsive">
            <table align="center"  width="1500px">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Regno</th>
                        <th>Course</th>
                        <th>Semister</th>
                        <th>Email</th>
                        <th>Profile</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    while ($rows = mysqli_fetch_assoc($result))
                    {
                        ?>
                    <tr>
                        <td class="capital"><?php echo $rows['Name']; ?></td>
                        <td class="regupp"><?php echo $rows['Regno']; ?></td>
                        <td><?php echo $rows['Course']; ?></td>
                        <td class="capital"><?php echo $rows['Semister']; ?></td>
                        <td><?php echo $rows['Email']; ?></td>
                        <td>
                        <?php 
                        if (empty($rows['Image']))
                        {
                            ?>
                            <img src="upload/profile.jpg" alt="" width="80" height="80">
                        <?php 
                        }    

                        else
                        {
                            ?>
                            <img src="upload/<?php echo $rows['Image']?>" alt="File" height="80" width="80">
                            <?php
                        }
                        ?></td>
                        <td><a href="http://localhost/project/php files/supdate.php?Regno=<?php echo $rows['Regno']?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="http://localhost/project/php files/sdelete.php?Regno=<?php echo $rows['Regno']?>" class="btn btn-danger">Delete</a></td>
                        
                    </tr>
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