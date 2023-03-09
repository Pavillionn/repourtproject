<?php
session_start();

echo "Welcome ".$_SESSION['member'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ceppuinn.com.id</title>
    <link rel="icon" type="images/x-icon" href="https://www.w3docs.com/favicon.ico" />

    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

.header {
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),
        url('img/background.jpeg');
    background-position: center;
    background-size: cover;
    position: relative;
    padding-top:20px;
}

nav {
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}

nav img {
    width: 150px;
}

.nav-links {
    flex: 1;
    text-align: right;
}

.nav-links ul li {
    list-style: none;
    display: inline-block;
    padding: 8px 2px;
    position: relative;
}

.nav-links ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 13px;
}

.nav-links ul li::after {
    content: '';
    width: 0%;
    height: 2px;
    background: #9DC08B;
    display: block;
    margin: auto;
    transition: 0.5s;
}

.nav-links ul li:hover::after {
    width: 100%;
}

.text-box {
    width: 90%;
    color: #fff;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.text-box h1 {
    font-size: 62px;
}

.text-box p {
    margin: 10px 0 40px;
    font-size: 14px;
    color: #fff;
}

.hero-btn {
    display: inline-block;
    text-decoration: none;
    color: #fff;
    padding: 12px 34px;
    font-size: 13px;
    background: #9DC08B;
    position: relative;
    cursor: pointer;
}

.hero-btn:hover {
    background: #40513B;
    transition: 1s;
}

nav .fa {
    display: none;
}

@media(max-width: 700px) {
    .text-box h1 {
        font-size: 20px;
    }

    .nav-links ul li {
        display: block;
    }

    .nav-links {
        position: absolute;
        background: #f44336;
        height: 100vh;
        width: 200px;
        top: 0;
        right: -200px;
        text-align: left;
        z-index: 2;
        transition: 1s;
    }

    nav .fa {
        display: block;
        color: #fff;
        margin: 10px;
        font-size: 22px;
        cursor: pointer;
    }

    .nav-links ul {
        padding: 30px;
    }
}


.course {
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}

h1 {
    font-size: 36px;
    font-weight: 600;
}

p {
    color: #7777;
    font-size: 14px;
    font-weight: 300;
    line-height: 22px;
    padding: 10px;
}

.row {
    margin-top: 5%;
    display: flex;
    justify-content: space-between;
}

.course-col {
    flex-basis: 31%;
    background: #9DC08B;
    border-radius: 10px;
    margin-bottom: 5%;
    padding: 20px 12px;
    box-sizing: border-box;
    transition: 0.5s;
}

h3 {
    text-align: center;
    font-weight: 600;
    margin: 10px 0;
}

.course-col:hover {
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.2);
}

@media(max-width: 700px) {
    .row {
        flex-direction: column;
    }
}

/*------ campus ------*/
.campus {
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}

.campus-col {
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}

.campus-col img {
    width: 100%;
    height: 100%;
    display: block;
}

.layer {
    background: transparent;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;
}

.layer:hover {
    background-color: hsl(120, 100%, 25%);
}

.layer h3 {
    width: 100%;
    font-weight: 500;
    color: #fff;
    font-size: 22px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}

.layer:hover h3 {
    bottom: 49%;
    opacity: 1;
}

/*----------- facilities -----------*/

.facilities {
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 100px;
}

.facilities-col {
    flex-basis: 31%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left
}

.facilities-col img {
    width: 100%;
    height:60%;
    border-radius: 10px;
}

.facilities-col p {
    padding: 0;
}

.facilities-col h3 {
    margin-top: 16px;
    margin-bottom: 15px;
    text-align: center;
}

/*------ testimonials ---------*/

.testimonials {
    width: 80%;
    margin: auto;
    padding-top: 100px;
    padding-bottom: 100px;
    text-align: center;
}

.testimonial-col {
    flex-basis: 44%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
    background: #40513B;
    padding: 25px;
    cursor: pointer;
    display: flex;
}

.testimonial-col img {
    height: 85%;
    width:15%;
    margin-left: 5px;
    margin-right: 30px;
    border-radius: 50%;
}

.testimonial-col p {
    padding: 0;
}

.testimonial-col h3 {
    margin-top: 15px;
    text-align: left;
}

.testimonial-col .fa {
    color: #f44336;
}

@media(max-width: 700px) {
    .testimonial-col img {
        margin-left: 0px;
        margin-right: 15px;

    }
}


/*---------- footer ----------*/

.footer{
    width: 100%;
    text-align: center;
    padding: 30px 0;
    background: black;
    padding-top:70px;
    padding-bottom:70px;
}

.footer h3{
    color:white;
    margin-bottom: 25px; 
    margin-top: 20px;
    font-weight: 600; 
}
footer p{
    color: white;
}
.icons .fa{
    color: #ffffff;
    margin: 0 13px;
    cursor: pointer;
    padding: 18px 0;
}
.fa-heart-o{
    color: #09ad48;
}

/*----- form section -----*/
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: #820000;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  border: none;
  background-color:#9DC08B;
}

.input-field:focus {
  border: 2px solid white;
}

/* Set a style for the submit button */
.btn {
  background-color: #40513B;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>

</head>
<body>
    
    <section class="header">
        <nav>
            <a href="index.html" style="
            text-decoration: none; 
            color: #fff; 
            font-size:xx-large;
            "><b>Repourt.</b></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="">MENTHOR</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>

    <section>
        <div class="text-box">
            <h1>Get Mad? Get Serious Problem?</h1>
            <h3>Calm and Bring it EAZYY</h3>
            
            <!--- <a href="" class="hero-btn">Visit Us To Know More</a> --->
        </div>

    </section>

    <!----- form section ----->

    <form method="post" action="cek_login.php" style="max-width:500px; margin:auto; padding-bottom:200px;">
        <h2 style="padding-top:200px; padding-bottom: 10px; text-align:center;">Report your problem here mates</h2>
        <h3 style="padding-top:30px; padding-bottom: 10px; text-align:left;">What's your name mates?</h3>
        <div class="input-container">
          <!--- <i class="fa fa-user icon"></i> --->
          <!-- user -->
          <input class="input-field" type="text" placeholder="..." name="problem">
        </div>
        
        <h3 style="padding-top:10px; padding-bottom: 10px; text-align:left;">What's your problem?</h3>
        <div class="input-container">
          <!--- <i class="fa fa-user icon"></i> --->
          <!-- user -->
          <input class="input-field" type="text" placeholder="..." name="problem">
        </div>
              
        <button type="submit" name="simpan" class="btn">Report</button>
      </form>

          <!------------- campus -------------->
    <section class="campus">
        <h1>Our Menthor</h1>
        <p>Contact our menthor if you want to solve your problem.</p>
        <div class="row">
            <div class="campus-col">
                <img src="img/wednesday.jpg" alt="">
                <div class="layer">
                    <h3>Aaron Wednesday</h3>
                    
                </div>
                <a href="blog.php" class="hero-btn">Contact Him</a>
            </div>

            <div class="campus-col">
                <img src="img/diana.jpg" alt="">
                <div class="layer">
                    <h3>Diana Rose</h3>
                </div>
            </div>

            <div class="campus-col">
                <img src="img/johnstone.jpeg" alt="">
                <div class="layer">
                    <h3>Alex Johnstone</h3>
                </div>
            </div>

        </div>

    </section>

    <!------------ Blog Section ----------->

    <section class="facilities">
        <h1>Read Our Blogs Mates</h1>
        
        <div class="row">
            <div class="facilities-col">
                <img src="img/problemsolve.png">
                <h3><a href="problemsolve.php" style="color:black; text-decoration:none;">5 Step Formula to Solve Any Problem</a> </h3>
                <p>Read this article if you have so many problem and you cannot solve that problem.This article source by <b>Brian Tracy</b>. 
                Dont forget to like this article mates.</p>
            </div>

            <div class="facilities-col">
                <img src="img/doptox.avif">
                <h3>Dopamine & Detox</h3>
                <p>In this life, we all must have done things that cause dopamine and detox. If you dont know what is Dopamine & Detox? Read this article and dont forget to like this article mates. 
                    This article source by <b>Niklas Christl</b>. 
                </p>
            </div> 

            <div class="facilities-col">
                <img src="img/study.jpeg">
                <h3>How I Study SMARTER, Not HARDER</h3>
                <p>You always study study and study morning until night but the result is not make you happy. Read this article if you have problem with your study.This article source by <b>Mike Dee</b>. 
                Dont forget to like this article mates.</p>
            </div>
        </div>

        <div class="row">
            <div class="facilities-col">
                <img src="img/lifelesson.jpeg">
                <h3>21 Life Lessons for Teenagers</h3>
                <p>Life give so many lesson to so many people in around the world and we as teenager need to know and learn that life lesson. Nah because we are good teenager, read this article too.  This article source by <b>Mike Dee</b>. 
                Dont forget to like this article mates.</p>
            </div>

            <div class="facilities-col">
                <img src="img/books.jpg">
                <h3>3 Books That Made Me A Millionaire At 21!</h3>
                <p>So many human in this world have dream to be a millionaire. But do you know mates, not all of that human know and do all the important stuff to be a millionaire. 
                    This source by <b>Imam Gadhzi</b>. Dont forget to like this article mates.</p>
            </div>

            <div class="facilities-col">
                <img src="img/motivation.jpeg">
                <h3>The psychology of self-motivation</h3>
                <p>Motivation is the important thing in our life. whatever activity we do, there must be motivation in that activity. This source by <b>Scott Geller</b>. Dont forget to like this article mates.</p>
            </div>
        </div>

        <a href="blog.php" class="hero-btn">I Want More Blogs Please!</a>

    </section>

    <!---------- Testimonials ---------->

    <section class="testimonials">
        <h1>Our top reaction</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="row">
            <div class="testimonial-col">
                <img src="img/shaq.webp">
                <div>
                <p style="
                color: #fbfbfb; 
                font-size:medium; 
                padding-top:10px;">
                <b>I love this website more than my wife, haha i forgot if  i'm single lol</b></p>
                <h3 style="color: white;">SHAQ O'NEAL</h3>

                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>

                </div>
            </div>
            <div class="testimonial-col">
                <img src="img/jackma.jpeg">
                <div>
                    <p style="
                    color: #fbfbfb;
                    font-size:medium; 
                    padding-top:10px;">
                    <b>This is so good young man!</b></p>
                    <h3 style="color: white;">JACK MA</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>


    <!------------- Footer ------------>
    <section class="footer">
  <h3>Repourt Official Website</h3>
  <p>Marilah menjaga, merawat, dan membangun Desa Bekiung Lebih Maju bersama Kami Bumdes Bangun Mandiri Bekiung!</p>
  <div class="icons">
    <a href=""><i class="fa fa-facebook"></i></a> 
    <a href="https://www.instagram.com/bumdesa_bekiung/"><i class="fa fa-instagram"></i></a> 
    <a href="https://www.linkedin.com/in/akhsan-nasution-a62564218/"><i class="fa fa-linkedin"></i></a> 
    <a href="https://wa.me/6289626105445/?text=Hello"><i class="fa fa-twitter"></i></a> 
    <a href="https://youtu.be/Lh6F8WTWUDc"><i class="fa fa-youtube"></i></a> 
  </div>
  <p>Made by Bumdes Bangun Mandiri IT SUPPORT.</p>
</section>





























    <!-------------JavaScript for Toggle Menu---------->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body>
</html>