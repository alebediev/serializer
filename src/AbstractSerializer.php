<?php

namespace App;

abstract class AbstractSerializer
{
    public function objectToArray ($object) : array
    {
        $array = [];
        foreach ($object as $key => $value){
            if(is_array($value) || is_object($value)){
                $array[$key] = $this->objectToArray($value);
            } else {
                $array[$key] = $value;
            }
        }
        return $array;
    }
}