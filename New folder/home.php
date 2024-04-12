<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--sweeper css link-->
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
     <!--fontcdn link-->
     <link rel="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--custome file link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">

    <a href="home.php" class="logo">Wander World</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="package.php">Package</a>
        <a href="book.php">Book</a>
    </nav>

   <div id="menu-btn" class="fas fas-bars"></div> 
</section>
<!--header section-->
<!--home section-->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
        <div class="swiper-slide slide">
    <video autoplay muted loop>
        <source src="img/naturevideo1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content">
        <span>explore, discover, travel</span>
        <h3>travel around the world</h3>
        <a href="package.php" class="btn">discover more</a>
    </div>
</div>

<div class="swiper-slide slide">
    <video autoplay muted loop>
        <source src="img/naturesvideo1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content">
        <span>explore, discover, travel</span>
        <h3>discover the new place</h3>
        <a href="package.php" class="btn">discover more</a>
    </div>
</div>

<div class="swiper-slide slide">
    <video autoplay muted loop>
        <source src="img/naturevideo4.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content">
        <span>explore, discover, travel</span>
        <h3>make your tour worth living</h3>
        <a href="package.php" class="btn">discover more</a>
    </div>
</div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!--service section-->
<section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
        <img src="img/mountain.png" alt="">
            <h3>adventure</h3>
        </div>
        <div class="box">
            <img src="img/destination.png" alt="">
            <h3>tour guide</h3>
        </div>
        <div class="box">
        <img src="img/travel.png" alt="">
            <h3>trekking</h3>
        </div>
        <div class="box">
        <img src="img/campfire.png" alt="">
            <h3>camp fire</h3>
        </div>
        <div class="box">
        <img src="img/road.png" alt="">
            <h3>off road</h3>
        </div>
        <div class="box">
        <img src="img/travel-luggage.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>
<!--home about section -->
<section class="home-about">
    <div class="image">
    <video autoplay muted loop>
        <source src="img/naaturevideo6.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>At Wander world tour guide , we are passionate about providing unforgettable travel experiences for our clients. As seasoned tour guides with years of expertise in the industry, we specialize in crafting personalized journeys that cater to every traveler's unique preferences and interests.
</p>
<a href="about.php" class="btn">read more</a>
    </div>
</section>
<!--homepackages-->
<section class="home-packages">
    <h1 class="heading">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
            <video autoplay muted loop>
        <source src="img/naturevideo2.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Immerse yourself in rich cultural heritage and traditions with our Cultural Tour package. Explore ancient temples, historical landmarks, and vibrant local markets. Engage with local communities and witness captivating performances that showcase the essence of each destination.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
            <video autoplay muted loop>
        <source src="img/naturevideo5.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Immerse yourself in rich cultural heritage and traditions with our Cultural Tour package. Explore ancient temples, historical landmarks, and vibrant local markets. Engage with local communities and witness captivating performances that showcase the essence of each destination.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
            <video autoplay muted loop>
        <source src="img/naturevideo4.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Immerse yourself in rich cultural heritage and traditions with our Cultural Tour package. Explore ancient temples, historical landmarks, and vibrant local markets. Engage with local communities and witness captivating performances that showcase the essence of each destination.</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more">
        <a href="package.php">load more</a>
    </div>
</section>
<!-- home offer-->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>
        Unlock unforgettable experiences with a 50% discount on travel packages. Explore diverse destinations and create lasting memories while enjoying exclusive savings. Book your adventure today!
        </p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<section class="footer">
    
    <div class="box-container">
    <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
    </div>
    <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="tel:+666111076454"><i class="fas fa-phone"></i>+666 11107 6454</a>
        <a href="tel:+777111676454"><i class="fas fa-phone"></i>+777 11167 6454</a>
        <a href="mailto:wanderworld610@gmail.com"><i class="fas fa-envelope"></i>wanderworld610@gmail.com</a>
        <a href="https://maps.google.com/?q=Mumbai,India%20-400104" target="_blank"><i class="fas fa-map"></i>Mumbai, India - 400104</a>

    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook">facebook</i></a>
        <a href="#"><i class="fab fa-twitter">twitter</i></a>
        <a href="#"><i class="fab fa-instagram">instagram</i></a>
        <a href="#"><i class="fab fa-linkedin">linkedin</i></a>

    </div>
    </div>
    <div class="credit">created by <span>Indumalar</span> | all rights reserved!</div>

</section>


<!-- swiper css file link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- custom js file -->
<script src="script.js"></script>
</body>
</html>