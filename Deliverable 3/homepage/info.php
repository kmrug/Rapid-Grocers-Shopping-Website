<!-- <!DOCTYPE html>
<html> -->

<!-- <head>
	
</head> -->

<!-- <body> -->


<!-- <div class="text-center pt-5">
		<button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#newuser">Click to Open Login Modal</button>
	</div> -->


<div id="newuser" class="modal fade">
	<div id="modalBox" class="modal-dialog modal-login modal-dialog-centered modal-md">
		<div class="modal-content">

			<div id="modal-isi-body">

				<div class="modal-header text-center border-0">
					<h4 class="modal-title w-100 fs-1 text-center">Hi There!</h4>
					<!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
				</div>

				<div class="modal-body">
					<h2 class="modal-title text-center fs-6 fw-0">(To go back, just click anywhere outside this form)</h2>
					<br>
					<h3>Personal Details</h3>
					<form method="post">
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
							<input type="tel" name="phone" onkeypress="if (this.value.length == 10) return false;" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="Format: 123-456-7890" required>
						</div>
						<br>
						<button class="btn btn-pink w-100">
							Submit
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "./info/partials/styling.php" ?>
<!-- </body> -->

<!-- </html> -->