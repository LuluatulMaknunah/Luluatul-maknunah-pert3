<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OUTPUT PERTEMUAN 3</title>
	<style type="text/css">
	body{
		background-image: url(./bg3.jpg);
		background-size: cover;
	}
	fieldset{
		background-image: url(./bg3.jpg);
		background-size: cover;
		border-radius: 10px;
		border-color: #333333;
		height: 300px;
		width: 300px;
		margin-right: 40%;
		margin-left: 40%;
		margin-top: 10%;
		margin-bottom: 10%;
	}
	form{
		text-align: center;
		padding: 40px;
	}
	h1{
		text-decoration: underline;
		color: #333333;
	}
	input{
		background-color: lightpink;
		border: solid pink 3px;
		height: 40px;
		width: 200px;
		cursor: pointer;
		caret-color: deeppink;
		color: #333333;
		margin-bottom: 8px;
	}
	input:focus{
		width: 250px;
	}
	button{
		height: 40px;
		width: 90px;
		background-color: lightpink;
		border: solid pink 3px;
		border-radius: 10px;
		font-size: 15px;
		font-family: kristen itc;
		color: #333333;
		cursor: pointer;
	}
	button:hover{
		color: white;
	}
</style>
</head>
<body>
	<div>
		<fieldset>
			<form action="filetujuan1.php" method="post" name="lunaform">
				<h1>LOG IN</h1>
				<input type="email" name="em" id="em" placeholder="MASUKKAN ALAMAT EMAIL" required>
				<br>
				<input type="password" name="pw" id="pw" placeholder="MASUKKAN PASSWORD" required>
				<br>
				<button type="submit" name="submit"> 
					<b> SIGN IN </b>
				</button>
			</form>
		</fieldset>
	</div>
</body>
</html>