<script>window.onload = function(){
	initialize()
};</script> 
<link rel="stylesheet" href="./info/styleinfo.css">

<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDAdBqLlhoX7scG94JPyeUFCesaYgW1iQ0"></script>
<script>
	var autocomplete;

	function initialize() {
		autocomplete = new google.maps.places.Autocomplete(
			(document.getElementById('autocomplete')), {
				types: ['geocode'],
				componentRestrictions: {
					country: "ca"
				}
			});
		google.maps.event.addListener(autocomplete, 'place_changed', function() {

		});
	}
</script>

<!-- <script type='text/javascript'>
	(function() {
		'use strict';

		function remoteModal(idModal) {
			var vm = this;
			vm.modal = $(idModal);

			if (vm.modal.length == 0) {
				return false;
			}

			if (window.location.hash == idModal) {
				openModal();
			}

			var services = {
				open: openModal,
				close: closeModal
			};

			return services;
			///////////////

			// method to open modal
			function openModal() {
				vm.modal.modal('show');
			}

			// method to close modal
			function closeModal() {
				vm.modal.modal('hide');
			}
		}
		Window.prototype.remoteModal = remoteModal;
	})();

	$(function() {
		window.remoteModal('#newuser');
	});
</script> -->

