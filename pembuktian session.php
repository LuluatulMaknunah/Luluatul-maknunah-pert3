<style type="text/css">
	body{
		background-image: url(./bg4.jpg); 
		background-size: cover;
	}
	table{
		margin-right: 30%;
		margin-left: 30%;
		margin-top: 15%;
		margin-bottom: 10%;
		background-image: url(./bg4.jpg);
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
					echo "Email : "."<br><i>".$_SESSION["vemail"]."</i>";
					echo "<br> Password : "."<br><i>".$_SESSION["vpws"]."</i>";
				?>
			</td>
		</tr>
	</table>
</body>