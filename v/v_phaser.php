<?php

echo "
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

	</style>

	<script src ='../m/libs/phaser.min.js'></script>
	<script src ='../js/phaserCanvas.js'></script>
	<div id='gameContainer'></div>

"; 
	?>
