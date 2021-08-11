$(document).ready(function(){
	$("#add_comment").submit(function(a) {
		a.preventDefault();
		var name = $("#name").val();
        var email = $("#email").val();
		var comment = $("#comment").val();
		$.ajax({
			data: "name=" + name+ "&email=" + email+ "&comment=" + comment,
			type: "POST",
			url: "insert.php",
			success: function(data){
				$("#add_comment")[0].reset();
				var response = '';
				$.ajax({
					type: "get",
					dataType: "html", 
					url: "remember.php",
					success: function(response){
						$("#ajax_response").html(response); 
					}
				});
			}
		});
		
	});
	
});