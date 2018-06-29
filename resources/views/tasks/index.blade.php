<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		@foreach($tasks as $el)
			<a href="/tasks/{{$el->id}}">to do: {{$el->body}}!</a>
			<br>
		@endforeach
	</div>
</body>
</html>