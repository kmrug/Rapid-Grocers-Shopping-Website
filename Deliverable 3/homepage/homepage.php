<!DOCTYPE html> 

<html>
    <head>
        <?php include('./common_partials/header.php'); 
        // include ('connect.php');
        // include_once('common_partials/dbh.php');
        //$conn = OpenCon();
         //$result = pg_query($conn, "SELECT * FROM user_info");
        //$rec = pg_select($conn, 'post_log', $_POST);
        //echo "console.log(var_dump($rec))";
        // $rows = pg_select($conn, 'SELECT * FROM user_info', array:{puts [format "%5d %s" $array(control) $array(result)]}, $result);

        // echo $rows . " row(s) returned.\n";
        
        // while ($row = $result->fetch_assoc()) {
        //     echo $row['classtype']."<br>";
        // }
        // echo "console.log($rows)";

        ?>
    </head>

    <body onload="createCard(96)">
        <br><br><br>
        <div class="container-fluid">
            <div class="row">
                <?php include('./common_partials/nav.php'); ?>
            </div>
        </div>
        <div id="main" class="container-fluid px-5 pt-2"></div>
        
        <script>

            function createCard(numCards) {
                
                for (i = 0; i < numCards; i++) {

                    if (i % 8 == 0 && i != 0){
                        var brk = document.createElement("br");
                        var brk2 = document.createElement("br");
                        main.appendChild(brk);
                        main.appendChild(brk2);
                    }

                    else {
                        var space = document.createTextNode('\u00A0\u00A0');
                    }

                    
                    var main = document.getElementById("main");
                    var div = document.createElement("div");
                    var innerDiv = document.createElement("div");
                    var img = document.createElement("img");
                    var para = document.createElement("p");
                    var addButton = document.createElement("button");

                    div.className = 'card shadow-lg cardItem';
                    div.id = "card" + i;
                    
                    innerDiv.className = 'card-body text-center';
                    img.className = 'card-img-top';
                    para.className = 'price text-center';
                    addButton.className = 'btn btn-primary text-center w-100 addButton';
                    addButton.id = "cartButton" + i;
                    
                    innerDiv.innerHTML = "*Vegetable Name*"; //NEED TO IMPLEMENT
                    para.innerHTML = "*Price*"; //NEED TO IMPLEMENT FURTHER 
                    addButton.innerHTML = "Add to Cart";
                    img.src = "../images/stock.jpg";
                    img.alt = "sample image";

                    div.appendChild(img);
                    div.appendChild(innerDiv);
                    div.appendChild(para);
                    div.appendChild(addButton);

                    main.appendChild(div);
                    main.appendChild(space);

                    addButton.onclick = function(){
                        var txt = this.id
                        var cardNo = txt.replace(/\D/g, "");
                        var buttonID = document.getElementsByClassName("addButton" + cardNo);
                        var cardID = document.getElementsByClassName("card" + cardNo);
                        changeAdd("cartButton" + cardNo, "card" + cardNo);
                    }
                }

            }

            function changeAdd(buttonID, cardID) {

                var card = document.getElementById(cardID);
                var elementChange = document.getElementById(buttonID);
                var space1 = document.createTextNode('\u00A0\u00A0\u00A0');
                var space2 = document.createTextNode('\u00A0\u00A0\u00A0');

                var div = document.createElement("div");
                var btnReduce = document.createElement("button");
                var quantity = document.createElement("input");
                var btnInc = document.createElement("button");

                div.className = "px-2 pb-1";
                btnReduce.className = "btn btn-danger btnWidth";
                quantity.className = "quantityText text-center";
                btnInc.className = "btn btn-success btnWidth";

                quantity.disabled = true;
                
                btnReduce.innerHTML = "<img src='../images/trash.svg' alt='trash icon'>";
                quantity.value = 1;
                btnInc.innerHTML = "<img src='../images/bag.svg' alt='bag icon'>";

                div.appendChild(btnReduce);
                div.appendChild(space1);
                div.appendChild(quantity);
                div.appendChild(space2);
                div.appendChild(btnInc);

                card.replaceChild(div, elementChange);
            }
        </script>
        <br>
        <?php include('./common_partials/footer.php'); ?>
    </body>
    
</html>