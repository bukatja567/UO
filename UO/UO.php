//Команды "Умного одногруппника"
<?php
include 'files/img.php';

function raspisan($chat_id){
	sendPhoto($chat_id, FILE_RASP); 	
	}
function tomorrow($chat_id){
	
	}
function today($chat_id){
	
	}
function week($chat_id){
        if ((strftime("%W", time())+1)%2!=0) {
			return TBNCH;
		}
		else return TBCHOT;
	}
?>
