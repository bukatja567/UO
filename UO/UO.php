//Команды "Умного одногруппника"
<?php
include 'files/img.php';
include 'files/labs.php';

function headgroup($chat_id){
	sendPhoto($chat_id, IMG_HEADGROUP);
	sendMessage($chat_id, TBHEADGROUP);
	}

function raspisan($chat_id){
	sendPhoto($chat_id, FILE_RASP); 	
	}
function today(){
	$nedel = strftime("%W", time());
	$data = strftime("%a", time());
	if (($nedel+1)%2!=0) 
		switch ($data) {
			case 'Mon':	return TBMON1;
   			case 'Tue':	return TBTUE1;
   			case 'Wed':	return TBWED1;
  			case 'Thu': return TBTHU1;
   			case 'Fri':	return TBFRI1;
 			case 'Sat':	return TBSAT1;
			case 'Sun': return TBSUN1;
			}
	else {
		switch ($data) {
			case 'Mon':	return TBMON2;
   			case 'Tue':	return TBTUE2;
   			case 'Wed':	return TBWED2;
  			case 'Thu': return TBTHU2;
   			case 'Fri':	return TBFRI2;
 			case 'Sat':	return TBSAT2;
			case 'Sun': return TBSUN2;
			}
	}
	}
function tomorrow(){
	$nedel = strftime("%W", time());
	$data = strftime("%a", time());
	if (($nedel+1)%2!=0) 
		switch ($data) {
			case 'Mon':	return TBTUE1;
   			case 'Tue':	return TBWED1;
   			case 'Wed':	return TBTHU1;
  			case 'Thu': return TBFRI1;
   			case 'Fri':	return TBSAT1;
 			case 'Sat':	return TBSUN1;
			case 'Sun': return TBMON1;			
			}
	else {
		switch ($data) {
			case 'Mon':	return TBTUE2;
   			case 'Tue':	return TBWED2;
   			case 'Wed':	return TBTHU2;
  			case 'Thu': return TBFRI2;
   			case 'Fri':	return TBSAT2;
 			case 'Sat':	return TBSUN2;
			case 'Sun': return TBMON2;		
			}
	}
	}
function week(){
        if ((strftime("%W", time())+1)%2!=0) {
			return "Понедельник:\n".TBMON1."\n\nВторник\n".TBTUE1."\n\nСреда\n".TBWED1."\n\nЧетверг\n".TBTHU1."\n\nПятница\n".TBFRI1."\n\nСуббота\n".TBSAT1."\n\nВоскресенье\n".TBSUN1;
		}
		else return "Понедельник:\n".TBMON2."\n\nВторник\n".TBTUE2."\n\nСреда\n".TBWED2."\n\nЧетверг\n".TBTHU2."\n\nПятница\n".TBFRI2."\n\nСуббота\n".TBSAT2."\n\nВоскресенье\n".TBSUN2;
	}
function nextweek(){
        if ((strftime("%W", time())+1)%2==0) {
			return "Понедельник:\n".TBMON1."\n\nВторник\n".TBTUE1."\n\nСреда\n".TBWED1."\n\nЧетверг\n".TBTHU1."\n\nПятница\n".TBFRI1."\n\nСуббота\n".TBSAT1."\n\nВоскресенье\n".TBSUN1;
		}
		else return "Понедельник:\n".TBMON2."\n\nВторник\n".TBTUE2."\n\nСреда\n".TBWED2."\n\nЧетверг\n".TBTHU2."\n\nПятница\n".TBFRI2."\n\nСуббота\n".TBSAT2."\n\nВоскресенье\n".TBSUN2;
	}
/*function labccna($chat_id, $mess){
	$i = explode("-", $mess);
	switch ($i[1]) {
		case '': sendMessage($chat_id, "Формат команды такой: /labccna_номер лабы, \nНапример: labccna-0.0.0.1"); break;
		case '0.0.0.1': sendFile($chat_id, TBLAB0001); break;
		case '1.0.1.2': sendFile($chat_id, TBLAB1012); break;
		case '1.3.1.1': sendFile($chat_id, TBLAB1311); break;
		case '2.1.4.5': sendFile($chat_id, TBLAB2145); break;
		case '2.2.2.5': sendFile($chat_id, TBLAB2225); break;
		case '3.0.1.2': sendFile($chat_id, TBLAB3012); break;
		case '3.1.2.12': sendFile($chat_id, TBLAB31212); break;
		case '3.3.2.3': sendFile($chat_id, TBLAB3323); break;
		case '3.4.1.1': sendFile($chat_id, TBLAB3411); break;
		case '4.0.1.2': sendFile($chat_id, TBLAB4012); break;
		case '4.2.1.4': sendFile($chat_id, TBLAB4214); break;
		case '4.2.2.4': sendFile($chat_id, TBLAB4224); break;
		case '4.3.3.4': sendFile($chat_id, TBLAB4334); break;
		case '4.4.1.1': sendFile($chat_id, TBLAB4411); break;
		case '5.0.1.2': sendFile($chat_id, TBLAB5012); break;
		case '6.0.1.2': sendFile($chat_id, TBLAB6012); break;
		case '6.2.2.5': sendFile($chat_id, TBLAB6225); break;
		case '6.4.3.5': sendFile($chat_id, TBLAB6435); break;
		case '6.5.1.1': sendFile($chat_id, TBLAB6511); break;
		case '7.0.1.2': sendFile($chat_id, TBLAB7012); break;
		case '7.1.3.6': sendFile($chat_id, TBLAB7136); break;
		case '7.2.3.6': sendFile($chat_id, TBLAB7236); break;
		case '7.2.3.7': sendFile($chat_id, TBLAB7237); break;
		case '7.3.1.1': sendFile($chat_id, TBLAB7311); break;
		case '8.0.1.2': sendFile($chat_id, TBLAB8012); break;
		case '8.2.4.5': sendFile($chat_id, TBLAB8245); break;
		case '8.3.3.6': sendFile($chat_id, TBLAB8336); break;
		case '8.4.1.1': sendFile($chat_id, TBLAB8411); break;
		case '9.0.1.2': sendFile($chat_id, TBLAB9012); break;
		case '9.2.2.8': sendFile($chat_id, TBLAB9228); break;
		case '9.2.2.9': sendFile($chat_id, TBLAB9229); break;
		case '9.3.1.1': sendFile($chat_id, TBLAB9311); break;
		case '10.0.1.2': sendFile($chat_id, TBLAB10012); break;
		case '10.1.1.13': sendFile($chat_id, TBLAB101113); break;
		case '10.1.3.5': sendFile($chat_id, TBLAB10135); break;
		case '10.2.3.3': sendFile($chat_id, TBLAB10233); break;
		case '10.2.3.4': sendFile($chat_id, TBLAB10234); break;
		case '10.2.4.5': sendFile($chat_id, TBLAB10245); break;
		case '10.3.1.1': sendFile($chat_id, TBLAB10311); break;
		}
	}*/
function labccna($chat_id, $mess){
		$i[1] = substr($mess,4,strlen($mess));
		switch ($i[1]) {
			case '0001': sendFile($chat_id, TBLAB0001); break;
			case '1012': sendFile($chat_id, TBLAB1012); break;
			case '1311': sendFile($chat_id, TBLAB1311); break;
			case '2145': sendFile($chat_id, TBLAB2145); break;
			case '2225': sendFile($chat_id, TBLAB2225); break;
			case '3012': sendFile($chat_id, TBLAB3012); break;
			case '31212': sendFile($chat_id, TBLAB31212); break;
			case '3323': sendFile($chat_id, TBLAB3323); break;
			case '3411': sendFile($chat_id, TBLAB3411); break;
			case '4012': sendFile($chat_id, TBLAB4012); break;
			case '4214': sendFile($chat_id, TBLAB4214); break;
			case '4224': sendFile($chat_id, TBLAB4224); break;
			case '4334': sendFile($chat_id, TBLAB4334); break;
			case '4411': sendFile($chat_id, TBLAB4411); break;
			case '5012': sendFile($chat_id, TBLAB5012); break;
			case '6012': sendFile($chat_id, TBLAB6012); break;
			case '6225': sendFile($chat_id, TBLAB6225); break;
			case '6435': sendFile($chat_id, TBLAB6435); break;
			case '6511': sendFile($chat_id, TBLAB6511); break;
			case '7012': sendFile($chat_id, TBLAB7012); break;
			case '7136': sendFile($chat_id, TBLAB7136); break;
			case '7236': sendFile($chat_id, TBLAB7236); break;
			case '7237': sendFile($chat_id, TBLAB7237); break;
			case '7311': sendFile($chat_id, TBLAB7311); break;
			case '8012': sendFile($chat_id, TBLAB8012); break;
			case '8245': sendFile($chat_id, TBLAB8245); break;
			case '8336': sendFile($chat_id, TBLAB8336); break;
			case '8411': sendFile($chat_id, TBLAB8411); break;
			case '9012': sendFile($chat_id, TBLAB9012); break;
			case '9228': sendFile($chat_id, TBLAB9228); break;
			case '9229': sendFile($chat_id, TBLAB9229); break;
			case '9311': sendFile($chat_id, TBLAB9311); break;
			case '10012': sendFile($chat_id, TBLAB10012); break;
			case '101113': sendFile($chat_id, TBLAB101113); break;
			case '10135': sendFile($chat_id, TBLAB10135); break;
			case '10233': sendFile($chat_id, TBLAB10233); break;
			case '10234': sendFile($chat_id, TBLAB10234); break;
			case '10245': sendFile($chat_id, TBLAB10245); break;
			case '10311': sendFile($chat_id, TBLAB10311); break;
			default: sendMessage($chat_id, TBLAB); break;
			}
		}
?>
