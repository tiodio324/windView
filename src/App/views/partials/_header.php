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
                        <a href="/about" class="lng-navbar1">About</a>
                    </li>
                    <li>
                        <a href="/products" class="lng-navbar2">Our Products</a>
                    </li>
                    <li>
                        <a href="/donate" class="lng-navbar3">Donate</a>
                    </li>
                    <li>
                        <a href="/contacts" class="lng-navbar4">Contact Us</a>
                    </li>
                </nav>
                <select class="changeLangContainer">
                    <option class="changeLangInput" value="ru">RU</option>
                    <option class="changeLangInput" value="en">EN</option>
                </select>
                <div class="emptyDiv"></div>
                <?php if (isset($_SESSION['user'])) : ?>
                    <div class="btnSign">
                        <a class="btnSignTitle lng-navbar5" href="/logout">Log Out</a>
                    </div>
                <?php else : ?>
                    <div class="btnSign">
                        <a class="btnSignTitle lng-navbar6" href="/login">Sign In</a>
                    </div>
                <?php endif; ?>
                <div class="btnOpenMenuContainer">
                    <img class="btnOpenMenu" src="assets/img/btn_OpenMenu.png" alt="Open Menu"/>
                </div>
            </div>
        </header>