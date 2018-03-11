<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        
	</head>

	<body>
        @include('navbar');
        
        @if(count($todos) > 0)
    @foreach($todos as $todo)
      <div class="well">
        <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a> <span class="label label-danger">{{$todo->due}}</span></h3>
      </div>
    @endforeach
  @endif
        

	</body>
</html>