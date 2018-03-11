<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        
	</head>

	<body>
        @include('navbar');
        
        <h1>Create Todo</h1>
        
       {!! Form::open(['action' => ['Todoscontroller@store'],'method'=>'POST']) !!}
    <div class="form-group">
      
      {{Form::text('text', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>
    <div class="form-group">
      
      {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
    </div>
        <div class="form-group">
      
      {{Form::text('due', '', ['class' => 'form-control', 'placeholder' => 'Enter due'])}}
    </div>
        
    <div>
      {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
        
        

	</body>
</html>