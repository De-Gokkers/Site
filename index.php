<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>DeGokkers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="header">
            <div class="topheader">

                <div class="socialicons">
                    <a href="http://www.facebook.com"><img src="img/facebook_icon.png" alt="faceboookicon"></a>
                    <a href="http://www.twitter.com"><img src="img/twitter_icon.png" alt="twittericon"></a>
                    <a href="http://www.googleplus.com"><img src="img/googleplus_icon.png" alt="googleplusicon"></a>
                    <a href="https://www.linkedin.com"><img src="img/linkedin_icon.png" alt="linkedinicon"></a>
                </div>

                <div class="phone_mail_section">
                    <div class="phonesection">
                        <img src="img/phone_icon.png" alt="phoneicon">
                        <p>+31 76 573 34 44</p>
                    </div>
                    <div class="mailsection">
                        <img src="img/mail_icon.png" alt="phoneicon">
                        <p>DeGokkers@rocwb.nl</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="downloadnow1">
            <div class="respondmessage">
                <?php
                if ( isset($_GET['message']) ) {
                    echo $_GET['message'];

                }
                ?>
            </div>
            <div class="downloadnow">
                <?php

                     if(isset($_SESSION))
                    {
                        echo '<button type="button" enabled>Download</button></a>';
                        echo 'Hi, ' . $_SESSION["username"];
                     }
                    else
                     {
                         echo '<button type="button" disabled>First login</button></a>';
                        }
                     ?>

            </div>
        </div>
        <div class="menubar">
            <div class="items">
                <div class="logo">
                    <h1>De <span>G</span>okkers</h1>
                </div>
                    <div class="boxp">
                        <a class="button" href="#popup2">Register</a>
                        <a class="button" href="#popup1">Login</a>
                    </div>
                    <div id="popup2" class="overlay">
                        <div class="popup">
                            <h2>Register</h2>
                            <form action="includes/signup_inc.php" method="post">
                                <div class="container">
                                    <input type="email" name="email" placeholder="Email" required>
                                    <input type="text" name="username" placeholder="username" required>
                                    <input type="password" name="password" placeholder="Password" required>
                                    <input type="submit" name="submit">
                                </div>
                            </form>
                            <a class="close" href="#">&times;</a>
                            <div class="content">
                            </div>
                        </div>
                    </div>
                <div id="popup1" class="overlay">
                    <div class="popup">
                        <h2>Here i am</h2>
                        <form action="includes/login_inc.php" method="post">
                            <div class="container">
                                <input type="text" name="username" id="username" placeholder="Username" required>
                                <input type="password" name="password" id="password" placeholder="Password" required>
                                <input type="submit" name="login" >
                            </div>
                        </form>
                        <a class="close" href="#">&times;</a>
                        <div class="content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature">
            <div class="infosection">
                <h1 class="runningman">Running Game</h1>

                <div class="boxes">
                    <div class="box">
                        <img src="img/about-us.png">
                        <h1>About</h1>
                        <p>Dit spel is een oud maar erg leuk spel voor 3 mensen, met oneindig veel plezier.</p>
                    </div>

                    <div class="box">
                        <img src="img/programming-code.png">
                        <h1>Coding</h1>
                        <p>Game is gecodeerd in C#, Winforms, Visual Studio 2017. Website in HTML&CSS in PHPStorm.</p>
                    </div>

                    <div class="box">
                        <img src="img/cloud-computing.png">
                        <h1>Developers</h1>
                        <p>Gecodeerd door 3 mensen: Frank van Beek, Luke Thie, Robbert Schalk.</p>
                    </div>

                    <div class="box">
                        <img src="img/add-contacts.png">
                        <h1>Contact</h1>
                        <p>Zie "Contact" tab in de menubar. </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Here i am</h2>

                <a class="close" href="#">&times;</a>
                <div class="content">
                    Thank to pop me out of that button, but now i'm done so you can close this window.
                </div>
            </div>
        </div>
        <div class="video">
            <video width="600" height="400" controls>
                <source src="FUNNY BABY VIDEOS 7.mp4" type="video/mp4">
                <source src="FUNNY BABY VIDEOS 7.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>







        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
