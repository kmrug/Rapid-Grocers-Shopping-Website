<script src="../../homepage/main/categories.js"></script>
<link rel="stylesheet" href="../../homepage/cart/homeCart.css">
<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-pink">
    <div class="container-fluid">

        <div class="col-2">
            <div>
                <a class="navbar-brand company" href="homepage.php">
                    <img src="../../images/logo2.jpg" alt="logo" width="40" height="30" class="mb-2">
                    Rapid Grocers
                </a>
            </div>
        </div>

        <div class="col-5">
            <div>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search for any product here" id="searchBar">
                    <button class="btn searchButton" type="button" onclick="searchItem(document.getElementById('searchBar').value)">Search</button>
                </form>
            </div>

        </div>
        &emsp;&emsp;&emsp;&emsp;
        <div class="col-1">
            <button id="cart" type="button" data-bs-toggle="modal" data-bs-target="#cartButton" class="text-center btn btn-warning btn-login text-blue w-75">Cart</button>

            <!-- Modal -->
            <div class="modal fade" id="cartButton">
                <div class="modal-dialog modal-dialog-centered">


                    <div class="modal-content">
                        <div class="modal-header text-center border-0">
                            <h2 class="modal-title w-100 fs-1 text-center">Cart</h2>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                        </div>

                        <div id="modalBody" class="modal-body">
                            <h4 class="modal-title text-center fs-6 fw-0">(To go back, just click anywhere outside this form)</h4>
                            <br>
                            <?php include("../../homepage/cart/cart.php"); ?>
                            <script>
                                var cartButton = document.getElementById("cart");
                                var cartProducts;

                                cartButton.onclick = function() {
                                    var main = document.getElementById("modalBody");
                                    var table = document.createElement("table");
                                    table.id = "cartTable";
                                    var itemHead = document.createElement("th");
                                    var itemPrice = document.createElement("th");
                                    var itemQuantity = document.createElement("th");
                                    var row = document.createElement("tr");

                                    table.className = "table";

                                    itemHead.innerHTML = "Item";
                                    itemPrice.innerHTML = "Price";
                                    itemQuantity.innerHTML = "Quantity";

                                    row.appendChild(itemHead);
                                    row.appendChild(itemPrice);
                                    row.appendChild(itemQuantity);
                                    table.appendChild(row);

                                    cartProducts = getCart();
                                    if (cartProducts.length != 0) {                                        
                                        document.getElementById("checkout").disabled = false;                                        
                                    } else {
                                        console.log("blocked")
                                        document.getElementById("checkout").disabled = true;
                                    }

                                    for (i = 0; i < cartProducts.length; i++) {
                                        var tr = document.createElement("tr");
                                        var itemName = document.createElement("td");
                                        var itemPrice = document.createElement("td");
                                        var itemQuantity = document.createElement("td");

                                        itemName.innerHTML = cartProducts[i].name;
                                        itemPrice.innerHTML = "$" + cartProducts[i].price;
                                        itemQuantity.innerHTML = cartProducts[i].quantity;

                                        tr.appendChild(itemName);
                                        tr.appendChild(itemPrice);
                                        tr.appendChild(itemQuantity);
                                        table.appendChild(tr);
                                    }

                                    main.appendChild(table);
                                    main.appendChild(document.createElement("br"));
                                    var price = document.createElement("h4");
                                    price.id = "price"
                                    price.className = "me-auto text-center";
                                    var totalPrice = calculateCart(cartProducts)
                                    price.innerHTML = "Your total is $" + totalPrice;

                                    main.appendChild(price);
                                }

                                $('#cartButton').on('hidden.bs.modal', function() {
                                    document.getElementById("price").remove();
                                    var removeTable = document.getElementById("cartTable");
                                    removeTable.remove();
                                });

                                // var total;
                            </script>
                        </div>

                        <!-- Modal footer -->
                        <div id="footer" class="modal-footer">
                            <script>
                                var footer = document.getElementById("footer");
                                var checkoutButton = document.createElement("button");
                                checkoutButton.id = "checkout";
                                checkoutButton.type = "submit";
                                checkoutButton.name = "checkout";
                                checkoutButton.value = "checkout";
                                checkoutButton.className = "btn btn-pink w-100"
                                checkoutButton.innerHTML = "Checkout";

                                checkoutButton.onclick = function(){
                                    window.location = '../../homepage/checkout/checkout.php'
                                }
                                footer.appendChild(checkoutButton);
                            </script>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="col-2">

            <div class="dropdown w-75">
                <button class="btn btn-md dropdown-toggle box col-12" data-bs-toggle="dropdown">
                    Category
                </button>
                <ul class="dropdown-menu category animate__animated animate__fadeIn">
                    <li>
                        <a id="electronic" class="dropdown-item" onclick="sortCategory(this.id)">
                            <img class="imageFit" src="../../images/electronics.jpg" alt="electronics"><br>
                            <span class="categoryText">
                                Electronics
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="dairy" onclick="sortCategory(this.id)">
                            <img src="../../images/dairy.jpg" alt="dairy" class="imageFit"><br>
                            <span class="categoryText">
                                Dairy
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="fruit" onclick="sortCategory(this.id)">
                            <img src="../../images/fruits.jpg" alt="fruits" class="imageFit"><br>
                            <span class="categoryText">
                                Fruits
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="vegetable" onclick="sortCategory(this.id)">
                            <img src="../../images/vegetables.jpg" alt="vegetables" class="imageFit"><br>
                            <span class="categoryText">
                                Vegetables
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="snack" onclick="sortCategory(this.id)">
                            <img src="../../images/snacks.jpg" alt="snacks" class="imageFit"><br>
                            <span class="categoryText">
                                Snacks
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" id="beverage" onclick="sortCategory(this.id)">
                            <img src="../../images/beverages.jpg" alt="beverages" class="imageFit"><br>
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
                <button class="btn btn-md dropdown-toggle box col-12" data-bs-toggle="dropdown">Menu</button>
                <ul class="dropdown-menu menu animate__animated animate__fadeIn col-10">
                    <li>
                        <a class="dropdown-item" href="../../homepage/login/logout.php">
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
                        <a class="dropdown-item" href="../../homepage/contact/contact.php">
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