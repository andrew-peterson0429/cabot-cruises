
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Fill Me In">
<meta name="author" content="Andrew Peterson">

<!-- This start file was build by Paul Cheney  -->
<title><?php echo($ptitle) ?></title>

<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">

<!-- STYLE SHEETS -->
<link href="css/styles.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/b8d60ec4d6.js" crossorigin="anonymous"></script>

</head>

<body>
    
<!-- Medium and Large HEADER HERE -->
<header id="largeHeader">
    <div>
        <figure class="logo">
            <img src="./images/Cabot_Cruise_Logo_Text.png" alt="logo" srcset="./images/logo1.png 1x, ./images/logo2.png 2x, ./images/logo3.png 3x">
        </figure>
    </div>
    <div>
        <p>123-456-7890</p>
    </div>
</header>
    

<!-- NAVIGATION HERE -->
<div class="full-width-nav">
    <nav class="clearfix" >
    <ul id="primaryNav" class="hide">
        <li class=""><a href="index.php">HOME</a></li>
        <li class=""><a href="cruises.php">CRUISES</a></li>
        <li class=""><a href="agent.php">AGENTS</a></li>
        <li class=""><a href="booking.php">BOOK</a></li> 
    </ul>
    <div id="flexedNav">
        <div>
            <button onclick="toggleMenu()">&#9776;</button>
            
        </div>
        
        <div class="search" id="top">
            <input id="searchBar" type="text" placeholder="Search...">
            <button id="searchBtn"><i class="fas fa-search sml" aria-hidden="false"></i></button>
        </div>
    </div>
    
</nav>
</div>


<!-- Mobile HEADER HERE -->
<header id="mobileHeader">
    <figure class="logo">
        <img src="./images/Cabot_Cruise_Logo_Text.png" alt="logo" srcset="./images/logo1.png 1x, ./images/logo2.png 2x, ./images/logo3.png 3x">
    </figure>
</header>

<!-- CONTENT HERE -->
<main>