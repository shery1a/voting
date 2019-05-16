<!DOCTYPE html>
<html>
<head>
	<title>create project</title>
</head>
<body>
	<h2 align="center">create new voter</h2>
	<form action="/vote" method="GET">
		{{csrf_field()}}
		Password:<input type="text" name="password"><br>
		Name:<input type="text" name="name"><br>
		Status:<input type="text" name="status"><br>
		Account:<input type="text" name="account"><br>
		<button type="submit">submit</button>
</body>
</html>