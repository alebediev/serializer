<?php

namespace ALebediev\Serializer;


final class JsonSerializer extends AbstractSerializer implements SerializerInterface
{
   public function serialize($object)
   {
       return \json_encode($this->objectToArray($object));
   }
}