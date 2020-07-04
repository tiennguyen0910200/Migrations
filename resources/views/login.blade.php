<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
</head>
<body>
	<form action="/login" method="POST">
		@csrf
		<input type="text" name="username" placeholder="nhap username">
		<input type="password" name="password" placeholder="nhap password">
        <button type="submit">Log in</button>
	</form>
	

</body>
</html>