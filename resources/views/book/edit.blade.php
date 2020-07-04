<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="{{'/books/'.$book ->id}}" enctype="multipart/form-data">
		@csrf
		@method("PATCH")
		<input type="" name="name" 			value="{{$book -> title}}">
		<input type="" name="title" 		value="{{$book -> author}}">
		<input type="" name="price" 		value="{{$book -> price}}">
		<input type="" name="release_year" 	value="{{$book -> release_year}}">
		
		<button type="submit">Update</button>
	</form>

</body>
</html>