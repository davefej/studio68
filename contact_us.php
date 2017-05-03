<?php


if(mailLimit()){
	exit;
}

$entityBody = file_get_contents('php://input');
$data = json_decode($entityBody,True);


if( !isset($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL) || !isset($data['message']) 
		|| !isset($data['firstname']) || !isset($data['lastname'])){
	header("HTTP/1.1 400 Bad Request");
	return true;
}

$to      = 'david@davidanddavid.hu';
$subject = 'Weblap - Üzenet';
$message = "Kedves Studio68!\r\n\r\n".$data['message']."\r\n\r\n".$data['lastname']." ".$data['firstname']."\r\n"."\r\n";
$headers = 'From: webmaster@example.com' . "\r\n";



//TODO
/*
if(mail("david@davidanddavid.hu","Weblap - Üzenet",$message,$headers)){
	
}else{
*/
	$myfile = fopen("mailerror.txt", "a") or die("Unable to open file!");
	$txt = date("now")."\r\n".$message;
	fwrite($myfile, $txt);
	fclose($myfile);
//}





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