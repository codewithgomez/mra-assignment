<?php

namespace app\models;

use app\core\Model;

class LoginModel extends Model
{
    
    public string $email = "";
    public string $password = "";

    public function login($data)
    {
        $this->password = strval($data['password']);
        $this->email = strval($data['email']) ;


        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://www.mra.mw/sandbox/programming/challenge/webservice/auth/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => "{
                'Email': '$this->email' ,
                'Password': '$this->password'
                }",
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        ]);

        $response = curl_exec($curl);

        

        curl_close($curl);
        
        
        #converting response to object
        $response = json_decode($response, true);
        
        #checking if user is authenticated
        //if($response["Authenticated"]){
          //  return true;
       // }
        return $response;
    }

    public function rules(): array
    {
        return [
            
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED],
        ];
    }
}
