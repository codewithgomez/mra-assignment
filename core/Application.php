<?php
namespace app\core;
/*
*@author Gomezgani Walumbe
*@package app\core
*/
 

Class Application{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public  static Application $app;
    public Response $response;

    public function __construct($rootPath){
        self::$ROOT_DIR =$rootPath;
        self::$app = $this;
        $this-> request= new Request;
        $this -> response = new Response;
        $this -> router = new Router($this-> request, $this->response);
        

        
    }

    public function run(){
        echo $this-> router-> resolve();
    }
}