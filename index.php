<?php
// index.php - Main page of the photography website
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADPS Photography</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo-container">
        <a href="index.php">
            <img src="ADPS1.png" alt="ADPS PHOTOGRAPHY" class="logo-img">
        </a>
    </div>
    <nav>
        <ul class="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>


    
    
<section class="slider">
    <?php
    // Fetch images from the "images" directory
    $images = glob("images/*.jpg");
    foreach ($images as $image) {
        echo "<div class='slide'><img src='$image' alt='Photography Slide' class='shady-effect'></div>";
    }
    ?>
   
</section>

    <section class="intro">
        <div class="intro-text">
            <h2><strong>Modern, Creative and Emotive</strong></h2>
            <p>For those fun, relaxed couples, who refuse to do the stereotypical traditional ways!</p>
            <div class="highlight-text">
                <span>Not just another wedding!</span>
                <span>No Cheese</span>
                <span>No Awkward Poses</span>
                <span>Modern Wedding Imagery</span>
                <span>Completely Exclusive wedding vibes</span>
            </div>
            <p><strong>What do you say? You with me?</strong></p>
        </div>
    </section>
    
    <section class="about">
        <h3>For the Timeless Romantics to the Wild Party Starters</h3>
        <h4>AND EVERYTHING IN BETWEEN</h4>
        <p>As a modern wedding photographer, I’m a fierce believer in being different, crossing those lines so many people seem fearful of even smudging and doing things in a unique way that makes me...me!</p>
        <p>Although based covering weddings in the Manchester and Liverpool Region - There is no where I won’t travel to for love and a good party!</p>
        <p>I don’t believe in a rule book; whilst I adore timeless and lux, I am here to break the rules, push the boundaries of the expectations of wedding photography. We can seamlessly fuse together timeless elegance and the wild party starters.</p>
        <p>If you want honest storytelling, the adventures being documented with heart and emotion rather than forced posey images that make you seriously cringe, and images that invoke emotion that tell your story perfectly, then we are on an awesome match.</p>
        <button>See more photos</button>
    </section>
    
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('nav ul li a').hover(function() {
                $(this).css({
                    'color': '#ff6600',
                    'transform': 'scale(1.1)',
                    'transition': 'all 0.3s ease-in-out'
                });
            }, function() {
                $(this).css({
                    'color': '#000',
                    'transform': 'scale(1)'
                });
            });
        });
    </script>
</body>
</html>
