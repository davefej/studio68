<?php 

$mailstr = file_get_contents("todo.json");
$template = file_get_contents("template.html");
$json = json_decode($mailstr,3);
$i  = 0;


while($i < 20){
	$item = array_pop($json);
	if($item == null){
		echo "VÉGE";
		break;
	}
	
	file_put_contents("todo.json", json_encode($json));
	
	$mailbody = $template;
	if($item["name"] == ""){
		$mailbody = str_replace("#ugyfel#", "&#xDC;gyfel&#xFC;nk", $mailbody);
	}else{
		$mailbody = str_replace("#ugyfel#", $item["name"], $mailbody);
	}
	$link = "https://studio68.hu/site/index.php?newsletter=1&from=".urlencode(base64_encode($item["email"]));
	$mailbody = str_replace("#link#", $link, $mailbody);
	
	
	$i++;
	
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: Stúdió 68 Kft. <otlet@studio68.hu>' . "\r\n";
	$headers .= 'Reply-To: Stúdió 68 Kft. <info@studio68.hu>' . "\r\n";
	$to = $item["email"];
	$subject = "Tájékoztatás, engedélykérés";
	
	if(mail($to,$subject,$mailbody,$headers)){
		file_put_contents("maildemo.txt", $to."\n".$headers."\n".$mailbody."\n",FILE_APPEND);
	}else{
		file_put_contents("mailerror.txt", $to."\n".$headers."\n".$mailbody."\n",FILE_APPEND);
	}
	
	
}

echo "SENT:".$i;



?>