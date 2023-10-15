<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>President's message</title>
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
    margin-bottom: -5px;
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


.about{
    text-align: center;
    background-image: url("http://localhost/project/images/College\ Photo-min.webp");
    filter: brightness(20%);
    background-repeat: no-repeat;
    background-size: 100%;
    letter-spacing: 1px;
    padding: 100px;
    margin: 0px 10px 10px 10px;
}

h1{
    text-align: center;
    color: white;
    filter: brightness(100%);
    font-size: 70px;
    position: relative;
    top: -150px;
    text-shadow: 0px 0px 10px  blue;
}

.clg{
  border: 1px solid #999;
  width: 500px;
  height: 500px;
  margin-left: 680px;
  margin-top: -50px;
  box-shadow: 10px 10px 20px black;
}

.paragp{
  border: 2px solid rgb(255, 221, 177);
  background-color: rgb(255, 250, 244);
  border-radius: 30px;
  font-size:20px ;
  padding: 50px;
  margin-top: 50px;
  margin-left: 100px;
  margin-right: 100px;
  margin-bottom: 50px;
  letter-spacing: 2px;
  color: rgb(26, 13, 75);
}

.pres{
    width: 500px;
    border: 1px solid black;
    border-radius: 10px;
    margin-left: 680px;
    background-color: white;
    margin-top: 50px;
    font-size: 25px;
    letter-spacing: 1px;
    padding-left: 120px;
    padding-top: 10px;
    padding-bottom: 10px;
    color: blue;
    background-color: rgb(207, 247, 247);
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


      <div class="about">
      </div>
      
      <h1>President's Message</h1>

          <img class="clg" src="http://localhost/project/images/president.webp" alt="college photo">
          <p class="pres">Janab Iqbal K Jamadar</p>

          <div class="paragp">
            <p>I am extremely happy to welcome new students to the hub of knowledge. We are one of the pioneer educational institutions. We have been catering to the needs of various sections of the society in all walks of life since 1938.</p>
            <br>
            <p>We entered the field of management and computer education with the establishment of Anjuman Institute of Information Science and Management, Dharwad, in the year 1996. I proudly state that Anjuman Institute of Information Science and Management has occupied a unique place among all colleges of Management in the twin cities of Hubli-Dharwad. This is attributed to the dynamic leadership of the Principal along with his team of highly qualified and experienced faculty.</p>
            <br>
            <p>Appreciating the dynamic nature of the environment and global change, the Board of Management under my stewardship is committed in providing the best of the infrastructure and support to take the institution in the new hyper competitive era which in turn leads to global peace and prosperity.

                I whole heartedly invite you to come and experience the innovative learning with strong ethical and moral values.</p>
          </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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