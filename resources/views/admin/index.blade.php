   <!DOCTYPE html>
<html>
<head>
	<title>index page</title>

	<style>
table, th, td {
  border-collapse: collapse;
}
</style>

</head>
<body>
<p align="center">{{ $votes->onEachSide(1)->links() }}</p>
<p align="center"><a href="/vote/create">Add New Voter </a></p>
<table align="center" cellpadding = "3px" cellspacing = "5px" border="1px" bgcolor="#F3F3F3" style="padding: 30px;">
	<h2 align="center"> Voter's List </h2>
	<h2 align="center">
	<form action="/search" method="GET" >
		{{csrf_field()}}
		<input type="search" name="search">
		<button type="submit">search</button>
	</form>
</h2>
<tr border = '0px'>
	<th>ID</th>
	<th>Password</th>
	<th>Name</th>
	<th>Status</th>
	<th>Account</th>
	<th>Action</th>
	
</tr>
@foreach($votes as $vote)
<tr>
	<td>{{ $vote->id }}</td>
	<td>{{ $vote->password }}</td>
	<td> {{ $vote->name }} </td>
	<td> {{ $vote->status }} </td>
	<td> {{$vote->account}} </td>
	<td>
	 <button><a href="/vote/{{$vote->id}}/edit">Edit</a></button>
	  <button><form action="/vote/{{$vote->id}}" method="POST" >
{{method_field('DELETE')}}
{{csrf_field()}}
<button type="submit" >Delete</button>
</form>
</button>
	</td>
</tr>
@endforeach
</table>



</body>
</html>