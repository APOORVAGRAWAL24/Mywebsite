<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        
	</head>

	<body>
        @include('navbar');
        
        <div class="well">
            <a class="btn btn-default pull-right" href="/">Go Back</a>
            <a class="btn btn-default pull-right" href="/todo/{{$todo->id}}/edit">Edit</a>
            {!! Form::open(['action' => ['Todoscontroller@destroy',$todo->id],'method'=>'POST','class'=>'pull-right']) !!}

{{ Form::hidden('_method','DELETE') }}

{{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}

{!! Form::close() !!}
            
  <h1><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h1>
  <div class="label label-danger">{{$todo->due}}</div>
  <hr>
  <p>{{$todo->body}}</p>
        </div>
<br>
<br>
   

	</body>
</html>


