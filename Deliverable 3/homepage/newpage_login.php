<!DOCTYPE html>

<html>

<head>
    <?php include('./login/partials/loginheader.php'); ?>
    <script>
        $(document).ready(function() {
            $("#register").click(function() {
                $("#newuser").modal();
                load_page('info.php');
            });
        });

        function load_page(url) {
            $('#modal-isi-body').load(url, function() {});
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('login/partials/plain_nav.php'); ?>
        </div>
    </div>
    <br><br><br><br><br>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-11 mx-auto">
                <div class="card shadow my-5">
                    <div>
                        <div class="card-header varelaFont bg-blue">
                            <span class="col-sm-12 text-center" style="display: inline-block;">
                                Welcome to Rapid Grocers
                            </span>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img id="storeImage" src="../images/veggie.png" alt="grocery image" class="card-img">
                        </div>
                        <div class="col-md-6 bg-pink loginWidth">
                            <div class="card-body p-4">
                                <h3 class="card-title text-center mb-3 text-white fs-1">Sign In</h3>

                                <form action="connect.php" method="POST">
                                    <div class="text-white mb-3 fs-4">
                                        <label for="floatingInput">Username:</label>
                                        <input name="username" type="email" class="form-control" id="floatingInput" placeholder="Enter email address" required>
                                        <!-- change input type to email -->
                                    </div>
                                    <div class="text-white mb-5 fs-4">
                                        <label for="floatingPass">Password:</label><br>
                                        <input name="password" type="password" class="form-control" id="floatingPass" placeholder="Enter password" required>
                                    </div>

                                    <div class="d-grid">
                                        <button name="login" value="signin" class="btn btn-blue btn-login text-uppercase fw-bold" type="submit">Sign In</button>
                                    </div>
                                    <hr>
                                    <span class="col-sm-12 text-white px-5 mx-5 fs-5">
                                        Not a customer yet?
                                        <span class="mx-3 inline-block">
                                            <button id="register" class="reg btn btn-warning btn-login text-uppercase fw-bold px-5 text-blue" data-bs-toggle="modal" data-bs-target="#newuser">Register Now</button>
                                            <?php include "./info/partials/styling.php" ?>
                                            <div id="newuser" class="modal fade">
                                                <div id="modalBox" class="modal-dialog modal-login modal-dialog-centered modal-md">
                                                    <div class="modal-content">

                                                        <div class="modal-header text-center border-0">
                                                            <h4 class="modal-title w-100 fs-1 text-center">Hi There!</h4>
                                                        </div>

                                                        <div class="modal-body">
                                                            <h2 class="modal-title text-center fs-6 fw-0">(To go back, just click anywhere outside this form)</h2>
                                                            <br>
                                                            <h3>Personal Details</h3>
                                                            <form action="connect.php" method="post">
                                                                <div class="form-group">
                                                                    <label for="name">Full Name:</label>
                                                                    <input type="text" name="name" class="form-control" placeholder="Enter your Full Name" required>
                                                                    <br>
                                                                    <label for="e-mail">E-mail Address (Your e-mail address will be your username) :</label>
                                                                    <input type="email" name="e-mail" class="form-control" placeholder="E-mail address" required>
                                                                    <br>
                                                                    <label for="name">Create a Password:</label>
                                                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                                    <br>
                                                                </div>

                                                                <h3>Payment Information</h3>

                                                                <div class="form-group">
                                                                    <label for="cc">Credit Card No.:</label>
                                                                    <input type="number" name="cc" class="form-control" onkeypress="if (this.value.length == 16) return false;" placeholder="Enter your Credit Card number" required>
                                                                    <br>
                                                                    <label for="expiry">Expiry Date:</label>
                                                                    <input type="tel" name="expiry" class="form-control" onkeypress="if (this.value.length == 5) return false;" pattern="0[1-9]/[2-9]{2}|1[0-2]/[2-9]{2}" placeholder="Format: MM/YY required" required>
                                                                    <br>
                                                                    <label for="cvv">CVV:</label>
                                                                    <input type="tel" name="cvv" class="form-control" onkeypress="if (this.value.length == 3) return false;" pattern="[0-9]{3}" placeholder="3 digit CVV" required>
                                                                    <br>
                                                                </div>
                                                                <h3>Delivery Address</h3>

                                                                <div class="form-group">
                                                                    <label for="address">Delivery Address:</label>
                                                                    <input id="autocomplete" type="text" name="address" class="form-control" placeholder="Enter your address here" required>
                                                                    <br>
                                                                    <label for="phone">Phone Number:</label>
                                                                    <input type="tel" name="phone" onkeypress="if (this.value.length == 10) return false;" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" placeholder="Please enter your 10 digit number" required>
                                                                </div>
                                                                <br>
                                                                <button data-bs-dismiss="modal" class="btn btn-pink w-100">
                                                                    Submit
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

<div class="footer fixed-bottom">
    <?php include('./common_partials/footer.php'); ?>
</div>

</html>