<?php
ini_set('display_errors', 1);
ini_set("track_errors", 1);
ini_set("html_errors", 1);
error_reporting(E_ALL);
class ToolsPdo{   		

	//Classe qui me sert de librairie de fonction 
	//Doit être accessible partout 
	//Singleton

	private static $server='host=127.0.0.1';
	
	private static $bdd='f@keBase';   		
	private static $user='root';    		
	private static $mdp='';	

	private static $myToolsPdo;
	private static $instance;

	/**
	 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
	 * pour toutes les méthodes de la classe
	 */				
	function __construct()
	{
		try 
		{
			ToolsPdo::$myToolsPdo = new PDO('mysql:dbname='.ToolsPdo::$bdd.';'.ToolsPdo::$server, ToolsPdo::$user, ToolsPdo::$mdp); 
			ToolsPdo::$myToolsPdo->query("SET CHARACTER SET utf8");
		}
		catch (PDOException $e)
		{
			echo 'Connexion échouée : ' . $e->getMessage();
		}

	}
	public function _destruct()
	{
		ToolsPdo::$instance = null;
	}
	/**
	 * Fonction statique qui crée le singleton

	 * @return l'unique objet de la classe ToolsPdo
	 */
	public static function getToolsPdo()
	{
		if(empty(ToolsPdo::$instance))
		{
			ToolsPdo::$instance = new ToolsPdo();
		}
		
		return ToolsPdo::$instance;  
	}
	/**
	 * Retourne les informations d'un user selon le parametre de post
	 * @param ID
	*/
	static public function getUser($ID)
	{

		$req = ToolsPdo::$myToolsPdo->prepare("select * from users where ID = '$ID'"); // and visiteur.mdp='$mdp' UNION select comptable.id as id, comptable.nom as nom, comptable.prenom as prenom, 'c' as Type from comptable where comptable.login='$login' and comptable.mdp='$mdp'");
		$rs = $req->execute();
		$row = $req->fetch();
		return $row;
	}

	/**
	 * Insert une nouvelle row dans la table player et lui donne
	 * 100 de chaque currency et 5 workers
	 
	 * @param $FBID
	 * @param $FBName 
	 * @param $FBToken
	 * @return VOID
	*/
	static public function insertNewPlayer($ID, $FBName, $FBToken){
		
		$req = ToolsPdo::$myToolsPdo->prepare("insert into players(FBID, FBName, FBToken, Soft1, Soft2, Workers, Hard1) 
			values('$FBID', '$FBName', '$FBToken', 700 , 500, 5, 60)");
		$res = $req->execute();


	}

	static public function getAllID(){
		$req = ToolsPdo::$myToolsPdo->prepare("select ID from users");

		$rs = $req->execute();
		$row = $req->fetchAll();
		return $row;
		
	}
}
?>