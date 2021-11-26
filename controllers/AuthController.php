<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\LogoutModel;
use app\models\LoginModel;

class AuthController extends Controller{
    public function login(Request $request){

        if ($this->isAuthorized()) {
            header("Location: /");
            exit;
        } else {
            $loginModel = new LoginModel();
            $this->setLayout('auth');
            if($request->isPost()){
                
                $loginModel -> loadData($request->getBody());
                $errors = $loginModel->validate();
    
                if(empty($errors)){
    
                    $authState = $loginModel->login($request->getBody());
                    //var_dump($authState);
                    if($authState["Authenticated"]){
                        setcookie("token" ,$authState["Token"]["Value"]);
                        setcookie("username" ,$authState["Token"]["Name"]);
                        header("Location: /");
                        exit;
                    }else if ($authState["Authenticated"] == false){
                        //v//ar_dump($authState["Remark"]);
                        #password000122
                        #return $this->render('login', ['model'=>$loginModel]);
                    }
                    //if($response["Authenticated"]){
                        //  return true;
                     // }
                    
                }
                //var_dump($errors);
    
                return $this->render('login', ['model'=>$loginModel]);
            }
           
            return $this->render('login', ['model'=>$loginModel]);
        }
        
      

    }
  public function logout(){
    if ($this->isAuthorized()) {
        $logout = new LogoutModel();
        $result=$logout->logUserOut()["ResultCode"];
       if($result==1){
        setcookie("username", "false");
        setcookie("token", "false");
        //header("Location: /login");
        //exit;
        return (true);
       }
        
        return ("reached endpoint");
            
    } else {
        header("Location: /login");
        exit;
    }

  }
}

//
            //