<?php
try{
	$VeritabaniBaglantisi	=	new PDO("mysql:host=localhost;dbname=project8;charset=UTF8", "root", "");
}catch(PDOException $Hata){
	echo "Bağlantı Hatası<br />" . $Hata->getMessage();
	die();
}
?>