<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-pink">
    <div class="container-fluid">

        <div class="col-2">
            <div>
                <a class="navbar-brand company" href="homepage.php">
                    <img src="../images/logo2.jpg" alt="logo" width="40" height="30" class="mb-2">
                    Rapid Grocers
                </a>
            </div>
        </div>

        <div class="col-6">
            <div>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search for any product here">
                    <button class="btn searchButton" type="button">Search</button>
                </form>
            </div>

        </div>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <div class="col-2">

            <div class="dropdown w-75">
                <button class="btn btn-md dropdown-toggle box col-12" data-bs-toggle="dropdown">
                    Category
                </button>
                <ul class="dropdown-menu category animate__animated animate__fadeIn">
                    <li>
                        <a class="dropdown-item" href="#">
                            <img class="imageFit" src="../images/electronics.jpg" alt="electronics"><br>
                            <span class="categoryText">
                                Electronics
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="../images/dairy.jpg" alt="dairy" class="imageFit"><br>
                            <span class="categoryText">
                                Dairy
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="../images/fruits.jpg" alt="fruits" class="imageFit"><br>
                            <span class="categoryText">
                                Fruits
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="../images/vegetables.jpg" alt="vegetables" class="imageFit"><br>
                            <span class="categoryText">
                                Vegetables
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="../images/snacks.jpg" alt="snacks" class="imageFit"><br>
                            <span class="categoryText">
                                Snacks
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <img src="../images/beverages.jpg" alt="beverages" class="imageFit"><br>
                            <span class="categoryText">
                                Beverages
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-2">
            <div class="dropdown w-75">
                <button class="btn btn-md dropdown-toggle box col-9" data-bs-toggle="dropdown">Menu</button>
                <ul class="dropdown-menu menu animate__animated animate__fadeIn">
                    <li>
                        <a class="dropdown-item" href="checkout.php">
                            <span class="categoryText">
                                Checkout
                            </span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                        </hr>
                    </li>
                    <li>
                        <a class="dropdown-item" onclick="alert('You will now be logged out!')" href="newpage_login.php">
                            <span class="categoryText">
                                Log Out
                            </span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                        </hr>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <span class="categoryText">
                                Contact Us
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>