<?php

namespace app\models;

use app\core\Model;

class TaxPayersModel extends Model
{
    public string $tpin = '';
    public string $businessCertificateNumber = '';
    public string $tradingName = '';
    public string $businessRegistrationDate = '';
    public string $mobileNumber = '';
    public string $email = '';
    public string $physicalLocation = '';

    public function getTaxPayers($api_key, $candidate_id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://www.mra.mw/sandbox/programming/challenge/webservice/Taxpayers/getAll',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'apikey: 3fdb48c5-336b-47f9-87e4-ae73b8036a1c',
                'candidateid: gowalumbe@gmail.com',
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    public function deleteTaxPayer($payerId)
    {
        $curl = curl_init();
        $data["TPIN"]=$payerId;

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://www.mra.mw/sandbox/programming/challenge/webservice/Taxpayers/delete',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => [
                'apikey: 3fdb48c5-336b-47f9-87e4-ae73b8036a1c',
                'candidateid:' . $_COOKIE['username'],
                'Content-Type: application/json',
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function getTaxPayer($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://www.mra.mw/sandbox/programming/challenge/webservice/Taxpayers/getAll',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'apikey: 3fdb48c5-336b-47f9-87e4-ae73b8036a1c',
                'candidateid:' . $_COOKIE['username'],
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        return $response;
    }

    public function updateTaxPayer($data)
    {
        $details['TPIN'] = $data['tpin'];
        $details['BusinessCertificateNumber'] =
            $data['businessCertificateNumber'];
        $details['TradingName'] = $data['tradingName'];
        $details['BusinessRegistrationDate'] =
            $data['businessRegistrationDate'];
        $details['MobileNumber'] = $data['mobileNumber'];
        $details['Email'] = $data['email'];
        $details['PhysicalLocation'] = $data['physicalLocation'];
        $details['Username'] = $_COOKIE['username'];
        $details['Deleted'] = false;
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://www.mra.mw/sandbox/programming/challenge/webservice/Taxpayers/edit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($details),
            CURLOPT_HTTPHEADER => [
                'apikey: 3fdb48c5-336b-47f9-87e4-ae73b8036a1c',
                'candidateid:' . $_COOKIE['username'],
                'Content-Type: application/json',
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function addTaxPayer($data)
    {
        $details['TPIN'] = $data['tpin'];
        $details['BusinessCertificateNumber'] =
            $data['businessCertificateNumber'];
        $details['TradingName'] = $data['tradingName'];
        $details['BusinessRegistrationDate'] =
            $data['businessRegistrationDate'];
        $details['MobileNumber'] = $data['mobileNumber'];
        $details['Email'] = $data['email'];
        $details['PhysicalLocation'] = $data['physicalLocation'];
        $details['Username'] = $_COOKIE['username'];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://www.mra.mw/sandbox/programming/challenge/webservice/Taxpayers/add',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($details),
            CURLOPT_HTTPHEADER => [
                'apikey: 3fdb48c5-336b-47f9-87e4-ae73b8036a1c',
                'candidateid:' . $_COOKIE['username'],
                'Content-Type: application/json',
            ],
        ]);

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_MAX, 'max' => 50 ]],
            'tpin' => [self::RULE_REQUIRED],
            'businessCertificateNumber' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 50 ]],
            'tradingName' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 50 ]],
            'businessRegistrationDate' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 50 ]],
            'mobileNumber' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 50 ]],
            'physicalLocation' => [self::RULE_REQUIRED, [self::RULE_MAX, 'max' => 50 ]],
        ];
    }
}
