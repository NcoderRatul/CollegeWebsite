<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canning Government Polytechnic</title>

        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    </head>
    <title>
        Canning Government Polytechnic
    </title>
    <body>
        <div class="title">
            <div class="logo">
                <img src="images/logo.png">
            </div>
            <div class="heading">          
                <h2><u>CANNING GOVERNMENT POLYTECHNIC</u></h2>
                <h5>VILL+PO- Narayanpur,PS- Jibantala
                 South24paragnas,  Pin- 743363(WB)</h5>
            </div>
            <div class="contact">
                <ul>
                    <li><i class="fa fa-envelope-o "></i>ratulsasmal555@gmail.com</li>
                    <li><i class="fa fa-phone"></i>7699768780</li>
                </ul>
            </div>        
        </div>
        <div class="menu-bar">
            <ul>
                <li class="highlight"><a href="#"><i class="fa fa-home"></i>Home</i></a></li>
                <li><a href="#"><i class="fa fa-user"></i>About US</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="Admition.html">Admision</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#"><i class="fa fa-building-o"></i>Departments</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="cst.html">Computer Science & Technology</a></li>
                            <li><a href="ee.html">Electrical Engineering</a></li>
                            <li><a href="re.html">Renewable Energy</a></li>
                        </ul>
                    </div>           
                </li>
                <li><a href="Gallery.html"><i class="fa fa-picture-o"></i> Gallery</a></li>
                <li><a href="notice.html"><i class="fa fa-pencil-square-o"></i>Notice</a></li>
                <li><a href="logout.php" target="_blank"><i class="fa fa-user-circle"></i>LOGOUT</a></li>
                <!--<a href="http://localhost/cgp/register.php/" target="_blank">CGP LOGIN!</a> -->
            </ul>
        </div>
        <div class="slider">
        </div>      
        <div class="bottom">
            <h2 class="links">Links</h2>
            <ul>
                <li><a href="#"><i class="fa fa-youtube"></i>Youtube Channel</a></li>
                <li><a href="https://www.facebook.com/OfficialWBSCTE"><i class="fa fa-facebook"></i>Facebook</a></li>
                <li><a href="https://www.instagram.com/OfficialWBSCTE/"><i class="fa fa-instagram"></i>Instagram</a></li>
                
            </ul>
        </div>
            














    </body>
</html>