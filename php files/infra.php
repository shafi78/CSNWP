<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infrastructure</title>
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
    margin-top: -300px;
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

.lib{
    border: 1px solid rgb(0, 255, 234);
    width: 650px;
    padding: 50px;
    margin-left: 100px;
    margin-top:100px;
    border-radius: 200px; 
    border-bottom-left-radius: unset;
    border-top-right-radius: unset;   
    background-color: rgb(223, 250, 255);
}

h2{
    text-align: center;
    font-size: 70px;
    padding-bottom: 30px;
    color: red;
    text-shadow: 0px 0px 5px grey;
}

.para{
    letter-spacing: 1px;
    text-align: left;
    color: rgb(50, 49, 49);
}

.libimg{
    position: relative;
    top: -700px;
    margin-left: 850px;
    margin-right: 10px;
}


.lab{
    border: 1px solid rgb(0, 255, 234);
    margin-top: -450px;
    width: 650px;
    padding: 50px;
    margin-left: 100px;
    border-radius: 200px; 
    border-bottom-left-radius: unset;
    border-top-right-radius: unset;   
    background-color: rgb(223, 250, 255);
    margin-bottom: -350px;
}

h2{
    text-align: center;
    font-size: 70px;
    padding-bottom: 30px;
    color: red;
    text-shadow: 0px 0px 5px grey;
}

.para{
    letter-spacing: 1px;
    text-align: left;
    color: rgb(50, 49, 49);
}

.labimg{
    position: relative;
    top: -350px;
    margin-left: 850px;
    margin-right: 10px;
}

img{
    width: 400px;
    height: 300px;
    margin: 50px;
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
      
      <h1>Infrastructure</h1>

      <div class="lib">

          <h2>Library</h2>
          <p class="para"><b>"A Library out ranks any other one thing a community can do to benefit its people. It is a never failing spring in the desert. "</b></p>
          <p class="para" style="text-align: right;">- Andrew Carriege.</p>
          
          <br>

          <p class="para">The library at the college is one of the finest in the city. The excellent infrastructure with air conditioned facility provides perfect atmosphere for reading. The calm and scenery surrounding enhances the mood to study. The newly installed library software will help further to take library services to the next level.The library has rich treasure of books for both BBA and BCA courses. There are adequate number of books to cater to the requirements of both the courses. Time and again additions are made to this treasure by buying new updated versions of the prescribed books as well as new books.</p>
          
        </div>

        <div class="libimg">
            <img src="http://localhost/project/images/Lib1.webp" alt="lib1">
            <img src="http://localhost/project/images/Lib2.webp" alt="lib2">
            <img src="http://localhost/project/images/Lib3.webp" alt="lib3">
            <img src="http://localhost/project/images/Lib4.webp" alt="lib4">
        </div>

    <div class="lab">

        <h2>Computer Lab</h2>
        <p class="para"><b>"Computer science inverts the normal. In normal science, you're given a world, and your job is to find out the rules. In computer Science, you give the computer the rules, and it creates the world."</b></p>
        
        <br>

        <p class="para">A computer lab is a place where each student is keen to learn how to put into practice the programs learnt in a theory class! The state-of-art facility at the computer lab of our college creates an excellent atmosphere to practice lab programs. The air conditioned lab offers even more comfort to carry out lab assignments. The 1:1 ratio of computer to student gives sufficient scope of practice for each student. The Wi-Fi facility adds to the access of net whenever necessary. Therefore, the computer lab facility of the college is one of its kind in the city.</p>
        
      </div>

      <div class="labimg">
          <img src="http://localhost/project/images/Lab1.webp" alt="lab1">
          <img src="http://localhost/project/images/Lab2.webp" alt="lab2">
          <img src="http://localhost/project/images/Lab3.webp" alt="lab3">
          <img src="http://localhost/project/images/Lab4.webp" alt="lab4">
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