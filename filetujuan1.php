<style type="text/css">
	body{
		background-image: url(./bg2.jpg); 
		background-size: cover;
	}
	table{
		margin-right: 30%;
		margin-left: 30%;
		margin-top: 15%;
		margin-bottom: 10%;
		background-image: url(./bg2.jpg);
		background-size: cover; 
		height: 200px;
		width: 500px;
		border: solid white 5px;
		border-radius: 5px;
		text-align: center;
		font-family: kristen itc;
		font-size: 30px;
		color: white;
		font-weight: bold;
	}
</style>
<body>
	<table>
		<tr>
			<td>
				<?php 
					session_start();
					$mail=$_POST['em'];
					echo"Nama email yang dikirim: ","<i>".$mail,"</i>";
					$pws=$_POST['pw'];
					echo"<br>Password yang dikirim: ","<i>".$pws,"</i>";
					$_SESSION["vemail"]="$mail";
					$_SESSION["vpws"]="$pws";
				?>
			</td>
		</tr>
	</table>
</body>