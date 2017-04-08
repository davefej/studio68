<?php
require_once 'adminhelper.php';

$hiba = true;
$msg = "HIBA";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ( isset($_FILES["img"])) {

		//if there was an error uploading the file
		if ($_FILES["img"]["error"] > 0) {
			$msg =  "Hibás feltöltés Hiba kód: " . $_FILES["img"]["error"];

		}else{
			if(isset($_POST["name"]) && isset($_POST["type"]) && $_POST['desc']){
				if($_POST["type"] != "eco" && $_POST["type"] != "sweet" && $_POST["type"] != "gift"
						&& $_POST["type"] != "fan" && $_POST["type"] != "printing"){
					$msg =  "TÍPOS JOGOSULTSÁG HIBA";
				}else{
					
					$check = getimagesize($_FILES["img"]["tmp_name"]);
					if($check !== false) {
						$mime = imagefrommime($check["mime"]);
						if($mime !== false){
							$hiba = false;
						}else{
							$msg =  "ISMERETLEN KÉP FORMÁTUM használjs jpeget pngt vagy gifet";
						}
						
					} else {
						$msg =  "NEM KÉP LETT CSATOLVA";
					}
				
				}
				
			
			}else{
				$msg =  "Nincs név";
			}
		}
	} else {
		$msg =  "Nem volt file kiválasztva :(";
	}
}


if($hiba){
	echo "HIBA";
	echo $msg;
	exit;
}

$id = md5(uniqid());

$fname = $id.".".$mime;
$path = "../../res/".$_POST['type']."/" . $fname;
move_uploaded_file($_FILES["img"]["tmp_name"],$path );
$msg =  "OK";
addElement($_POST['type'],$_POST['name'],$_POST['desc'],$fname,"1");
header("Location: ../".$_POST['type'].".php?success=true");


function imagefrommime($mime){
	$mapping = array(
			"image/gif" => "gif",
			"image/png" => "png",
			"image/tiff" => "tiff",
			"image/jpeg" => "jpg"
	);
	if(array_key_exists($mime,$mapping)){
		return $mapping[$mime];
	}else{
		return false;
	}
}

?>


