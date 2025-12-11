
<header class="sticky-header">
        <nav class="navbar navbar-expand-lg ">
            <div class="navbar_left">
                <!-- bars -->
                <div class="hamburger">
                    <span data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>

                <!-- Left: Logo -->
                <a href="#">
                    <img class="header_logo" src="images/header-logo.svg" alt="Logo">
                    <!-- <img class="header_green" src="images/home/header-green.svg" alt="Logo"> -->
                </a>
            </div>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Center + Right -->
            <div class="collapse navbar-collapse justify-content-between" id="mainNavbar">

                <!-- Center Links -->
                <ul class="mx-auto nav_links">
                    <li><a href="#">for her</a></li>
                    <li><a href="#">for him</a></li>
                    <li><a href="#">for home</a></li>
                    <li><a href="#">rituals</a></li>
                    <li><a href="#">editions</a></li>
                    <li><a href="#">the Atelier</a></li>
                </ul>

                <!-- Right Side Icons -->
                <div class="navbar_right">
                    <a href="#"><img src="images/home/search-icon.svg" alt="Search"></a>
                    <a href="#"><img src="images/home/user-icon.svg" alt="User"></a>
                    <a href="#"><img src="images/home/cart-icon.svg" alt="Cart"></a>
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
                Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images,
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