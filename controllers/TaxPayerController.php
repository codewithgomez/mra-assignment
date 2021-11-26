<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\TaxPayersModel;

class TaxPayerController extends Controller
{
    public function home(){  
        //session_start();
        if ($this->isAuthorized()) {
            $this->setLayout('main');
            return $this->render('home');
        } else {
            header("Location: /login");
            exit;
        }
    }

    
    public function getTaxPayers(){
        //session_start();
        $taxPayerModel = new TaxPayersModel();
        if ($this->isAuthorized()) {
            $taxPayers =$taxPayerModel->getTaxPayers($_COOKIE['username'],$_COOKIE['token']);
            return  json_encode($taxPayers);
        } else {
            header("Location: /login");
            exit;
        }
    }
    public  function addTaxPayer(Request $request)
    {       //session_start();
            $taxModel = new TaxPayersModel();
            $taxModel -> loadData($request->getBody());
            $errors = $taxModel->validate();
            //var_dump($request->getBody());
            if(empty($errors)){
               $result = $taxModel->addTaxPayer($request->getBody());
               return json_encode($result);;
                
                
            }else{
                return json_encode($errors);
            }
       
    }

    public  function deleteTaxPayer(Request $request)
    {   session_start();
        $taxPayerModel = new TaxPayersModel();
        if ($this->isAuthorized()) {
            $payerId =$request->getBody()["id"];
            $taxPayer =$taxPayerModel->deleteTaxPayer($payerId);
            
           
            return  json_encode($taxPayer);
            //return  json_encode($taxPayers);
        } else {
            header("Location: /login");
            exit;
        }
       
    }

    public function singleTaxPayer(Request $request){
        //session_start();
        $taxPayerModel = new TaxPayersModel();
        if ($this->isAuthorized()) {
            $taxPayers =$taxPayerModel->getTaxPayers($_COOKIE['username'],$_COOKIE['token']);
            $payerId =$request->getBody()["id"];
            foreach ($taxPayers as $taxPayer) {
                if($taxPayer["TPIN"]== $payerId){
                    return json_encode($taxPayer);
                }
              }
            return  json_encode("nothing");
            //return  json_encode($taxPayers);
        } else {
            header("Location: /login");
            exit;
        }
    }

    //Delete user


    public function updateTaxPayer(Request $request){
        $taxModel = new TaxPayersModel();
        $taxModel -> loadData($request->getBody());
        $errors = $taxModel->validate();
        //var_dump($request->getBody());
        if(empty($errors)){
           $result = $taxModel->updateTaxPayer($request->getBody());
           return $result;
            
            
        }else{
            return json_encode($errors);
        }
    }
}
