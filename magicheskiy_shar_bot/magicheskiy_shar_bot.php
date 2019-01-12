<?php

$botToken = "012345678:ABCD123abcDEFGhijk456-lmn78op90";
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
 
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
 
switch($message) {
       
        case "/start":
        case "/start@magicheskiy_shar_bot":                          
                sendMessage($chatId, "Я - магический шар судьбы. У меня есть ответы на все Ваши вопросы. Я помогу Вам сделать выбор!");
                break;  
        case "/help":
        case "/help@magicheskiy_shar_bot":                          
                sendMessage($chatId, "Задай вопрос в чат или нажми 'Встряхнуть'");
                break;       
        case "/fortune@magicheskiy_shar_bot":                          
        case "/fortune":
                $var = rand(1,20);
                if($var == 1)
                {
                sendMessage($chatId, "Бесспорно");
                } 
                if($var == 2)
                {
                sendMessage($chatId, "Предрешено");
                }
                if($var == 3)
                {
                sendMessage($chatId, "Никаких сомнений");
                }
                if($var == 4)
                {
                sendMessage($chatId, "Определённо да");
                }
                if($var == 5)
                {
                sendMessage($chatId, "Можешь быть уверен(а) в этом");
                }
                if($var == 6)
                {
                sendMessage($chatId, "Мне кажется — «да»");
                }
                if($var == 7)
                {
                sendMessage($chatId, "Вероятнее всего");
                }
                if($var == 8)
                {
                sendMessage($chatId, "Хорошие перспективы");
                }
                if($var == 9)
                {
                sendMessage($chatId, "Знаки говорят — «да»");
                }
                if($var == 10)
                {
                sendMessage($chatId, "Да");
                }
                if($var == 11)
                {
                sendMessage($chatId, "Пока не ясно, попробуй снова");
                }
                if($var == 12)
                {
                sendMessage($chatId, "Спроси позже");
                }
                if($var == 13)
                {
                sendMessage($chatId, "Лучше не рассказывать");
                }
                if($var == 14)
                {
                sendMessage($chatId, "Сейчас нельзя предсказать");
                }
                if($var == 15)
                {
                sendMessage($chatId, "Сконцентрируйся и спроси опять");
                }
                if($var == 16)
                {
                sendMessage($chatId, "Даже не думай");
                }
                if($var == 17)
                {
                sendMessage($chatId, "Мой ответ — «нет»");
                }
                if($var == 18)
                {
                sendMessage($chatId, "По моим данным — «нет»");
                }
                if($var == 19)
                {
                sendMessage($chatId, "Перспективы не очень хорошие");
                }
                if($var == 20)
                {
                sendMessage($chatId, "Весьма сомнительно");
                }                                
                break;              
                
                   
        default:
                $var = rand(1,20);
                if($var == 1)
                {
                sendMessage($chatId, "Бесспорно");
                } 
                if($var == 2)
                {
                sendMessage($chatId, "Предрешено");
                }
                if($var == 3)
                {
                sendMessage($chatId, "Никаких сомнений");
                }
                if($var == 4)
                {
                sendMessage($chatId, "Определённо да");
                }
                if($var == 5)
                {
                sendMessage($chatId, "Можешь быть уверен(а) в этом");
                }
                if($var == 6)
                {
                sendMessage($chatId, "Мне кажется — «да»");
                }
                if($var == 7)
                {
                sendMessage($chatId, "Вероятнее всего");
                }
                if($var == 8)
                {
                sendMessage($chatId, "Хорошие перспективы");
                }
                if($var == 9)
                {
                sendMessage($chatId, "Знаки говорят — «да»");
                }
                if($var == 10)
                {
                sendMessage($chatId, "Да");
                }
                if($var == 11)
                {
                sendMessage($chatId, "Пока не ясно, попробуй снова");
                }
                if($var == 12)
                {
                sendMessage($chatId, "Спроси позже");
                }
                if($var == 13)
                {
                sendMessage($chatId, "Лучше не рассказывать");
                }
                if($var == 14)
                {
                sendMessage($chatId, "Сейчас нельзя предсказать");
                }
                if($var == 15)
                {
                sendMessage($chatId, "Сконцентрируйся и спроси опять");
                }
                if($var == 16)
                {
                sendMessage($chatId, "Даже не думай");
                }
                if($var == 17)
                {
                sendMessage($chatId, "Мой ответ — «нет»");
                }
                if($var == 18)
                {
                sendMessage($chatId, "По моим данным — «нет»");
                }
                if($var == 19)
                {
                sendMessage($chatId, "Перспективы не очень хорошие");
                }
                if($var == 20)
                {
                sendMessage($chatId, "Весьма сомнительно");
                }                                
                break;         
}
 
function sendMessage ($chatId, $message) {     
        $url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".urlencode($message).'&reply_markup={"keyboard":[["Встряхнуть"]],"one_time_keyboard":false}';
        file_get_contents($url);
}
 
?>
