<?php
//Файл менеджер - распознает команды и запускает сооветсвующие скрипты
include 'Auth/Auth.php';	   //Файл авторизации
include 'tfcommands/text.php'; //Файл с текстами команд
include 'UO/UO.php';           //Команды умного одногруппника

function bot_manager($message, $chat_id, $user_id)
    {
	//Понижение регистра
	$mess = strtolower_ru(strtolower($message));
	
	switch (Auth($user_id))
		{
		case 'root':
			if ($mess[0] == "/")
				{
				//----- Обязательные команды -- help и start
   	 	        if (substr($mess,1,4) == "help") return TBHELP_ROOT;
 		        if (substr($mess,1,5) == "start") return TBSTART;
			    //----- Умный одногруппник -----
				if (substr($mess,1,4) == "rasp") raspisan($chat_id);
				if (substr($mess,1,9) == "headgroup") headgroup ($chat_id);//return TBHEADGROUP;
				if (substr($mess,1,5) == "group") return TBGROUP;
				if (substr($mess,1,4) == "week") return week();
				if (substr($mess,1,8) == "nextweek") return nextweek();
				if (substr($mess,1,5) == "today") return today();
				if (substr($mess,1,8) == "tomorrow") return tomorrow();
				if (substr($mess,1,10) == "professors") return TBPROFESSORS;
				if (substr($mess,1,7) == "labccna") labccna($chat_id, $mess);
				if (substr($mess,1,7) == "zapccna") return TBZAPCCNA;
				//if (substr($mess,1,8) == "findp") findp($chat_id);
			    //----- Команды помошники -----
			    if (substr($mess,1,7) == "chat_id") sendMessage($chat_id, $chat_id);
				if (substr($mess,1,7) == "user_id") sendMessage($chat_id, $user_id);
				if (substr($mess,1,4) == "logs") return TBLOGS;
				break;
				}
			else
				{
				if (substr($mess,0,12) == "завтра") return tomorrow();
				if (substr($mess,0,14) == "сегодня") return today();
				}
		case 'student':
			if ($mess[0] == "/")
				{
				//----- Обязательные команды -- help и start
   	     	    if (substr($mess,1,4) == "help") return TBHELP;
 	    	    if (substr($mess,1,5) == "start") return TBSTART;
		    	//----- Умный одногруппник -----
				if (substr($mess,1,4) == "rasp") raspisan($chat_id);
				if (substr($mess,1,9) == "headgroup") headgroup ($chat_id);
				if (substr($mess,1,5) == "group") return TBGROUP;
				if (substr($mess,1,4) == "week") return week();
				if (substr($mess,1,8) == "nextweek") return nextweek();
				if (substr($mess,1,5) == "today") return today();
				if (substr($mess,1,8) == "tomorrow") return tomorrow();
				if (substr($mess,1,10) == "professors") return TBPROFESSORS;
				if (substr($mess,1,7) == "labccna") labccna($chat_id, $mess);

				break;
				}
			else
				{
				if (substr($mess,0,12) == "завтра") return tomorrow();
				if (substr($mess,0,14) == "сегодня") return today();				
				}
		default: break;
		}
	}
?>



















