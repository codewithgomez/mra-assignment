<?php

namespace app\core\form;
use app\core\Model;
use app\core\form\Field;

class Form{
    public static function begin($id,$action, $method){
        echo sprintf('<form id="%s" action="%s" method="%s">',$id, $action, $method);
        return new Form();
    }

    public static function end(){
        echo '</form>';
    }

    public function field(Model $model, $name, $attribute){
        return new Field($model, $name, $attribute);
    }
}