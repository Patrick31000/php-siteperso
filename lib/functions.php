<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(isset($_GET['home'])){
		include __DIR__.'/../pages/home.php';
	} 
	if(isset($_GET['bio'])){
		include __DIR__.'/../pages/bio.php';
	} 
	if(isset($_GET['contact'])){
		include __DIR__.'/../pages/contact.php';
	}
	if(isset($_GET['save'])){
		include __DIR__.'/../public/save.php';
	} 
	if(isset($_GET['admin'])){
		include __DIR__.'/../public/admin.php';
	} 
	if(empty($_GET)){
		include __DIR__.'/../pages/home.php';
	} 
}
// 	else if(!isset($_GET['bio'])) {
// 		include __DIR__.'/../bio.php';
// 	}
// 	else {
// 		include __DIR__.'/../contact.php';
// 	}
// }

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getJson(){
	$json = file_get_contents("../data/user.json");
	$parsed_json = json_decode($json);
	$nom = $parsed_json->{'name'};
	$prenom = $parsed_json->{'first_name'};
	$metier = $parsed_json->{'occupation'};
	echo $prenom." ".$nom."<br>";
	echo $metier;
}
function getJson2(){
	$json2 = file_get_contents("../data/last_message.json");
	$parsed_json2 = json_decode($json2);
	$nom2 = $parsed_json2->{'nom'};
	$mail2 = $parsed_json2->{'mail'};
	$message2 = $parsed_json2->{'message'};
	echo "votre login est: ".$nom2."<br>";
	echo "votre mail est: ".$mail2."<br>";
	echo "votre message est: ".$message2."<br>";
	// echo "test";
}

function Exp1(){
	$json = file_get_contents("../data/user.json");
	$parsed_json = json_decode($json);
	$nom = $parsed_json->{'name'};
	$exp1year = $parsed_json->{'experiences'}[0]->{'year'};
	$exp1comp = $parsed_json->{'experiences'}[0]->{'company'};
	echo $exp1year."<br>";
	echo $exp1comp;
}
function Exp2(){
	$json = file_get_contents("../data/user.json");
	$parsed_json = json_decode($json);
	$nom = $parsed_json->{'name'};
	$exp2year = $parsed_json->{'experiences'}[1]->{'year'};
	$exp2comp = $parsed_json->{'experiences'}[1]->{'company'};
	echo $exp2year."<br>";
	echo $exp2comp;
}
function Exp3(){
	$json = file_get_contents("../data/user.json");
	$parsed_json = json_decode($json);
	$nom = $parsed_json->{'name'};
	$exp3year = $parsed_json->{'experiences'}[2]->{'year'};
	$exp3comp = $parsed_json->{'experiences'}[2]->{'company'};
	echo $exp3year."<br>";
	echo $exp3comp;
}

function encodeJson(){
	// echo "test";

	$encode = array (
		"nom" => $_POST['name'],
		"mail" => $_POST['email'],
		"message" => $_POST['message']
	);
	$jsonencode =json_encode($encode, JSON_PRETTY_PRINT);
	$path="../data/last_message.json";
	file_put_contents($path, $jsonencode);
}
