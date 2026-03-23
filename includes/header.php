<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headway Business Solutions LLP</title>
    <meta name="description" content="India's No.1 Jewellery Business Consultant & Coach - Headway Business Solutions LLP">
    <link rel="stylesheet" href="<?php echo $path_prefix; ?>style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="<?php echo $path_prefix; ?>index.php" class="nav-logo">
            <div class="logo-wrapper">
                <div class="logo-icon">
                    <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="80" height="80" rx="4" fill="#f97316"/>
                        <path d="M20 20 L20 60 M20 40 L60 40 M60 20 L60 60" stroke="white" stroke-width="10" stroke-linecap="round"/>
                        <path d="M30 55 L40 70 L50 55" fill="white"/>
                        <path d="M15 65 L65 65" stroke="white" stroke-width="3"/>
                    </svg>
                </div>
                <div class="logo-text">
                    <span class="logo-name">HEADWAY<sup>®</sup></span>
                    <span class="logo-sub">BUSINESS SOLUTIONS LLP</span>
                    <span class="logo-tag">Solution@100%<sup>®</sup></span>
                </div>
            </div>
        </a>
        <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-links" id="navLinks">
            <li><a href="<?php echo $path_prefix; ?>index.php">Home</a></li>
            <li><a href="<?php echo $path_prefix; ?>services/about.php">About Us</a></li>
            <li class="has-dropdown">
                <a href="#">Services <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="<?php echo $path_prefix; ?>services/startup.php">Startup</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/makemydreams.php">Make My Dreams</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/jewellery-vidhyapith.php">Jewellery Vidhyapith</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/idp.php">Individual Development Program</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/hr.php">Intelligent HR</a></li>
                    <li><a href="<?php echo $path_prefix; ?>services/mahavir-it.php">Mahavir IT</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $path_prefix; ?>Initiatives/Initiatives.php">Initiatives</a></li>
            <li class="has-dropdown">
                <a href="#">Our Company <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="<?php echo $path_prefix; ?>Our Company/gallery.php">Gallery</a></li>
                    <li><a href="<?php echo $path_prefix; ?>Our Company/team.php">Our Team</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <a href="#">Career <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="<?php echo $path_prefix; ?>Career/job-required.php">Staff Required</a></li>
                    <li><a href="<?php echo $path_prefix; ?>Career/job-required.php">Job Required</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $path_prefix; ?>contact.php">Contact Us</a></li>
            <li class="has-dropdown">
                <a href="#">Event <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="<?php echo $path_prefix; ?>Events/lucky-draw.php">Lucky Draw</a></li>
                    <li><a href="<?php echo $path_prefix; ?>Events/workshop.php">Workshop</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
