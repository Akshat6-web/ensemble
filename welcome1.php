<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/main.css" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="#">Welcome !</a>
                <a class="navbar-brand" href="#"><?php echo $_SESSION['name'];?></a>
                
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    <li><a   href="welcome.php">Tier1</a></li>
                <li><a   href="welcome1.php">Tier2</a></li>
                <li><a   href="welcome2.php">Tier3</a></li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <!--<div class="container">
        <header class="jumbotron hero-spacer">
            <h1>A Warm Welcome!</h1>
            <p>More Stickers Coming Soon!!, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a  href="logout.php" class="btn btn-primary btn-large">Logout </a>
            </p>
        </header>

        </div>

        

-->
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <div id="wrapper">

                <!-- Header -->
                    <header id="header">
                        <span class="avatar"><img src="images/avatar.png" alt="" /></span>
                        <p><strong>Tier 2 Stickers</p>
                        <ul class="icons">
                            <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                            <!--<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>-->
                            <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                        </ul>
                        <p><strong>Follow Us here and download the stickers for free</p>
                    </header>

                <!-- Main -->
                    <section id="main">

                        <!-- Thumbnails -->
                            <section class="thumbnails">
                                <div>
                                    <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                                    <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                                
                                    <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                                    </div>
                                <div>
                                    <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                                    <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                               
                                    <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                                     </div>

                                <div>
                                    <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                               
                                    <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                                    <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                                     <a href="images/fulls/comingsoon.jpg">
                                        <img src="images/thumbs/comingsoon.jpg" alt="" />
                                        <h3>More Stickers Coming Soon!!</h3>
                                    </a>
                                </div>
                                
                                                      </section>

                    </section>

                <!-- Footer -->
                    <footer id="footer">
                        <p>&copy; ensemble.org.in. All rights reserved. </p>
                    </footer>

            </div>

        <!-- Scripts -->
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery.poptrox.min.js"></script>
            <script src="js/skel.min.js"></script>
            <script src="js/main.js"></script>

</body>

</html>
<?php } ?>