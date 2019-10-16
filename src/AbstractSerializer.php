<?php

namespace ALebediev\Serializer;

abstract class AbstractSerializer
{

    private function preparePrivateAndProtectedProperties($key)
    {
        $pos = strpos($key, "\0");
        $key = substr_replace($key, 'CROPSTART', $pos , strlen("\0"));
        $key = substr_replace($key, 'CROPEND', strpos($key, "\0"), strlen("\0"));

        return preg_replace('/CROPSTART[\s\S]+?CROPEND/', '', $key);
    }

    public function objectToArray ($object) : array
    {
        $array = [];
        foreach ((array) $object as $key => $value){

            if(strpos($key, "\0") !== false){
                $key = $this->preparePrivateAndProtectedProperties($key);
            }

            if(is_array($value) || is_object($value)){
                $array[$key] = $this->objectToArray($value);
            } else {
                $array[$key] = $value;
            }
        }
        return $array;
    }
}