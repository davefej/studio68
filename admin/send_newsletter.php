<?php 
$starttime = microtime(true);
$adminnews = true;
$bulksize = 100;
require 'common/newsletter_common.php';
$akt = readAkt();
if($akt == null){
	echo "ok1";
}else{
	$newsletterpath = getNewsDir()."/".$akt;	
	if(file_exists($newsletterpath)){		
		$i = 0;
		$finished = false;
		while($i < $bulksize){
			
			$difftime = microtime(true) - $starttime;
			if($difftime > 20){
				addError($newsletterpath,array(
						"id" => "-1",
						"error" => "difftime"
				));
				
				echo "exectimeerror";
				return;
			}
			if(addMailLimitReached()){
				addError($newsletterpath,array(						
						"error" => "Limit Reached"
				));
				break;
			}
			$id = getNextId($newsletterpath."/todo.json");
			if($id == null){
				$finished = true;
				break;
			}else{
				$user = getUserById($id);
				if($user == null){
					addError($newsletterpath,array(
							"id" => $id,
							"error" => "usernull"
					));
				}else{
					$message = getMessage($user,$akt);
					$subject = getSubject($user,$akt);
					$to = $user["email"];
					if($message != null && $subject != null && $to != null){						
						if(sendmail($to,$subject,$message)){
							addId($newsletterpath,$id);
						}else{
							addError($newsletterpath,array(
									"id" => $id,
									"error" => "mailfailed"
							));
						}																
					}else{
						addError($newsletterpath,array(
								"id" => $id,
								"error" => "messagenull"
						));
					}
					
				}
			}
			$i++;
		}
		if($finished){
			removeAkt($akt);
			echo "finished";
		}else{
			echo "bulksize_reached";
		}
	}else{
		echo "error1";
		return;
	}
}

?>