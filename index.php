<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>
<body>

<nav class="navbar navbar-inverse " >
 
</nav>
<div class="container center" style="text-align: center;">
	
<form action="getjson.php" method="post">

<div>	
	<input type="text" class="form-control" placeholder="Url" class="col-xs12" name="url">
</div>
<br>
<div class="form-inline">	
	<input type="text" class="form-control" placeholder="Variable 1" name="var1">	
	<input type="text" class="form-control" placeholder="Variable 2" name="var2">
</div>
<br>
<div class="form-inline">
	<input type="text" class="form-control" placeholder="Variable 3" name="var3">
	<input type="text" class="form-control" placeholder="Variable 4" name="var4">
</div>
<br>
<input type="submit">

</form>
	
</div>

	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>