<?php session_start();
// include_once "../../homepage/common_partials/connect.php";s
$name = $_SESSION['name'];
?>


<body>
    <script>
        window.addEventListener('load', () => {
            $('#welcomeModal').modal('toggle');
        });
    </script>


<div class="modal fade" id="welcomeModal">
        <div id="welcome" class="modal-dialog modal-auto">
            <div class="modal-content">

                <div class="modal-body">
                    <h1 class="modal-title text-center">Welcome <br><b><?php echo "$name" ?></b> </h1>
                </div>

            </div>
        </div>
    </div>




</body>