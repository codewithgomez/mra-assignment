<?php

namespace app\core\form;

use app\core\Model;

class Field{

    public Model $model;
    public string $name;
    public string $attribute;
   

    public function __construct(Model $model,  string $name, string $attribute)
    {
        $this->model = $model;
        $this -> name = $name;
        $this -> attribute = $attribute;
        
    }

    public function __toString()
    {
       
        return sprintf(
            '
            <div class="form-group">
            <label for="recipient-name" class="col-form-label ">%s</label>
            <input p-2 type="text" name="%s" value="%s" id="%s" class="form-control%s" >
            </div>
            <div  class="text-danger">
            <small class="text-left">%s</small>
            </div>
            ',
            $this->name,
            $this->attribute,
            $this-> model->{$this->attribute},
            $this->attribute,
            $this-> model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->getFirstError($this->attribute)
        );
    }

}