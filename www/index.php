<html>
<head>
<style>
.container {
	margin-left: auto;
	margin-right: auto;
	width: 70%;
	background-color: #b0e0e6;
	pading-top: 3em;
	margin-top: 3em;
}

p {
	color: blue;
}
</style>
<title>PHP Test</title>
</head>

<body>

 <?php
	echo '<p>Hello World</p>';
	?>

<?php
	echo "<b>My first PHP script!</b>";
?>
 
 <div class="container">
		<form action="welcome.php" method="post">
			Name: <input type="text" name="name"><br> E-mail: <input type="text"
				name="email"><br> <input type="submit">
		</form>
	</div>



</body>
</html>