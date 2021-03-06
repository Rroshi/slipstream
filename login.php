<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en-AL">
    <head>
        <title>Log In</title>
        <link href="/image5.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="height=device-height, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        
<style>

body{
    background-color: #ffffff; 
    padding-top: 1px;
}

.c-form{
    background-color:#ff5733; 
    border-radius: .25rem;
    transition:none;
    border:none;
    color:#ffffff;
    display: block;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
}

label{
    margin-bottom: 0px;
    color:#ff5733;
}

input{
    background-color: #ff5733;
    outline: none;
    border: none;
}

#top{
    font-size: 1px;
    background-color: #050305;
    color: #050305;
}

 ::-webkit-calendar-picker-indicator {
    filter: invert(1);
}

@media only screen and (min-device-width : 360px) and (max-device-width : 460px) {
    .sda{
    margin-left:-36px!important;
}
}

@media only screen and (min-device-width : 310px) and (max-device-width : 359px) {
.sda{
    margin-left:-35px!important;
    font-size:15px;
}
img{
    width:50px!important;
}
}

@media only screen and (min-device-width : 310px) and (max-device-width : 460px) {
.inp{
    min-width: 70%;
}
input[type=radio].rad{
    margin-left: 16%;
}
.dtl{
    min-width: 50%;
}
}

@media only screen and (min-device-width : 460px) and (max-device-width : 580px) {
.inp{
    min-width: 60%;
}
input[type=radio].rad{
    margin-left: 12%;
}
.dtl{
    min-width: 40%;
}
}

@media only screen and (min-device-width : 581px) and (max-device-width : 650px) {
.inp{
    min-width: 50%;
}
input[type=radio].rad{
    margin-left: 13%;
}
.dtl{
    min-width: 35%;
}
}

@media only screen and (min-device-width : 651px) and (max-device-width : 860px) {
.inp{
    min-width: 42%;
}
input[type=radio].rad{
    margin-left: 13%;
}
.dtl{
    min-width: 30%;
}  
}

@media only screen and (min-device-width : 861px) and (max-device-width : 999px) {
.inp{
    min-width: 40%;
}
input[type=radio].rad{
    margin-left: 12%;
}
.dtl{
    min-width: 30%;
}    
}

@media only screen and (min-width : 1000px) and (max-width : 1600px) {
.inp{
    min-width: 30%;
}
input[type=radio].rad{
    margin-left: 8%;
}
.dtl{
    min-width: 20%;
}    
}
a{
    color:#ff5733;
}
a:hover{
    color:#ff5733;
}

span{
    color: #ff5733;
}
</style>

</head>

<body>
    <!-- ################ navbar #################### -->
    <div id="top">.</div>
 <nav id="navbar1" class=" navbar navbar-expand-lg sticky">
     <div class="container">
        <a class="navbar-brand"  href="index.html">
            <img src="/image5.png" title="" alt="" style="width:60px;">
        </a>
        <a href="index.php" class="nav-link" title="Services"><b class="sda"style="margin-left:-22px; margin-top:10px;">Slipstream Trainings</b></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" onclick="myFunction(this)"> 
                <div class="toggler-btn">
                <div class="icon-bar top-bar"></div>
                <div class="icon-bar middle-bar"></div>
                <div class="icon-bar bottom-bar"></div>
                </div>
             </button> 
                
         <div class="collapse navbar-collapse " id="myNavbar" style="text-align: center">
            <ul class="navbar-nav mx-auto" style="list-style-type: none;">
                <li class="nav-item " style="list-style-type: none;">
                  <a href="index.html" class="nav-link" title="Home"><b>Home</b></a>
                </li> 
                <li class="nav-item ">
                  <a href="courses.html" class="nav-link" title="Courses"><b>Courses</b></a>
                </li> 
                <li class="nav-item ">
                  <a href="aboutus.html" class="nav-link" title="About Us"><b>About Us</b></a>
                </li> 
                <li class="nav-item ">
                  <a href="contact.html" class="nav-link" title="Contact"><b>Contact</b></a>
                </li>
           </ul>
             <a href="regjistrimi.php" style="text-decoration: none;">
           <span class="searchh mr-lg-3">
               <i class="fas fa-user" style="color:#ffffff;"></i>&nbsp;<b style="color:#ffffff;">Signup</b>
           </span>
         </a>
         
        <form class="form-inline d-none d-lg-block"></form>
       </div>
    </div>
</nav>
    
    <!-- ################ end of NAVBAR #################### -->
<br>
<br>
<br>
<br>
<br>
<center>
<div class="signup-form">
    <form action="login1.php" method="post" enctype="multipart/form-data">
		<center>
        <h3 style="color:#ff5733;"><b>Log In</b></h3>
        <br>
           <div class="form-group">
                <label for="email"><h6 style="color:#ff5733;"><b>Email</b></h6></label>
                <input id="email" type="email" name="email" autocomplete="off" required="required" class="c-form inp" style="width:25%;">
                </div>
		<div class="form-group">
                  <label for="password"><h6 style="color:#ff5733;"><b>Password</b></h6></label>
                  <input id="password" type="password" name="password" autocomplete="off" required="required" class="c-form inp" style="width:25%;">
                </div>
		<br>
        <input type="submit" name="dergoni" class="btn" style="border: 4px solid #ffffff; color: #ffffff; background-color: #ff5733; font-weight:bold;" value="Login">
        <div class="text-center" style="margin-top:12px; color:#ff5733;">Nuk keni nje account? <a href="regjistrimi.php" style="color:#ff5733; text-decoration:underline;"><b>Klikoni ketu</b></a></div>
    </form>
</div>
</center>

<br>
<br>
<!--########  FOOTER  #########-->
     
<footer style="background-color: #ff5733;">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-5 col-md-12 mb-4">
        <h5 class="mb-2" style="color: #ffffff;">Slipstream Trainings</h5>
        <hr style="height: 2px; width: 200px; display: table-cell; border-width: 0; background-color: #ffffff">
        <p class="text-light" style="margin-top:10px;">
          Empowering your future
        </p>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="" style="color: #ffffff; margin-left:0.5rem;">Na Ndiqni</h5>
        <div class="icon p-2">
            <a href="" title="Faqja zyrtare ne Facebook" class="mr-2px" style="color:#ffffff;"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="" title="Faqja zyrtare ne instagram"  class="mr-2px" style="color:#ffffff;"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="" title="Faqja zyrtare ne Linkedin" class="mr-2px" style="color:#ffffff;"><i class="fab fa-linkedin fa-2x"></i></a>
            <a href="" title="Faqja zyrtare ne Github" class="mr-2px" style="color:#ffffff;"><i class="fab fa-github fa-2x"></i></a>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <h5 class="mb-1" style="color: #ffffff;">Orari</h5>
        <table class="table" style="color: #ffffff; border-color: #666;">
          <tbody>
            <tr>
              <td>Hene - Premte:</td>
              <td>08:00 - 21:00</td>
            </tr>
            <tr>
              <td>Shtune - Diele:</td>
              <td>08:00 - 13:00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="text-center p-2 text-light" style="background-color: #ff5733;">
    ?? 2020 Copyright:
    <a class="text-light" href="index.php">Slipstream</a>
  </div>
</footer>
    
<!--########  END OF FOOTER  #########-->

 <script>
window.onscroll = function() {myFunction()};

var navbar1 = document.getElementById("navbar1");
var sticky = navbar1.offsetTop;

function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar1.classList.add("sticky")
    }else {
        navbar1.classList.remove("sticky");
    }
}
</script>


    <script src="/Javascript/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="/Javascript/jquery-3.4.1.min.js"></script>
    <script src="/Javascript/bootstrap.bundle.min.js"></script>
    <script src="/Javascript/jscript1.js"></script>
</body>
</html>