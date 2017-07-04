<?php
$entityBody = file_get_contents('php://input');
$data = json_decode($entityBody,True);

if(mailLimit()){	
	$myfile = fopen("maillimit.txt", "a") or die("Unable to open file!");
	$txt = date("now")."\r\n".$message."\r\n\r\n-------------------\r\n\r\n";
	fwrite($myfile, $txt);
	fclose($myfile);
	exit;
}


if( !isset($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL) || !isset($data['message']) 
		|| !isset($data['firstname']) || !isset($data['lastname'])){
	header("HTTP/1.1 400 Bad Request");
	return true;
}

$data['message'] = htmlspecialchars($data['message'], ENT_QUOTES, 'UTF-8');
$data['firstname'] = htmlspecialchars($data['firstname'], ENT_QUOTES, 'UTF-8');
$data['lastname'] = htmlspecialchars($data['lastname'], ENT_QUOTES, 'UTF-8');


//$to      = 'david@davidanddavid.hu';
$to      = 'info@studio68.hu';


$subject = 'Weblap - Üzenet';
$message = "Kedves Studio68!\r\n\r\n".$data['message']."\r\n\r\n".$data['lastname']." ".$data['firstname']."\r\n"."\r\n";
$headers = 'From: '.$data['email']."\r\n";
$headers .= "Content-Type: text/plain;charset=utf-8\r\n";

if(mail($to,$subject,$message,$headers)){
	
}else{

	$myfile = fopen("mailerror.txt", "a") or die("Unable to open file!");
	$txt = date("now")."\r\n".$message;
	fwrite($myfile, $txt);
	fclose($myfile);
}





function mailLimit(){
	if(file_exists("mail.txt")){
		$last = filemtime("mail.txt");
		$today = strtotime('today');
		if($today < $last){
			$myfile = fopen("mail.txt", "r") or die("Unable to open file!");
			$num = 0;
			while (($line = fgets($myfile)) !== false) {
				$num = (int)$line;
				break;
			}
			fclose($myfile);
			
			if($num > 100){
				//LIMIT REACHED
				//TODO ERROR MAIL
				header("HTTP/1.1 503 Service Unavailable");
				return true;
			}else{
				$myfile = fopen("mail.txt", "w") or die("Unable to open file!");
				$txt = strval($num+1);
				fwrite($myfile, $txt);
				fclose($myfile);
				return false;
			}
			
		}else{
			//nullázni
			$myfile = fopen("mail.txt", "w") or die("Unable to open file!");
			$txt = "1";
			fwrite($myfile, $txt);
			fclose($myfile);
			return false;
		}
		
	}else{
		$myfile = fopen("mail.txt", "w") or die("Unable to open file!");
		$txt = "1";
		fwrite($myfile, $txt);
		fclose($myfile);
		return false;
	}
	
}

?>