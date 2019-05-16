<!DOCTYPE html>
<html>
<head>
	<title>Edit Project</title>
</head>
<body>
<h2 align="center"> Update Voters </h2>
<form action="/vote/{{$vote->id}}" method="POST" >
	{{ method_field('PATCH') }}
	{{csrf_field()}}
	Password :<input type="text" name="password"><br>
	Name : <input type="text" name="name"><br>
	Status : <input type="text" name="status"><br>
	Account : <input type="text" name="account"><br>
	<button type="submit">Submit</button>


</form>


</body>
</html>