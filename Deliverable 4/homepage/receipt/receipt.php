<?php
session_start();
include_once '../../homepage/common_partials/connect.php';
$name = $_SESSION['name'];
$uid =  $_SESSION['userID'];
?>
<!DOCTYPE html>
<html>

<head>
	<?php include('../../homepage/common_partials/header.php') ?>
	<?php include('../../homepage/common_partials/plain_nav.php'); ?>
	<?php include('../../homepage/common_partials/plain_header.php'); ?>
	<?php include('../../homepage/cart/cart.php') ?>

	<?php
	$resultDel = pg_query($conn, "SELECT address FROM delivery WHERE user_id = '$uid'");
	$resultPhone = pg_query($conn, "SELECT phone_no FROM delivery WHERE user_id = '$uid'");
	$arrDel = pg_fetch_all_columns($resultDel);
	$arrPhone = pg_fetch_all_columns($resultPhone);
	$delivery = $arrDel[0];
	$phone = $arrPhone[0];
	?>
	<style>
		<?php include('../../homepage/checkout/checkout.css'); ?>
	</style>
</head>

<body>
	<br><br><br><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-5 text-center">

				<h1 style="color:rgb(248, 77, 105);">Thank You</h1><br>
				<h3 style="color:rgb(248, 77, 105);">We are processing your order</h3><br><br>
				<br><br>
				<h2 class="colorBlue">The order will be delivered to: </h2>

				<h3 class="colorBlue">
					<?php
					$areaCode = substr($phone, 0, 3);
					$sub1 = substr($phone, 3, 3);
					$sub2 = substr($phone, 6);
					echo "<b>$name <br> $delivery <br> ($areaCode)-$sub1-$sub2</b>";
					?>
				</h3>
				<br><br>
				<h2 class="colorBlue">Your order is scheduled for:</h2>
				<h3 class="colorBlue"><b>Thursday, 16:00</b></h3>


			</div>

			<div class="d-flex text-center col-1 ms-2" style="height: 70vh;">
				<div class="vr"></div>
			</div>

			<div class="col-5 text-pink">
				<h1 class="text-center">Reciept</h1>
				<br>

				<div id="wrapper" class="tableReceipt">
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
						var amount = calculateCart(cartProducts);


						if (cartProducts.length < 8) {
							var brk1 = document.createElement("br");
							var brk2 = document.createElement("br");
							var hr = document.createElement("hr");
							main.appendChild(brk1);
							main.appendChild(hr);
							main.appendChild(brk2);


							var priceWrapper = document.createElement("div");
							main.appendChild(priceWrapper);
							var table = document.createElement("table");
							var subtotal = document.createElement("td");
							var subPrice = document.createElement("td");
							var rowSub = document.createElement("tr");

							subtotal.innerHTML = "Subtotal";
							subPrice.innerHTML = '$' + amount;

							rowSub.appendChild(subtotal);
							rowSub.appendChild(subPrice);


							var tax = document.createElement("td");
							var taxPrice = document.createElement("td");
							var rowTax = document.createElement("tr");

							var taxValue = Number.parseFloat(amount * 0.13).toFixed(2);
							tax.innerHTML = "Tax";
							taxPrice.innerHTML = '$' + taxValue;

							rowTax.appendChild(tax);
							rowTax.appendChild(taxPrice);
							table.appendChild(rowTax);

							var total = document.createElement("td");
							var totalPrice = document.createElement("td");
							var rowTotal = document.createElement("tr");

							let finalAmt = Number.parseFloat(parseFloat(amount) + parseFloat(taxValue)).toFixed(2);
							total.innerHTML = "Total";
							totalPrice.innerHTML = "$" + finalAmt;

							rowTotal.appendChild(total);
							rowTotal.appendChild(totalPrice);

							subtotal.className = "equalWidth";
							subPrice.className = "equalWidth";
							tax.className = "equalWidth";
							taxPrice.className = "equalWidth";
							total.className = "equalWidth";
							totalPrice.className = "equalWidth";

							table.appendChild(rowSub);
							table.appendChild(rowTax);
							table.appendChild(rowTotal);

							priceWrapper.appendChild(table);
						}
					</script>
				</div>
				<!-- <br> -->
				<div id="finalWrapper">
					<br>
				</div>
				<script>
					if (cartProducts.length >= 8) {
						var priceWrapper = document.getElementById("finalWrapper");
						priceWrapper.visibility = "hidden";
						var brk1 = document.createElement("br");
						var hr = document.createElement("hr");

						priceWrapper.appendChild(hr);
						priceWrapper.appendChild(brk1);
						var table = document.createElement("table");
						var subtotal = document.createElement("td");
						var subPrice = document.createElement("td");
						var rowSub = document.createElement("tr");

						subtotal.innerHTML = "Subtotal";
						subPrice.innerHTML = '$' + amount;

						rowSub.appendChild(subtotal);
						rowSub.appendChild(subPrice);


						var tax = document.createElement("td");
						var taxPrice = document.createElement("td");
						var rowTax = document.createElement("tr");

						var taxValue = Number.parseFloat(amount * 0.13).toFixed(2);
						tax.innerHTML = "Tax";
						taxPrice.innerHTML = '$' + taxValue;

						rowTax.appendChild(tax);
						rowTax.appendChild(taxPrice);
						table.appendChild(rowTax);

						var total = document.createElement("td");
						var totalPrice = document.createElement("td");
						var rowTotal = document.createElement("tr");

						let finalAmt = Number.parseFloat(parseFloat(amount) + parseFloat(taxValue)).toFixed(2);
						total.innerHTML = "Total";
						totalPrice.innerHTML = "$" + finalAmt;

						rowTotal.appendChild(total);
						rowTotal.appendChild(totalPrice);

						table.appendChild(rowSub);
						table.appendChild(rowTax);
						table.appendChild(rowTotal);

						priceWrapper.appendChild(table);
					}
				</script>
			</div>
		</div>
	</div>
	</div>

</body>


</html>