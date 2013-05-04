$(function(){
	$('#randomInsert').submit(function() {
		var url = $(this).attr('action');
		var data = $(this).serialize();
		$.post(url,data,function(){
			alert(data);
		});
		return false;
	});
});
