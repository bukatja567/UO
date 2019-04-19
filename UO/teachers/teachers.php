<?php
function findp($chat_id, $mess)
    {
    global $TEACHERS;
    $tmp = explode(" ", $mess);
    $tmp2 = $tmp[1];

    //sendMessage($chat_id,$tmp[1]);
    if (strlen($tmp[1])>7)
        {
        foreach ($TEACHERS as  $key => $i)
            foreach ($i as  $key2 => $j)
                {
                    if ((strripos(strtolower_ru($j),$tmp[1]) !== false) or (strtolower_ru($j)==$tmp[1])) 
                        {
                        sendPhoto($chat_id, $TEACHERS[$key]['photo']);
                        if ($TEACHERS[$key]['theme2']=="") sendMessage($chat_id, "*".$TEACHERS[$key]['name']." ".$TEACHERS[$key]['name_father']." ".$TEACHERS[$key]['lastname']."\n*Предмет в этом семестре: ".$TEACHERS[$key]['theme1']."\nОценивание: ".$TEACHERS[$key]['assessment1']."\n".$TEACHERS[$key]['class']."\nКонтакты: ".$TEACHERS[$key]['contacts']);
                        else sendMessage($chat_id, "*".$TEACHERS[$key]['name']." ".$TEACHERS[$key]['name_father']." ".$TEACHERS[$key]['lastname']."\n*Предметы в этом семестре: \n".$TEACHERS[$key]['theme1']."\nОценивание: ".$TEACHERS[$key]['assessment1']."\n".$TEACHERS[$key]['theme2']."\nОценивание: ".$TEACHERS[$key]['assessment2']."\n".$TEACHERS[$key]['class']."\nКонтакты: ".$TEACHERS[$key]['contacts']);
                        $tmp2 = 'iamfind';
                        break;
                        }
                }
        if ($tmp2 != 'iamfind') sendMessage($chat_id,"Не найдено!");
        }
    else sendMessage($chat_id,"Слишком короткий поисковый запрос!");
    }
?>