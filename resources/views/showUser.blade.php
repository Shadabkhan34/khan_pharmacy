<!DOCTYPE html>
<html>
<head>
	<title>Show User</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	 <table class="table table-dark">
    <thead>
      <tr>
      	 <th>ID</th>
        <th>Name</th>
        <th>F_Name</th>
        <th>Delete</th>
      </tr>
    </thead>
   <tbody>
      @foreach ($student as $show)
      <tr >
      <td>{{$show->ID}}</th>
      <td>{{$show->name}}</td>
      <td>{{$show->f_name}}</td>
      <td><a href="delete/{{$show->ID}}" class="btn btn-warning">Delete</a></td>
       @endforeach
    </td> </tr>
   </tbody>
  </table>
</body>
</html>