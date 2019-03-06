 <?php
  

function send_LINE($msg){
 $access_token = 'mPRtzxyMDQvpnBdf+euPr/hOB5b1w5iry9oLpJ0RtAcH/ML//LIpBK/bAquWRkInRTMBC8T3icWh5CeYe0wIDVl67BhM0Pj1RVEJIbdFhZqoK0BbCxIMiHI0tQvIUxyBvyqlr+UPDcMV3cRQkMDFOAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uc28feafe5a7dbfd2d80c3aefb5f15612',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
