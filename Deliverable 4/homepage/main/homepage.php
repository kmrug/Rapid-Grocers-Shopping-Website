
<!DOCTYPE html>

<html>

<head>
    <?php include('../../homepage/common_partials/header.php'); ?>
    <script src="../../homepage/main/categories.js"></script>
</head>

<body>
    <?php include('../../homepage/main/welcome.php') ?>
    <br><br><br>
    <div class="container-fluid">
        <div class="row">
            <?php include('../../homepage/common_partials/nav.php'); ?>
        </div>
    </div>

    <script>
        function createCard(itemList) {
            var main = document.createElement("div");
            document.body.appendChild(main);
            for (i = 0; i < itemList.length; i++) {

                if (i % 6 == 0 && i != 0) {
                    var brk = document.createElement("br");
                    var brk2 = document.createElement("br");
                    mainGet.appendChild(brk);
                    mainGet.appendChild(brk2);
                } else {
                    var space = document.createTextNode('\u00A0\u00A0');
                }

                main.className = "container-fluid px-5 pt-2";
                main.id = "main";

                var mainGet = document.getElementById("main");
                var div = document.createElement("div");
                var innerDiv = document.createElement("div");
                var divImage = document.createElement("div");
                var img = document.createElement("img");
                var para = document.createElement("p");
                var addButton = document.createElement("button");

                div.className = 'card shadow-lg cardItem';
                div.style = 'width: 15vw; height: 36vh'
                div.id = "card" + i;

                // divImage.className = '';
                innerDiv.className = 'card-body text-center text-pink fs-5 fw-bold card-text';
                img.className = 'card-img-top';
                para.className = 'price text-center text-pink';
                addButton.className = 'btn btn-primary text-center w-100 addButton';
                addButton.id = "cartButton" + i;
                addButton.name = itemList[i].name;
                addButton.value = itemList[i].price;

                // VEGETABLE NAME HERE
                innerDiv.innerHTML = itemList[i].name;

                // PRICE LISTED HERE
                para.innerHTML = "$" + itemList[i].price;
                addButton.innerHTML = "Add to Cart";
                img.src = itemList[i].image;
                img.alt = "grocery image";

                divImage.appendChild(img);
                div.appendChild(divImage);
                div.appendChild(innerDiv);
                div.appendChild(para);
                div.appendChild(addButton);

                mainGet.appendChild(div);
                mainGet.appendChild(space);
                var t = document.getElementsByClassName("card");
                addButton.onclick = function() {

                    var txt = this.id
                    var cardNo = txt.replace(/\D/g, "");
                    var buttonID = document.getElementsByClassName("addButton" + cardNo);
                    var cardID = document.getElementsByClassName("card" + cardNo);
                    changeAdd("cartButton" + cardNo, "card" + cardNo, this.name, this.value);
                    updateCart(this.name, this.value, 1);
                }
            }

        }

        function changeAdd(buttonID, cardID, itemName, itemValue) {

            var card = document.getElementById(cardID);
            var elementChange = document.getElementById(buttonID);
            var space1 = document.createTextNode('\u00A0\u00A0\u00A0');
            var space2 = document.createTextNode('\u00A0\u00A0\u00A0');

            var div = document.createElement("div");
            // REMOVE ITEM BUTTON
            var btnReduce = document.createElement("button");
            var quantity = document.createElement("input");

            // ADD ITEM BUTTON 
            var btnInc = document.createElement("button");

            div.className = "px-3 pb-1";
            btnReduce.className = "btn btn-danger btnWidth";
            quantity.className = "quantityText";
            btnInc.className = "btn btn-success btnWidth";

            quantity.disabled = true;

            btnReduce.innerHTML = "<img src='../../images/trash.svg' alt='trash icon'>";
            quantity.value = 1;
            btnInc.innerHTML = "<img src='../../images/bag.svg' alt='bag icon'>";
            btnInc.onclick = function() {
                quantity.value = parseInt(quantity.value) + 1
                updateCart(itemName, itemValue, quantity.value);
            };
            btnReduce.onclick = function() {

                if (quantity.value > 1) {

                    quantity.value = parseInt(quantity.value) - 1;
                    updateCart(itemName, itemValue, quantity.value);
                } else if (quantity.value == 1) {
                    card.replaceChild(elementChange, div);
                    updateCart(itemName, itemValue, 0);
                }
            }

            div.appendChild(btnReduce);
            div.appendChild(space1);
            div.appendChild(quantity);
            div.appendChild(space2);
            div.appendChild(btnInc);

            card.replaceChild(div, elementChange);
        }

        var cartArray = [];
        var newItem = true;
        var itemAdded;

        function updateCart(itemName, itemValue, quantity) {
            itemAdded = {};
            if (parseInt(quantity) == 0 && cartArray.length != 0) {
                var indexOf = cartArray.findIndex(i => i.name === itemName);
                cartArray.splice(indexOf, 1);
                newItem = true;

            } else {

                for (i = 0; i < cartArray.length; i++) {

                    if (cartArray[i].name == itemName) {
                        cartArray[i].quantity = parseInt(quantity);
                        newItem = false;
                        break;
                    }
                    newItem = true;
                }

                if (newItem == true) {
                    itemAdded["name"] = itemName;
                    itemAdded["price"] = parseFloat(itemValue);
                    itemAdded["quantity"] = parseInt(quantity);
                    cartArray.push(itemAdded);

                }
            }
        }

        function getCart() {
            return cartArray;
        }
    </script>
    <br>
</body>

</html>