<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        
	</head>

	<body>
        @include('navbar');
        
        <h1>Edit Todo</h1>
        
       {!! Form::open(['action' => ['Todoscontroller@update',$todo->id],'method'=>'POST']) !!}
    <div class="form-group">
      
      {{Form::text('text', $todo->text, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      
      {{Form::textarea('body', $todo->body, ['class' => 'form-control'])}}
    </div>
        <div class="form-group">
      
      {{Form::text('due', $todo->due, ['class' => 'form-control'])}}
    </div>
        {{ Form::hidden('_method','PUT') }}
    <div>
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
        
        

	</body>
</html>