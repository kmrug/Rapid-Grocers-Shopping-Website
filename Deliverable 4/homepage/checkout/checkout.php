<!DOCTYPE html>

<html>

<head>

    <?php include('../../homepage/common_partials/header.php') ?>
    <?php include('../../homepage/common_partials/plain_nav.php'); ?>
    <?php include('../../homepage/common_partials/plain_header.php'); ?>
    <?php include('../../homepage/cart/cart.php') ?>

    <style>
        <?php include('../../homepage/checkout/checkout.css'); ?>
    </style>
</head>

<body>
    <br><br><br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center">
                <h1 style="color:rgb(248, 77, 105);">Shopping Cart</h1><br>

                <div id="wrapper" class="tableFixHead">
                    <script>
                        var main = document.getElementById("wrapper");
                        var table = document.createElement("table");
                        table.id = "checkoutCart";
                        var itemHead = document.createElement("th");
                        var itemPrice = document.createElement("th");
                        var itemQuantity = document.createElement("th");
                        var subTotal = document.createElement("th");
                        var row = document.createElement("tr");

                        table.className = "table";

                        itemHead.innerHTML = "Item";
                        itemPrice.innerHTML = "Price";
                        itemQuantity.innerHTML = "Quantity";
                        subTotal.innerHTML = "Subtotal";

                        row.appendChild(itemHead);
                        row.appendChild(itemPrice);
                        row.appendChild(itemQuantity);
                        row.appendChild(subTotal);
                        table.appendChild(row);

                        var cartProducts = getFinalCart();

                        for (i = 0; i < cartProducts.length; i++) {
                            var tr = document.createElement("tr");
                            var itemName = document.createElement("td");
                            var itemPrice = document.createElement("td");
                            var itemQuantity = document.createElement("td");
                            var subTotal = document.createElement("td");

                            itemName.innerHTML = cartProducts[i].name;
                            itemPrice.innerHTML = "$" + cartProducts[i].price;
                            itemQuantity.innerHTML = cartProducts[i].quantity;
                            subTotal.innerHTML = "$" + Number.parseFloat(cartProducts[i].price * cartProducts[i].quantity).toFixed(2);

                            tr.appendChild(itemName);
                            tr.appendChild(itemPrice);
                            tr.appendChild(itemQuantity);
                            tr.appendChild(subTotal);
                            table.appendChild(tr);
                        }

                        main.appendChild(table);

                        if (cartProducts.length < 10) {
                            var priceWrapper = document.createElement("div");
                            main.appendChild(priceWrapper);
                            var price = document.createElement("h4");
                            price.id = "price"
                            price.className = "me-auto text-pink";
                            var totalPrice = calculateCart(cartProducts);
                            price.innerHTML = "Your current subtotal is $" + totalPrice;

                            priceWrapper.appendChild(price);
                        }
                    </script>
                </div>
                <br>
                <div id="showPrice"></div>
                <script>
                    if (cartProducts.length >= 10) {
                        var priceWrapper = document.getElementById("showPrice");
                        var price = document.createElement("h4");
                        price.id = "price"
                        price.className = "me-auto";
                        var totalPrice = calculateCart(cartProducts)
                        price.innerHTML = "Your current subtotal is $" + totalPrice;

                        priceWrapper.appendChild(price);
                    }
                </script>



            </div>
            <div class="d-flex text-center col-1" style="height: 70vh;">
                <div class="vr ms-5"></div>
            </div>
            <div class="col-5 mx-auto text-pink fixed">

                <!-- <form action="../../homepage/receipt/receipt.php" method="POST"> -->
                <form action="../../homepage/common_partials/connect.php" method="POST">

                    <h1>Payment Information</h1>
                    <br><br><br><br>
                    <div class="form-group w-75">
                        <label for="cc">Credit Card No.:</label>
                        <input type="text" name="cc" title="16 digit number required" class="form-control" id="cc" minlength="16" maxlength="16" onkeypress="formatCC()" placeholder="Enter your 16 digit Credit Card number" required>
                        <br>
                        <label for="expiry">Expiry Date:</label>
                        <input type="tel" name="expiry" title="Invalid expiry date" class="form-control" onkeypress="if (this.value.length == 4) return false;" pattern="0[1-9][2-9]{2}|1[0-2][2-9]{2}" placeholder="Example: 0126 [Jan 2026]" required>
                        <br>
                        <label for="cvv">CVV:</label>
                        <input type="tel" name="cvv" class="form-control" onkeypress="if (this.value.length == 3) return false;" pattern="[0-9]{3}" placeholder="3 digit CVV (printed on the backside of the card)" required>
                        <br>
                        <input type="checkbox" id="saveCC" name="saveCC" value="saveCC" checked>
                        &nbsp;
                        Would you like to save your payment information?</input>
                        <br><br>
                        <button type="submit" name="payment" value="payment" class="btn bg-pink w-100 p-2 text-white btn-lg">
                            Place Order
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function formatCC() {

            var cc = document.getElementById("cc");
            var val = cc.value;

            if (val != '') {
                if (isNaN(val)) {

                    // Set input value empty
                    ip.value = "";

                    return false;
                } else {
                    return true
                }
            }
        }
    </script>
    </head>

</html>