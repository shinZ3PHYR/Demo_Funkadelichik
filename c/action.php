<?php
//Track'em down and log errors !
ini_set('display_errors', 1);
ini_set("track_errors", 1);
ini_set("html_errors", 1);
error_reporting(E_ALL);
session_start();

include_once('../m/ToolsPdo.php');
include('../m/libs/forecast.io.php');
// include('./v/stylesheet.css');


//Get my model's singleton ToolsPdo
$toolPdo = ToolsPdo::getToolsPdo();
$searchRange = 4;

//forecast api need those
$api_key = '538a11475afb9fdd4f9891efb0b697db';


$units = 'auto';  // Can be set to 'us', 'si', 'ca', 'uk' or 'auto' (see forecast.io API); default is auto
$lang = 'en'; // Can be set to 'en', 'de', 'pl', 'es', 'fr', 'it', 'tet' or 'x-pig-latin' (see forecast.io API); default is 'en'

$forecast = new ForecastIO($api_key, $units, $lang);

if(!empty($_GET['ID']))
{	
	
		for($i = 0; $i<$searchRange; $i++)
		{
			if($_GET['ID']== $i)
			{
				$found = true; break;
			}
			else
			{
				$found = false;
			}
		}
		if($found){
			$_SESSION['user']= $toolPdo->getUser($_GET['ID']);
			$condition = $forecast->getCurrentConditions($_SESSION['user']['CoordLat'], $_SESSION['user']['CoordLong']);
			include("../v/v_weather.php");
		}else{
			echo "<div='error'><h1>We've met some 404 error, sorry for that...</h1></div>
			<p>Consider trying another ID number in the URL</p>";
		}

}
else if(!empty($_GET['Phaser']))
{
	include("../v/v_phaser.php");

}
else
{
	echo "<div='error'><h1>We've met some 404 error, sorry for that...</h1></div>
			<p>Consider trying another ID number in the URL</p>";
	echo "<div=''><a href='action.php?ID=2'>Existing Profile : Nagato Yuki</a></div>";
}





?>