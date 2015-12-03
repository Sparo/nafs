$(document).ready(function() {

	/*************************************
	 * Datepicker
	 *************************************/
	$('#event_start_time').datetimepicker({
		format: 'YYYY-MM-DD HH:mm:ss'
	});
	$('#event_end_time').datetimepicker({
		format: 'YYYY-MM-DD HH:mm:ss',
		useCurrent: false
	});
	$("#event_start_time").on("dp.change", function(e) {
		$('#event_end_time').data("DateTimePicker").minDate(e.date);
	});
	$("#event_end_time").on("dp.change", function(e) {
		$('#event_start_time').data("DateTimePicker").maxDate(e.date);
	});

	/*************************************
	 * File input feeadback
	 *************************************/
	$('input[type="file"]').on('change', function(event) {
		$(".file-indicator").html(event.target.files[0].name);
		$(".file-indicator").parent().removeClass('btn-default').addClass('btn-success');
	});

});
