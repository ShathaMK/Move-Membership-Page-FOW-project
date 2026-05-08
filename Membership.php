<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Mstyle.css">
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <title>Move Membership</title>

</head>
<body>
    <header class="header">
       
        <a class="logo" href="home.php" ><span id="logo-text">M<video  class="logo" id="myVideo" width="70px" height=70px" muted loop><source src="cube-in-circle.mp4"></video>VE</span></a>
        <nav class="navigation">
        
            <a href="home.php">Home</a>
            <a href="Membership.php">Membership</a>
            <a href="calories.php">Calorie Calculator</a>
            <a href="contact.php">Contact Us</a>
        </nav>
   
    </header>

    <!--Main content here Girlis-->

   <div class="header-pricing">
   
       <h1> Our Plans</h1>
       <div class="toggle">
       <label>Annually</label>
       <div class="toggle-btn">
        <input type="checkbox" id="checkbox" class="checkbox">
        <label for="checkbox" class="sub" id="sub"> 
            <div class="circle"></div>
        </label>
       </div>
       <label>Monthly</label>
    </div>
    </div>
    <!--Cards-->
    <div class="cards">
        <div class="card">
        <div class="cards-shadow">
            <ul>
                <li class="package">Basic</li>
                <li id="basic" class="price-bottom-bar" data-annual="$199.9" data-monthly="$19.99">
                    &dollar; 199.9
                </li>
                <li class="bottom-bar">7 days a week access</li>
                <li class="bottom-bar">Pool access</li>
                <li class="bottom-bar">Football playground access</li>
                <li>
                    <a href="form.php"><button class="btn"name="Bbtn">Purchase Now</button></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-active">
            <ul>
                <li class="package">Premium</li>
                <li id="basic" class="price-bottom-bar"data-annual="$299.9" data-monthly="$29.99">
                    &dollar; 299.9
                </li>
                <li class="bottom-bar">7 days a week access</li>
                <li class="bottom-bar">Free nutrition plan </li>
                <li class="bottom-bar">All playground access</li>
                <li>
                   <a href="form.php"> <button class="active-btn">Purchase Now</button></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="cards-shadow">
            <ul>
                <li class="package">Pro</li>
                <li id="basic" class="price-bottom-bar" data-annual="$499.9" data-monthly="$49.99">
                    &dollar; 499.9
                </li>
                <li class="bottom-bar">24/7 access</li>
                <li class="bottom-bar">Personal Trainer</li>
                <li class="bottom-bar">All playground access</li>
                <li>
                    <a href="form.php"><button class="btn">Purchase Now</button></a>
                </li>
            </ul>
        </div>
    </div>
    </div>




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
        const checkbox = document.getElementById('checkbox');
        checkbox.addEventListener('change', (event) => {
        const isMonthly = event.target.checked;
        const prices = document.querySelectorAll('.price-bottom-bar');
        prices.forEach(price => {
        const annualPrice = price.dataset.annual;
        const monthlyPrice = price.dataset.monthly;
        price.textContent = isMonthly ? monthlyPrice : annualPrice;
  });
});
        </script>
</body>
</html>