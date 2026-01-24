<?php
// starting session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentMandu</title>

    <!-- linking css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- loading font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<!-- building navbar -->
<header id="websiteHeader">
    <nav id="navigation">

        <!-- showing brand -->
        <div id="brandSection">
            <a href="index.php" id="brandLink">
                <img src="../assets/img/logo.png" id="brandLogo" alt="RentMandu logo">
            </a>
        </div>

        <!-- showing nav links -->
        <div id="navigationLinks">
            <a class="navigationLink" href="index.php">Home</a>
            <a class="navigationLink" href="listings.php">Rent Listings</a>
            <a class="navigationLink" href="listings.php?type=Room">Rooms</a>
            <a class="navigationLink" href="listings.php?type=Flat">Flats</a>
            <a class="navigationLink navigationButton" href="auth/login.php">Agent Login</a>
        </div>

    </nav>
</header>
