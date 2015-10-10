
<?php
echo "
	<head>
	<style>
		body
		{
			background-image: url('../assets/bgWeb.jpg');

			background-position: center center;
			background-repeat: no-repeat; 
			background-attachment: fixed; 
			background-size: cover; 
			-moz-background-size: 100% 100%;     /* Gecko 1.9.2 (Firefox 3.6) */
			-o-background-size: 100% 100%;        /* Opera 9.5 */
			-webkit-background-size: 100% 100%;   /* Safari 3.0 */
			background-size: 100% 100%;           /* Gecko 2.0 (Firefox 4.0) > CSS3 */ 
		}
		h2
		{
			color: green;
		}

	</style>
	</head>

	<div = 'weatherStyle'>
		<h2> FirstName : <h1>".$_SESSION['user']['Prenom']."</h1></h2>
		<h2> LastName : <h1>".$_SESSION['user']['Nom']."</h1></h2>
		<h2> Adresse : <h1>".$_SESSION['user']['Adresse']."</h1></h2>

		<h2> Current temperature: ".$condition->getTemperature()."</h2>

		<h3><a href='action.php?Phaser=true'>Wanna see hulk, huh?</a></h3>
	</div>
";


?>