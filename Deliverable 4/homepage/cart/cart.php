<!DOCTYPE html>

<html>

<body>
    <script>
        var myCart;

        function calculateCart(cartProducts) {
            sessionStorage.setItem(myCart, JSON.stringify(cartProducts));
            if (cartProducts.length == 0) {
                return 0
            } else {
                total = 0;
                for (i = 0; i < cartProducts.length; i++) {
                    total += cartProducts[i].price * cartProducts[i].quantity
                }
                return Number.parseFloat(total).toFixed(2);
            }
        }

        function getFinalCart() {
            var getArray = sessionStorage.getItem(myCart);
            var parseArray = JSON.parse(getArray);
            return parseArray;
        }
    </script>
</body>

</html>