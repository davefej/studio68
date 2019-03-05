<?php
require_once 'adminhelper.php';

$hiba = true;
$msg = "HIBA";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ( isset($_FILES["img"])) {

		//if there was an error uploading the file
		if ($_FILES["img"]["error"] > 0) {
			$msg =  "Hibás feltöltés, képet nem sikerült feltölteni, Hiba kód: " . $_FILES["img"]["error"];

		}else{
			if(isset($_POST["name"]) && isset($_POST["type"]) && $_POST['desc']){
				
					
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
				
				
				
			
			}else{
				$msg =  "Nincs név";
			}
		}
	} else {
		$msg =  "Nem volt file kiválasztva :(";
	}
}


if($hiba){
	echo "HIBA<br/>";
	echo $msg;
	exit;
}

$id = md5(uniqid());

$fname = $id.".".$mime;
if (!file_exists("../../dinamic/".$_POST['type'])) {
	mkdir("../../dinamic/".$_POST['type']);
}
$path = "../../dinamic/".$_POST['type']."/" . $fname;
move_uploaded_file($_FILES["img"]["tmp_name"],$path );
$msg =  "OK";

$_POST['desc'] = str_replace(array("\r\n", "\n", "\r"),"<br/>",$_POST['desc']);


addElement($_POST['type'],$_POST['name'],$_POST['desc'],$fname,"1",$_POST['price']);
createBackupIfNotDev($_POST['type']);

header("Location: ../editor.php?type=".$_POST['type']."&success=true");


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


