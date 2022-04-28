<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

 <!-- Latest compiled and minified CSS & JS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form action="{{route('students.update',$student->id)}}" method="POST" role="form">
					@csrf
					@method('put')

					<legend>Create new student</legend>
				
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" value="{{$student->name}}" id="" name="name">
					</div>
					<div class="form-group">
						<label for="">Birthday</label>
						<input type="datetime" class="form-control" value="{{$student->birthday}}" id="" name="birthday">
					</div>

			
				
					
				
					<button type="submit" class="btn btn-primary">Add student</button>
				</form>
			</div>
		</div>
	</div>
	



	<script src="//code.jquery.com/jquery.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>