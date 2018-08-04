<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Register Here</h1>

<form action="/uregister" method="post">

                        {{ csrf_field()}}
                            
								<label for="">Username</label><br>
								<input type="text" name="u_name" value=""><br>
							
								<label for="">Password</label><br>
								<input type="text"  name="password" value=""><br>
							
								<label for="">email</label><br>
								<input type="text"  name="email" value=""><br>
							
								<label for="">Mobile No</label><br>
								<input type="text"  name="mobileno" value=""><br>
							

							
								<input type="submit" name="" value="submit">
							


</form>
</body>
</html>