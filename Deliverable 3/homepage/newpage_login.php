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

                                    <div id="invalidValues"></div>

                                    <div class="d-grid">
                                        <button name="login" value="signin" class="btn btn-blue btn-login text-uppercase fw-bold" type="submit">Sign In</button>
                                    </div>
                                    <hr>
                                    <span class="col-sm-12 text-white px-5 mx-5 fs-5">
                                        Not a customer yet?
                                        <span class="mx-3 inline-block">
                                            <!-- <button class="reg btn btn-warning btn-login text-uppercase fw-bold px-5 text-blue">Register Now</button> -->

                                            <button id="register" class="reg btn btn-warning btn-login text-uppercase fw-bold px-5 text-blue"><a data-toggle="#newuser" href="info.php#newuser">Register Now</a></button>
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