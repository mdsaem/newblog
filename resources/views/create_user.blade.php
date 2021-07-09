<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create User</title>
	<link rel="stylesheet" href="">
</head>
<body>
	 <form action="updated" method="post">
	 	@csrf
	 	@method('PUT')
	 	<input type="text" name="name"><br><br>
	 	<input type="submit" value="submit">
	 </form>
</body>
</html>