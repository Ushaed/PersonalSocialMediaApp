<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unsplash</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<body>
	<br>
	<div id="liked_photos" class="text-center">
		
	</div>
	<script type="text/javascript">
		let  html = '';
		var jqxhr = $.getJSON( "https://api.unsplash.com/users/ushaed/likes/?client_id=0114f61635455656dd2f0dbb3aa89c85e6be74ee6c03e5175e0501bbdab48f54", function(data) {
			console.log( data );
			$.each(data, function(key,value){
				html += "<p><strong>"+ value.user.name +"</strong></p><img src='" + value.urls.small + "' alt='" + value.alt_description + "'><p>"+ value.description+"</p></br></br>";
			});
			$("#liked_photos").html(html);
		});
	</script>
</body>
</html>