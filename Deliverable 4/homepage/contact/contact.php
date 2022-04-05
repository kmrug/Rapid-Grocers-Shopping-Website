<!DOCTYPE html>

<html>

<head>
    <?php include('../../homepage/common_partials/header.php') ?>
    <?php include('../../homepage/common_partials/plain_nav.php'); ?>
    <?php include('../../homepage/common_partials/plain_header.php'); ?>
    <br><br><br><br><br><br>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 text-center">
                <h1 style="color:rgb(248, 77, 105)">Reach out to us</h1>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-home" style="font-size:48px;color:rgb(255, 163, 179)"></i><br>
                                    <h5 class="text-center text-pink">Mailing Address</h5>
                                    <p class="card-text">
                                    <p class="text-center text-pink">
                                        2413 Carling Avenue, K1Z 7B5<br>
                                        Ottawa, Canada
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-phone" style="font-size:48px;color:rgb(255, 163, 179)"></i><br>
                                    <h5 class="text-center text-pink">Phone number</h5>
                                    <p class="card-text">
                                    <p class="text-center text-pink">+1 (613)-521-2378</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-instagram" style="font-size:48px;color:rgb(255, 163, 179)"></i><br>
                                    <h5 class="text-center text-pink">Instagram</h5>
                                    <p class=" card-text">
                                    <p class="text-center text-pink">@rapidgrocers</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <i class="fa fa-envelope" style="font-size:48px;color:rgb(255, 163, 179)"></i><br>
                                    <h5 class="text-center text-pink">Email address</h5>

                                    <p class="card-text">

                                    <p class="text-center text-pink">rapidgrocers@gmail.com</p>

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="d-flex text-center col-1" style="height: 65vh;">
                <div class="vr ms-5"></div>
            </div>

            <div class="col-5 mx-auto text-pink">

                <form action="connect.php" method="POST">

                    <h1>Contact Us</h1>
                    <br>
                    <div class="form-group w-75">

                        <label for="name">Full Name:</label>
                        <br>
                        <input type="text" id="name" name="name" size="50" class="form-control" placeholder="Enter your full name" required />
                        <br>

                        <label for="email">Enter your e-mail address:</label>
                        <br>
                        <input type="email" id="email" name="email" size="50" class="form-control" placeholder="Example: global@global.com" required />
                        <br>

                        <label for="textareaChars">Comments:</label>
                        <br>
                        <textarea id="description" rows="8" name="comment" maxlength="1000" class="form-control" placeholder="Let us know how we can improve" required></textarea>

                        <p id="remaining"></p>
                        <br>
                        <button id="submit" type="submit" name="contact" value="contact" class="btn bg-pink w-100 p-2 text-white btn-lg">
                            Submit
                        </button>

                        <script type="text/javascript">
                            $(function() {
                                var maxlength = 1000;
                                $("#description").keypress(function() {
                                    var currentlength = $(this).val().length;
                                    var remaining = maxlength - currentlength;

                                    $("#remaining").html("Remaining characters " + remaining + "/1000");
                                });
                            });                           
                        </script>
                    </div>
                </form>
            </div>
        </div>
    </div>


    </head>

</html>