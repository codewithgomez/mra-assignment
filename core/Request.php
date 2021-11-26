<?php

namespace app\core;
/**
 * Class Router
 * 
 * @author Gomezgani Walumbe
 * @package app\core
 */

 class Request{
        public function getPath(){
            $path = $_SERVER['REQUEST_URI'] ?? '?';
            $position = strpos($path,"?");
            if($position === false){
                return $path;
            }
            return substr($path, 0, $position);
            
        }

        public function getMethod()
        {
            # code...
            return strtolower($_SERVER['REQUEST_METHOD']);
        }

        public function isGet(){
            return $this->getMethod() === 'get';
        }

        public function isPost(){
            return $this->getMethod() === 'post';
        }

        public function getBody(){
            $body = [];
            if($this->getMethod() === 'get')
            {
                foreach($_GET as $key => $item){
                    $body[$key] = filter_input( INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }

            if($this->getMethod() === 'post')
            {
                foreach($_POST as $key => $item){
                    $body[$key] = filter_input( INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
            return $body;

        }
 }