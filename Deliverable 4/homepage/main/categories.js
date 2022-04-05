// List of all products 

var nameDB;
var priceDB;
var categoyDB;
var imageDB;
var products = [];
var getData;

window.onload = function(){
    createCard(products)
}

function displayAll() {
    var returnedArray = getArray();
    for (i = 0; i < returnedArray.length; i++) {

        var item = {};
        item["name"] = returnedArray[i][0];
        item["price"] = returnedArray[i][1];
        item["category"] = returnedArray[i][2];
        item["image"] = returnedArray[i][3];
        products.push(item);
    }
}

function searchItem(value){
    var customSearch = [];
    for (i = 0; i < products.length; i++){
        if (products[i].name.toLowerCase().includes(value.toLowerCase())){
            customSearch.push(products[i]);
        }
    }
    var getMain = document.getElementById("main");
    getMain.remove();
    createCard(customSearch);
}

function sortCategory(value) {

    // var getCard;
    var sorted = [];
    for (i = 0; i < products.length; i++) {
        // getCard = document.getElementById("card" + i);
        // console.log(typeof getCard.value)
        if (products[i].category == value) {
            // getCard.style.display = "none";
            sorted.push(products[i]);
        }
    }

    var getMain = document.getElementById("main");
    getMain.remove();
    createCard(sorted);    
}

function getArray() {

    jQuery.ajax({
        type: "POST",
        url: '../../homepage/common_partials/connect.php',
        dataType: 'json',
        data: { functionname: 'createProducts', arguments: [] },
        success: function (data) {
            getData = data;
        },
        async: false
    });

    return getData;
}

displayAll();