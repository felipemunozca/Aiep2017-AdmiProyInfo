<!-- script que internet que incluye funciones jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script type="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!-- se incluye justo antes del cierre del body -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<!-- script para que el menu de moviles de pliegue y despliegue -->
<script>
	function toggleMobileMenu()
	{
		var $mobileMenu = $('#mobile-main-menu');
		$mobileMenu.slideToggle('fast');
	}

	$(document).ready(function() {
		$('#mobile-menu-button').on('click', toggleMobileMenu);
	});
</script>