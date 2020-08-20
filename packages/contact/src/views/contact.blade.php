<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="{{route('contact')}}">
		@csrf
		<input type="text" name="name">
		<input type="text" name="email">
		<textarea name="message" cols="30" rows="10"></textarea>
		<input type="submit" value="Submit">
	</form>
</body>
</html>