<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $title; ?> | windView</title>
        <link rel="stylesheet" href="assets/CSS/main.css" />
        <link rel="stylesheet" href="assets/CSS/media.css" />
    </head>
    <body class="body">
        <header>
            <div class="headerContainer">
                <div class="navLogoContainer">
                    <a href="/">
                        <img class="navLogo" src="assets/img/logo.png" alt="Company Logo"/>
                    </a>
                </div>
                <nav class="navbar">
                    <li>
                        <div class="btnCloseMenuContainer">
                            <img class="btnCloseMenu" src="assets/img/btn_CloseMenu.png" alt="Close Menu"/>
                        </div>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/products">Our Products</a>
                    </li>
                    <li>
                        <a href="/donate">Donate</a>
                    </li>
                    <li>
                        <a href="/contacts">Contact Us</a>
                    </li>
                </nav>
                <div class="emptyDiv"></div>
                <?php if (isset($_SESSION['user'])) : ?>
                    <div class="btnSign">
                        <a class="btnSignTitle" href="/logout">Log Out</a>
                    </div>
                <?php else : ?>
                    <div class="btnSign">
                        <a class="btnSignTitle" href="/login">Sign In</a>
                    </div>
                <?php endif; ?>
                <div class="btnOpenMenuContainer">
                    <img class="btnOpenMenu" src="assets/img/btn_OpenMenu.png" alt="Open Menu"/>
                </div>
            </div>
        </header>