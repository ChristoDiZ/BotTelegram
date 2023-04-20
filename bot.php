<?php 
$token= '6299139151:AAG4tt_2gl7qal5ftMO0IbXcZAhRVVSnhdQ';
$website='https://api.telegram.org/bot'.$token;

$input= file_get_contents('php://input');
$update= json_decode($input, TRUE);
  
$chatId=$update['message']['chat']['id'];
$message=$update['message']['text'];

switch($message){
    case 'pasillo 1':
        $response=" carne, queso y jamon"
        sendMessage($chatId,$response);
        break;
    case 'pasillo 2':
        $response=" leche, yogurt y cereal"
        sendMessage($chatId,$response);
        break;
    case 'pasillo 3':
        $response=" bebidas y jugos"
        sendMessage($chatId,$response);
        break;
    case 'pasillo 4':
        $response=" pan, pastel y tortas"
        sendMessage($chatId,$response);
        break;
    case 'pasillo 5':
        $response=" detergente y lavaloza"
        sendMessage($chatId,$response);
        break;
}

function sendMessage($chatId, $response) {
    $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response);
    file_get_contents($url);
}
?>