
<div id="filter-date">
<link rel="stylesheet" href="includes/css/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		
		var dtInicial;
		var dtFinal;
		
	$( function() {
	var dateFormat = "dd/mm/yy",
	from = $( "#checkin" ).datepicker({
		dateFormat: 'dd/mm/yy',
	  defaultDate: "+1w",
	  numberOfMonths: 1
	}).on( "change", function() {
	  to.datepicker( "option", "minDate", getDate( this ) );
		dtInicial = this.value;
		$('#checkin2').val(dtInicial);
	}),
	to = $( "#checkout" ).datepicker({
		dateFormat: 'dd/mm/yy',
	defaultDate: "+1w",
	numberOfMonths: 1
	}).on( "change", function() {
	from.datepicker( "option", "maxDate", getDate( this ) );
		dtFinal = this.value;
		$('#checkout2').val(dtFinal);
	});

	function getDate( element ) {
		var date;
		try {
			date = $.datepicker.parseDate( dateFormat, element.value );
			//alert(element.value);
		} catch( error ) {
			date = null;
		}

		return date;
	}
	} );
		
		$(document).ready(function(){
			document.getElementById('search').addEventListener('click', function() {
		  document.getElementById('form-date').submit();
		});
		})
		
	</script>
	
	<header class="ctr">
		
		<form action="hoteis.php" method="post" class="form-reserva" id="form-date">
			<h5>Select dates</h5>
			<div>
				<input type="text" id="checkin" name="checkin" placeholder="CHECK-IN">
				<input type="text" id="checkout" name="checkout" placeholder="CHECK-OUT">
				<input type="hidden" id="checkin2" name="checkin2">
				<input type="hidden" id="checkout2" name="checkout2">
			</div>
			<span class="ctr">
				<input type="button" id="search" value="SEARCH" class="amc">
			</span>
		</form>
		
	</header>

</div>