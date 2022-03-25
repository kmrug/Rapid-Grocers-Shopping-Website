<!DOCTYPE html>

<html>

<head>
    <?php include('./common_partials/header.php') ?>
    <?php include('./login/partials/plain_nav.php'); ?>
    <?php include('./login/partials/loginheader.php'); ?>
    <br><br><br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center">
                SHOW CART HERE
            </div>
            <div class="d-flex text-center col-1" style="height: 50vh;">
                <div class="vr"></div>
            </div>
            <div class="col-5 mx-auto text-pink fixed">

                <form action="./receipt/receipt.php" method="POST">

                    <h1>Payment Information</h1>
                    <br>
                    <div class="form-group w-75">
                        <label for="cc">Credit Card No.:</label>
                        <input type="number" name="cc" class="form-control" onkeypress="if (this.value.length == 16) return false;" placeholder="Enter your Credit Card number" required>
                        <br>
                        <label for="expiry">Expiry Date:</label>
                        <input type="tel" name="expiry" class="form-control" onkeypress="if (this.value.length == 4) return false;" pattern="0[1-9][2-9]{2}|1[0-2][2-9]{2}" placeholder="Example: 126 [Jan 2026]" required>
                        <br>
                        <label for="cvv">CVV:</label>
                        <input type="tel" name="cvv" class="form-control" onkeypress="if (this.value.length == 3) return false;" pattern="[0-9]{3}" placeholder="3 digit CVV" required>
                        <br>
                        <button type="submit" name="register" value="register" class="btn bg-pink w-100 p-2 text-white btn-lg">
                            Place Order
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="footer fixed-bottom">
        <?php include('./common_partials/footer.php'); ?>
    </div>
</head>

</html>