<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="home.css">
    <!-- <link rel="stylesheet" href="Mstyle.css">
    <link rel="stylesheet" href="style.css"> -->
    <title>Move Gym</title>

</head>
<body>
    <header>
        <nav class="navigation">
        <a class="logo" href="home.php" ><span id="logo-text">M<video  class="logo" id="myVideo" width=70px height=70px muted loop><source src="cube-in-circle.mp4"></video>VE</span></a>
         <div>
        <a href="home.php">Home</a>
        <a href="Membership.php">Membership</a>
        <a href="calories.php">Calorie Calculator</a>
            <a href="contact.php">Contact Us</a>
    
    </div>
</nav>

       <div class="slider">
           <div class="load"></div>
           <div class="content">
               <div class="principal">
                <h3> Join MOVE Today </h3>
                <p>Let's be Ready To Get Fit, Strong & Motivated!</p>
                <a href="#about" class="button1">About Us</a>
                <a href="Membership.php" class="button2">Membership</a>
               </div>
           </div>
        </div>
    </header>

    <section id="about">
        <div class="about-text">
			<h2>MOVE</h2>
			<p>  Is a premier athletic facility with state-of-the-art amenities.</br>
				 It offers a fully equipped gym, indoor and outdoor sports courts,</br>
                 and swimming pools. The Gym provides personalized training programs</br>
                 and experienced Trainers. It also has a spa and wellness center for relaxation.</br>
                 Nutrition counseling and fitness assessments are available. Move is a community</br> of
                 like-minded individuals focused on an active and healthy lifestyle.
            </p>
		</div>
		</div>
	</section>

    <section class="trainers">
        <h1>Expert Trainers</h1>
        <div class="swiper-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="image1/trainer1.png">
                </div>

                <div class="swiper-slide">
                    <img src="image1/trainer2.png">
                </div>

                <div class="swiper-slide">
                    <img src="image1/trainer4.png">
                </div>

                <div class="swiper-slide">
                    <img src="image1/trainer3.png">
                </div>

                <div class="swiper-slide">
                    <img src="image1/trainer5.png">
                </div>
            </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <a href="https://goo.gl/maps/CDJ3UKZhva5A2X327" class="location"><i class="fa-solid fa-location-dot"></i> Saudi Arabia, Alahssa</a>
        <div class="social-icons">
            <a href="https://www.linkedin.com"><i class="fa-brands fa-linkedin "></i></a>
            <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
            <a href="mailto:MOVE@gym.org.sa"><i class="fa-solid fa-envelope "></i></a>
        </div>
       
         <p class="copyright">© MOVE, Inc.</p>
        </footer>

        <script>
            var video = document.getElementById("myVideo");
            
            video.addEventListener('mouseover', function(){
                this.play();
            });
            
            video.addEventListener('mouseout', function(){
                this.pause();
            });
            </script> 

    

     <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
        <script>
            var swiper = new Swiper(".swiper-slider", {
            slidesPerView: 3,
            spaceBetween: 30,
            });
        </script>
            
        </body>
</html>