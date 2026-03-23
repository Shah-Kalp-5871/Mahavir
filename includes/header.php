<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' – ' : ''; ?>Headway Business Solutions LLP</title>
    <meta name="description" content="<?php echo isset($page_desc) ? $page_desc : "India's No.1 Jewellery Business Consultant & Coach – Headway Business Solutions LLP. Solution@100%."; ?>">
    <link rel="stylesheet" href="<?php echo $path_prefix; ?>style.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,400;0,14..32,500;0,14..32,600;0,14..32,700;0,14..32,800;0,14..32,900;1,14..32,400&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>

<!-- ════════ NAVBAR ════════ -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <!-- Logo -->
        <a href="<?php echo $path_prefix; ?>index.php" class="nav-logo">
            <div class="logo-wrapper">
                <div class="logo-icon">
                    <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" rx="8" fill="url(#logoGrad)"/>
                        <path d="M18 18 L18 62 M18 40 L62 40 M62 18 L62 62" stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M30 54 L40 68 L50 54" fill="rgba(255,255,255,0.9)"/>
                        <defs>
                            <linearGradient id="logoGrad" x1="0" y1="0" x2="80" y2="80">
                                <stop offset="0%" stop-color="#f97316"/>
                                <stop offset="100%" stop-color="#ea580c"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="logo-text">
                    <span class="logo-name">HEADWAY<sup>®</sup></span>
                    <span class="logo-sub">BUSINESS SOLUTIONS LLP</span>
                    <span class="logo-tag">Solution@100%<sup>®</sup></span>
                </div>
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="menu-toggle" id="mobileMenuBtn" aria-label="Toggle navigation menu" aria-expanded="false">
            <span class="hamburger" id="menuIcon">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </span>
        </button>

        <!-- Navigation Links -->
        <ul class="nav-links" id="navLinks">
            <li><a href="<?php echo $path_prefix; ?>index.php">Home</a></li>
            <li><a href="<?php echo $path_prefix; ?>services/about.php">About Us</a></li>
            <li class="has-dropdown">
                <a href="#">Services <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="<?php echo $path_prefix; ?>services/startup.php"><i class="fas fa-rocket"></i> Startup</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/makemydreams.php"><i class="fas fa-star"></i> Make My Dreams</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/jewellery-vidhyapith.php"><i class="fas fa-gem"></i> Jewellery Vidhyapith</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/idp.php"><i class="fas fa-user-graduate"></i> Individual Dev. Program</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/hr.php"><i class="fas fa-users-cog"></i> Intelligent HR</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/mahavir-it.php"><i class="fas fa-laptop-code"></i> Mahavir IT</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $path_prefix; ?>Initiatives/Initiatives.php">Initiatives</a></li>
            <li class="has-dropdown">
                <a href="#">Our Company <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="<?php echo $path_prefix; ?>Our Company/gallery.php"><i class="fas fa-images"></i> Gallery</a></li>
                    <li><a href="<?php echo $path_prefix; ?>Our Company/team.php"><i class="fas fa-user-tie"></i> Our Team</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Career <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="<?php echo $path_prefix; ?>Career/job-required.php"><i class="fas fa-briefcase"></i> Job Required</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $path_prefix; ?>contact.php">Contact Us</a></li>
            <li class="has-dropdown">
                <a href="#">Events <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="<?php echo $path_prefix; ?>Events/lucky-draw.php"><i class="fas fa-ticket-alt"></i> Lucky Draw</a></li>
                    <li><a href="<?php echo $path_prefix; ?>Events/workshop.php"><i class="fas fa-chalkboard-teacher"></i> Workshop</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
