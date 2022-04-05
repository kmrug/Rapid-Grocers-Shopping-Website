<!DOCTYPE html>
<html>

<head>
	<?php include('../../homepage/common_partials/header.php') ?>
	<?php include('../../homepage/common_partials/plain_header.php'); ?>
	<?php include('../../homepage/common_partials/plain_nav.php'); ?>
	<br><br><br><br><br><br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
				<h1 style="color:rgb(248, 77, 105);">Reciept</h1>
				<br>

				<style>
					table {
						border-collapse: collapse;
						width: 100%;
					}

					th,
					td {
						padding: 8px 16px;
						border: 1px solid #ccc;
						color: rgb(248, 77, 105);
						text-align: center;
						height: 30px;
					}

					th {
						background: rgb(248, 77, 105);
						color: rgb(248, 77, 105);
					}

					table,
					th,
					td {
						border: 1px solid black;
						border-collapse: collapse;
					}
				</style>
</head>

<body>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./stylereceipt.css">
	<div class="invoice">

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

</body>
</div>

</html>