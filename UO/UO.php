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
function labccna($chat_id, $mess){
		$i = substr($mess,4,strlen($mess));
		switch ($i) {
			case '0001': case '0001@uo_isit_bot': sendFile($chat_id, TBLAB0001); break;
			case '1012': case '1012@uo_isit_bot': sendFile($chat_id, TBLAB1012); break;
			case '1311': case '1311@uo_isit_bot': sendFile($chat_id, TBLAB1311); break;
			case '2145': case '2145@uo_isit_bot': sendFile($chat_id, TBLAB2145); break;
			case '2225': case '2225@uo_isit_bot': sendFile($chat_id, TBLAB2225); break;
			case '3012': case '3012@uo_isit_bot': sendFile($chat_id, TBLAB3012); break;
			case '31212': case '31212@uo_isit_bot': sendFile($chat_id, TBLAB31212); break;
			case '3323': case '3323@uo_isit_bot': sendFile($chat_id, TBLAB3323); break;
			case '3411': case '3411@uo_isit_bot': sendFile($chat_id, TBLAB3411); break;
			case '4012': case '4012@uo_isit_bot': sendFile($chat_id, TBLAB4012); break;
			case '4214': case '4214@uo_isit_bot': sendFile($chat_id, TBLAB4214); break;
			case '4224': case '4224@uo_isit_bot': sendFile($chat_id, TBLAB4224); break;
			case '4334': case '4334@uo_isit_bot': sendFile($chat_id, TBLAB4334); break;
			case '4411': case '4411@uo_isit_bot': sendFile($chat_id, TBLAB4411); break;
			case '5012': case '5012@uo_isit_bot': sendFile($chat_id, TBLAB5012); break;
			case '6012': case '6012@uo_isit_bot': sendFile($chat_id, TBLAB6012); break;
			case '6225': case '6225@uo_isit_bot': sendFile($chat_id, TBLAB6225); break;
			case '6435': case '6435@uo_isit_bot': sendFile($chat_id, TBLAB6435); break;
			case '6511': case '6511@uo_isit_bot': sendFile($chat_id, TBLAB6511); break;
			case '7012': case '7012@uo_isit_bot': sendFile($chat_id, TBLAB7012); break;
			case '7136': case '7136@uo_isit_bot': sendFile($chat_id, TBLAB7136); break;
			case '7236': case '7236@uo_isit_bot': sendFile($chat_id, TBLAB7236); break;
			case '7237': case '7237@uo_isit_bot': sendFile($chat_id, TBLAB7237); break;
			case '7311': case '7311@uo_isit_bot': sendFile($chat_id, TBLAB7311); break;
			case '8012': case '8012@uo_isit_bot': sendFile($chat_id, TBLAB8012); break;
			case '8245': case '8245@uo_isit_bot': sendFile($chat_id, TBLAB8245); break;
			case '8336': case '8336@uo_isit_bot': sendFile($chat_id, TBLAB8336); break;
			case '8411': case '8411@uo_isit_bot': sendFile($chat_id, TBLAB8411); break;
			case '9012': case '9012@uo_isit_bot': sendFile($chat_id, TBLAB9012); break;
			case '9228': case '9228@uo_isit_bot': sendFile($chat_id, TBLAB9228); break;
			case '9229': case '9229@uo_isit_bot': sendFile($chat_id, TBLAB9229); break;
			case '9311': case '9311@uo_isit_bot': sendFile($chat_id, TBLAB9311); break;
			case '10012': case '10012@uo_isit_bot': sendFile($chat_id, TBLAB10012); break;
			case '101113': case '101113@uo_isit_bot': sendFile($chat_id, TBLAB101113); break;
			case '10135': case '10135@uo_isit_bot': sendFile($chat_id, TBLAB10135); break;
			case '10233': case '10233@uo_isit_bot': sendFile($chat_id, TBLAB10233); break;
			case '10234': case '10234@uo_isit_bot': sendFile($chat_id, TBLAB10234); break;
			case '10245': case '10245@uo_isit_bot': sendFile($chat_id, TBLAB10245); break;
			case '10311': case '10311@uo_isit_bot': sendFile($chat_id, TBLAB10311); break;
			case 'all': case 'all@uo_isit_bot': sendFile($chat_id, TBLABALL); break;
			default: sendMessage($chat_id, TBLAB); break;
			}
		}
?>
