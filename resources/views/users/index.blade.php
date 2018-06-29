<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		@foreach($users as $el)
			<p>Name: {{$el->name}}</p>
			<a href="/users/{{$el->id}}">{{$el->name}}!</a>
		@endforeach
	</div>
</body>
</html>