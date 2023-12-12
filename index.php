<?php 
session_start();
require_once('required/database.php');
require_once('required/auth.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Portofolio Website</title>
        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <!------Hero Section Start------>

        <div class="hero">
            <nav>
                <h2 class="logo">Portofo<span>lio</span></h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">Contact Me</a></li>
                </ul>
                <a href="login.php" class="btn">Login</a>
                <a href="logout.php" class="btn">Logout</a>
            </nav>

            <div class="content">
                <h4>Hello, my name is</h4>
                <h1>Hairun<span>nisa</span></h1>
                <h3>I'am a Mahasiswa Politani.</h3>
            </div>
        </div>

        <!------About Section Start-->
        <section class="about">
            <div class="main">
                <img src="image/main-photo.jpeg" width="300px" height="400px">
                <div class="about-text">
                    <h2>About Me</h2>
                    <h5>Short Story</h5>
                    <p>Introduce my name is Hairunnisa, usually called Nisa.I was born on January 25, 2004 in Samarinda, I am currently studying at Politeknik Pertanian Negeri Samarinda and taking the TRPL study program, I am a fangirl of EXO, NCT, and Seventeen and I really like to hear music from various genres. I have a hobby of watching movies and also reading some books about religion, My life motto is "Don't study with fear of failure, learn with hope of success" And "We don't need money to help others, we only need hearts to help others."</p>
                    <button type="button">Let's Talk</button>
                </div>
            </div>
        </section>

        <!------service section start------>
        <div class="service">
            <div class="tittle">
                <h2>Our Service</h2>
            </div>

            <div class="box">
                <div class="card">
                    <i class="fa-solid fa-bars"></i>
                    <h5>Web Development</h5>
                    <div class="pra">
                        <p>Never count what you have given, but remember what you have received.</p>

                        <p stlye="text-align: center;">
                            <a class="button" href="#">Read More</a>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <i class="fa-regular fa-user"></i>
                    <h5>Web Development</h5>
                    <div class="pra">
                        <p>Never count what you have given, but remember what you have received.</p>

                        <p stlye="text-align: center;">
                            <a class="button" href="#">Read More</a>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <i class="fa-regular fa-bell"></i>
                    <h5>Web Development</h5>
                    <div class="pra">
                        <p>Never count what you have given, but remember what you have received.</p>

                        <p stlye="text-align: center;">
                            <a class="button" href="#">Read More</a>
                        </p>
                    </div>
                </div>
            </div>   
        </div>

        <!------Guestbook------>
        <section class="guess-book">
            <h2>Guestbook</h2>
            <p>Leave your comments below:</p>
        <!-- 
            <?php
            // Your PHP logic for handling comments goes here
            ?> -->

            <form method="post" action="">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="comment">Your Comment:</label>
                <textarea name="comment" rows="4" cols="50" required></textarea>
                <button type="submit">Submit Comment</button>
            </form>
        </section>

        <!-----Footer Start--->
        <footer>
            <p>Hairunnisa</p>
            <p>For more HTML, CSS, and coding tutorial - please click on the link below to Subscribeto my channel:</p>
            <div class="social">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <p class="end">Copyright &copy; 2023, By Hairunnisa</p>
        </footer>
    </body>
</html>