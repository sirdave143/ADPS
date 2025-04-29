<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADPS Photography - Gallery</title>
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
            <li><a href="gallery.php" class="active">Gallery</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADPS Video Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>ADPS Portfolio</h1>
<p>We love telling stories through Photos, videos, short films, and commercials. <br>
   Check out our portfolio to see the quality and creativity we bring to every project.</p>

<div class="tabs">
    <?php
    $categories = ['Promotional' => 'promotional', 'AVPs' => 'avps', 'Shorts/Reels' => 'shorts', 'Films' => 'films', 'Music Video' => 'music'];
    $activeTab = $_GET['category'] ?? 'promotional';
    foreach ($categories as $label => $folder) {
        $activeClass = ($activeTab == $folder) ? 'active' : '';
        echo "<a class='tab-link $activeClass' href='?category=$folder'>$label</a>";
    }
    ?>
</div>

<div class="gallery">
    <?php
    $videoFolder = "videos/$activeTab/";
    $allowedExtensions = ['mp4', 'mov', 'webm'];
    if (is_dir($videoFolder)) {
        $files = array_diff(scandir($videoFolder), ['.', '..']);
        foreach ($files as $file) {
            $ext = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array(strtolower($ext), $allowedExtensions)) {
                echo "<video controls class='gallery-item'><source src='$videoFolder$file' type='video/mp4'></video>";
            }
        }
    } else {
        echo "<p>No data found in this category.</p>";
    }
    ?>
</div>

</body>
</html