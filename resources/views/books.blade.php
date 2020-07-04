<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table style="border: 1">
	@foreach($books as $book)
     <tr>
     	<td>{{ $book->title}}</td>
     	<td>{{ $book->author}}</td>
        <td>{{ $book->release_year}}</td>
     	<td>{{ $book->getDisplayPrice()}}</td>
     	<td>
     		<form action="{{'/books/'.$book->id}}" method="POST">
     			@csrf
     			@method('DELETE')
     			<button type="submit" class="btn btn-link">Delete</button>
     		</form>
     	</td>
     	<td>
            
     		<a href="{{'/books/'.$book->id.'/edit'}}">Edit</a>
     	</td>
     </tr>
    @endforeach
    </table>
</body>
</html>