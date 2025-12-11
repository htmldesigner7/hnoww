<?php $current_page = basename($_SERVER['PHP_SELF'], ".php");

// home page white - product page green
$is_green = ($current_page === 'product-details'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>HNOWW</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <!-- bootstrap css start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- slick slider  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style css start -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/productdetails.css">
    <link rel="stylesheet" href="css/him.css">
    <link rel="stylesheet" href="css/giftshop.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- responsive css start -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body class="<?= $is_green ? 'theme-green' : 'theme-white' ?>">
    <header class="sticky-header <?= $is_green ? 'theme-green' : 'theme-white' ?>">

        <nav class="navbar navbar-expand-lg">
            <div class="navbar_left">
                <div class="hamburger" data-bs-toggle="offcanvas" href="#offcanvasExample">
                    <span><span></span><span></span><span></span></span>
                </div>
                <!-- Logo - dynamic src ya class -->
                <a href="index.php">
                    <img class="header_logo"
                        src="<?= $is_green ? 'images/header-green.svg' : 'images/header-logo.svg' ?>" alt="Logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="mainNavbar">
                <ul class="mx-auto nav_links">
                    <li><a href="#">for her</a></li>
                    <li><a href="him.php">for him</a></li>
                    <li><a href="#">for home</a></li>
                    <li><a href="rituals.php">rituals</a></li>
                    <li><a href="#">editions</a></li>
                    <li><a href="#">the Atelier</a></li>
                </ul>
                <div class="navbar_right">
                    <a href="#"><img
                            src="<?= $is_green ? 'images/serach-icon-black.svg' : 'images/home/search-icon.svg' ?>"
                            alt="Search"></a>
                    <a href="#"><img src="<?= $is_green ? 'images/user-icon-black.svg' : 'images/home/user-icon.svg' ?>"
                            alt="User"></a>
                    <a href="#"><img src="<?= $is_green ? 'images/cart-icon-black.svg' : 'images/home/cart-icon.svg' ?>"
                            alt="Cart"></a>
                </div>
            </div>
        </nav>
    </header>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text,
                images,
                lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>