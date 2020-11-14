<!DOCTYPE html>
<html>
<head>
	<title>PharmacyMS</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<style type="text/css">
body{
	background-color:#F7F7F7;
	padding: 0;
	margin-top: 0;
	margin-left: 0;
	margin-right: 0;
}



.header{
	background-color:#BD006B;
	width: 100%;
	height:40px;
	border-bottom: solid 2px #DEDEDE;
	border-top: solid 2px #8D0050;
}
.logo{
	font-size:18px;
	margin-bottom: 0;
	margin-bottom: 0;

}
.frame{
	background-color:#FFFFFF;
	width:50%;
	height:250px;
	margin:0 auto;
	margin-top: 50px;
	box-shadow: 15px 15px 15px 15px #CECECE;
}

.frame .header_logo{
	background-color:#BD006B;
	width: 100%;
	height:35px;
	margin:0 auto;
}

.header_login{
	background-color:#EEEEEE;
	width: 100%;
	height:60px;
	margin:0 auto;
	margin-top:15px;
}


.glyphicon{
	color: white;
}

.login{
	font-weight:bold;
	margin-left:14px;
	font-size:22px;
	color: white;
	font-family:Calibri;
}

.login-btn{
	margin-left:18px;
}
.btn{
	margin-top:10px;

}

.Reset{
	color:#817BD1;
	font-family:Calibri;
	margin-top:8%;
}

.btn-link{
	color: white;
	margin-bottom:8px;
	margin-top: 2px;

}

.btn-link:hover{
	color: white;
	text-decoration: none;

}

.glyphicon-log-out{
	margin-left: 100px;
}

.btn-reset{
	border:none;
	margin-top:10px;
	color:#0C7BD1;
}

</style>
</head>
<body>

		<div class="header">
			<div class="col-sm-10">
				<button class="btn btn-link">Pharmacy Management System</button>
			</div>

			<div class="col-sm-2"><span class="glyphicon glyphicon-log-out"></span>
				<button class="btn btn-link" style="color:white;">Not Login in</button>
			</div>
			</div> <br>

			<div class="frame">
				<div class="header_logo">
				<span class="login">Login</span>
				</div>
			<div class="container"><br>
				<div class="form-group">
				 	 <label for="usr">Name:</label>
				  		<input type="text" class="form-control" id="usr" style="width:720px;"placeholder="Enter Username">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				  			<input type="password" class="form-control" id="pwd" style="width:720px;" placeholder="Enter Password">
			</div>
			</div>
		<div class="header_login">
			<span class="login-btn">
				<button type="submit" class="btn btn-primary"> Log in<div class="spinner">
					<div class="spinner-glyph"></div>
					</div>
				</button>
					<button class="btn-reset" type="button" style="margin-top:5px;">Reset password </button>
		</div>

	</div>
			
	</div>
	

</body>
</html>