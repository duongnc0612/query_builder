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
				<div class="col-md-12">
					<h1>Student</h1>
					<a href="{{route('students.add')}}" class="btn btn-primary">Add</a>

					
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Birthday</th>
								<th>Created_at</th>
								<th>Updated_at</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
								@foreach($students as $student)
									<tr>
										<td>{{$student->id}}</td>
										<td>{{$student->name}}</td>
										<td>{{$student->birthday}}</td>
										<td>{{$student->created_at}}</td>
										<td>{{$student->updated_at}}</td>
										<td>
											
											
											<a href="{{route('students.edit',$student->id) }}" class="btn btn-primary"> Edit</a> 
											<form action="{{route('students.destroy',$student->id) }}" method="POST">
												@csrf
												@method('delete')
												<button class="btn btn-danger" type="submit">Delete</button>
											</form>
										</td>
									</tr>
								@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>


		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
	</html>	
