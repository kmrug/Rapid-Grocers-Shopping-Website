<html>

<head>
	<title>Simple invoice in PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="stylereceipt.css">
</head>

<body>
	<?php include('./login/partials/loginheader.php'); ?>
	<div class="invoice">
		<br><br><br><br>
		<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-pink py-1">
			<div class="container-fluid">

				<div class="col-12 ">
					<div class="row">
						<a class="navbar-brand company text-center" href="#">
							<img src="../images/logo2.jpg" alt="logo" width="40" height="30">
							Rapid Grocers
						</a>
					</div>
				</div>
			</div>
		</nav>


		<div class="info">
			<h2>Reciept:</h2>

			<p>Name : Mr. Walter White</p>

		</div>

		<div class="table-responsive"></div>
		<table class="table table-hover">
			<tr>
				<th>Item</th>
				<th>Qantity</th>
				<th>Unit price</th>
				<th>Total Price</th>
			</tr>

			<?php
			$total = 0;
			$tax = 21;

			$articles = array(
				array("Item 1", "Item 2", "Item 3", "Item 4", "Item 5"),
				array(3, 10, 5, 1, 7),
				array(25, 15, 50, 75, 7)
			);

			for ($a = 0; $a < 5; $a++) {
				$description = $articles[0][$a];
				$amount = $articles[1][$a];
				$unit_price = number_format($articles[2][$a], 2);
				$total_price = number_format($amount * $unit_price, 2);
				$total += $total_price;
				echo ("<tr class='text-center'>");
				echo ("<td>$description</td>");
				echo ("<td class='text-center'>$amount</td>");
				echo ("<td class='text-right'>$$unit_price</td>");
				echo ("<td class='text-right'>$$total_price</td>");
				echo ("</tr>");
			}

			?>

		</table>
		<br>
		<hr>
		<table class="table table-hover">
			<?php
			echo ('<br>');
			echo ("<tr class='text-center'>");
			echo ("<td><b>Sub total</b></td>");
			echo ("<td><b>$" . number_format($total, 2) . "</b></td>");
			echo ("</tr>");
			echo ("<tr class='text-center'>");
			echo ("<td><b>Tax</b></td>");
			echo ("<td><b>$" . number_format(($total * $tax) / 100, 2) . "</b></td>");
			echo ("</tr>");
			echo ("<tr class='text-center'>");
			echo ("<td><b>TOTAL</b></td>");
			echo ("<td><b>$" . number_format(((($total * $tax) / 100) + $total), 2) . "</b></td>");
			echo ("</tr>");
			?>
		</table>

	</div>
	<footer>
		<div class="footer1">
			<center>
				<p>Thank you for shopping with us</p>
			</center>
		</div>
	</footer>

	<footer>
		<div class="footer2">
			<center>
				<p>Copyright &copy RAPID GROCERS</p>
			</center>
			<center>
				<p>For returns, please send to this address within 30 days - 15 Luffy Lane Skypia Island 10749</br></p>
			</center>
		</div>
	</footer>
</body>

</html>