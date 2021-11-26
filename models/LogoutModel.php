<?php
namespace app\models;

use app\core\Model;

class LogoutModel 
{
public function logUserOut(){
    $curl = curl_init();
    $user["Email"] =$_COOKIE['username'];

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.mra.mw/sandbox/programming/challenge/webservice/auth/logout',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
 "Email": "gowalumbe@gmail.com"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

return json_decode($response, true);

}
}


