<?php
  $bottoken= "5805022142:AAF3bs5Pt6i7ycRd8BrsxCmbbMemrDSZxGY";
  $chatid ="5911350350";
  
  define('BOT_TOKEN', $bottoken);
  define('CHAT_ID', $chatid);
  define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');
  function enviar_telegram($msj){
    $queryArray = [
      'chat_id' => CHAT_ID,
      'text' => $msj,
    ];
    $url = 'https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'. http_build_query($queryArray);
    $result = file_get_contents($url);
  }
enviar_telegram($msj);
?>
