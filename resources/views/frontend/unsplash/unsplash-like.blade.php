<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unsplash</title>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<body>
	<h1>This is me....</h1>
	<script type="text/javascript">
		var jqxhr = $.getJSON( "https://api.unsplash.com/users/ushaed/likes/?client_id=0114f61635455656dd2f0dbb3aa89c85e6be74ee6c03e5175e0501bbdab48f54", function(data) {
			console.log( data );
		})
	</script>
</body>
</html>