$(document).ready(function() {
	console.log("Test");

	$('#event_time').datetimepicker({
		format: 'YYYY-MM-DD HH:mm:ss'
	});

	$('#event_description').summernote({
		height: 300,
	});
});
